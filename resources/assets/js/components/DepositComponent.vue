<template>
    <button type="button" class="btn btn-success">Deposit</button>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['account'],
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
	        
	   		
   		}
   	}
</script>
