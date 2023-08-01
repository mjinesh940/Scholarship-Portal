const express = require('express');
const app = express();

// Middleware to parse incoming JSON data
app.use(express.json());

// Define a route for retrieving scholarship listings
app.get('/api/scholarships', (req, res) => {
  // In a real application, this endpoint would fetch scholarship data from a database
  // For simplicity, we'll define a static array of scholarships
  const scholarships = [
    {
      id: 1,
      name: 'Scholarship 1',
      description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      eligibility: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      deadline: '30th June 2023',
      amount: '$10,000'
    },
    {
      id: 2,
      name: 'Scholarship 2',
      description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      eligibility: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      deadline: '15th July 2023',
      amount: '$5,000'
    }
  ];

  // Return the scholarships as a JSON response
  res.json(scholarships);
});

// Start the server
app.listen(5000, () => {
  console.log('Server is running on port 5000');
});
