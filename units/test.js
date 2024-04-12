const axios = require('axios');
const cheerio = require('cheerio');

// Function to search APKMirror for APKs
async function searchAPKMirror(query) {
    try {
        // Construct the search URL
        const searchUrl = `https://www.apkmirror.com/?s=${query}`;

        // Fetch the search results page
        const response = await axios.get(searchUrl);
        const html = response.data;

        // Parse the HTML using Cheerio
        const $ = cheerio.load(html);

        // Extract information from the search results
        const results = $('.appRow').map((index, element) => {
            const title = $(element).find('.fontBlack').text().trim();
            const downloadLink = $(element).find('.downloadButton').attr('href');
            return { title, downloadLink };
        }).get();

        // Return the results
        return results;
    } catch (error) {
        console.error('Error searching APKMirror:', error);
        return [];
    }
}

// Example usage: search for APKs related to 'social media'
searchAPKMirror('social media').then(results => {
    console.log(results);
});