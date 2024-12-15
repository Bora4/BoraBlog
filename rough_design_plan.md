# BoraBlog
## Entities
### User
* Email
* Password
* Nickname

### Post
* Title
* Message
* Category ID
* User ID

### Blog
for storing posts of a single user
* User ID

### Category
* Name

### Comment
* Message
* Post ID
* User ID

## Controllers
### UsersController
* CRUD Operations

### PostsController
* CRUD Operations

### CommentsController
* CRUD Operations

## MiddleWares
### Auth Middleware
* ApiKeyMiddleWare

## Routes
### AdminRoutes
* viewCategories
* viewCategory
* createCategory
* editCategory
* deleteCategory

### PublicRoutes
* viewPosts
* viewPost
* createPost
* editPost
* deletePost
* createComment
* editComment
* deleteComment

## Hooks
### TwitterHook
* tweetOnNewPost
