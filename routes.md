# API Routes Documentation

## Authentication Routes
- **POST** `/api/v1/login` - Authenticate user and get token.
- **POST** `/api/v1/register` - Register a new user.
- **POST** `/api/v1/logout` - Logout user and  delte the token.

## User Routes
- **GET** `/api/v1/user` - Get the authenticated user's details. 

## Articles Routes
- **GET** `/api/v1/articles` - Retrieve a list of articles.
- **POST** `/api/v1/articles` - Create a new article.
- **GET** `/api/v1/articles/{id}` - Retrieve details of a specific article.
- **PATCH** `/api/v1/articles/{id}` - Update a specific article.
- **DELETE** `/api/v1/articles/{id}` - Delete a specific article.

## Additional Information
- Make sure to include the authentication token (Bearer Token) in the header for protected routes.
