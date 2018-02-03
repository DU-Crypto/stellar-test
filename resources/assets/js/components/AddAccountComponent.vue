 <template>
    <button type="submit" class="btn btn-success" v-on:click="createAccount">Add Account</button>
</template>

<script>
      export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return{
                Account: {
                    user_id: 1,
                    symbol: null,
                    address: null,
                    key: null,
                    balance: 0
                }
            }
        },
       
        methods: {
            createAccount: function(){
                var StellarSdk = require('stellar-sdk');
                var server = new StellarSdk.Server('https://horizon-testnet.stellar.org');
                var Keypair = require("stellar-base").Keypair;
                var newAccount = Keypair.random();
                var address=newAccount.publicKey();
                var key=newAccount.secret();
                 var account = this.Account;
                axios.get('https://horizon-testnet.stellar.org/friendbot', {
                    params: {
                      addr: address
                    }
                })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });   

                var StellarSdk = require('stellar-sdk');
                var server = new StellarSdk.Server('https://horizon-testnet.stellar.org');
            console.log(address); 
              

             setTimeout(function () { 
                server.accounts()
                .accountId(address)
                .call()
                .then(function (accountResult) {
                    console.log(accountResult);
                     console.log('Balances for account: ' + address);
                      accountResult.balances.forEach(function(balance) {
                        console.log('Type:', balance.asset_type, ', Balance:', balance.balance);
                        account.balance= balance.balance;
                    });
                })
                .catch(function (err) {
                    console.error(err);
                })
            },5000);
            
            setTimeout(function () { 
               

                account.address= address;
            account.key=key;
            
            account.symbol= "XLM";
            console.log(account)
                
               axios.post('/accounts',account).then().catch(function(error){
                alert(error.message);
                });
            },10000);
            

            }
        }

    }
</script>
