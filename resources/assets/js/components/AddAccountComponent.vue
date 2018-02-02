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
            var Keypair = require("stellar-base").Keypair;
            var newAccount = Keypair.random();
            var account = this.Account;
          
            account.address=newAccount.publicKey();
            account.key=newAccount.secret();
            account.balance=0;
            account.symbol= "XLM";
            console.log(account)
       
           axios.post('/accounts',account).then().catch(function(error){
        alert(error.message);
        });

        }
        }

    }
</script>
