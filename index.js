import DirectusSDK from '@directus/sdk-js';
const client = new DirectusSDK();

client.getItems('Pages')
.then(data => {
    console.log(data);
}).catch(err => {
    console.error(err);
});