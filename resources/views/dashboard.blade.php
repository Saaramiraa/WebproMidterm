<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap');

        :root {
            --text-color: #DF927D;
            --text-color-blend: #030558;
            --back-up-color: #E7FAF9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            width: 100%;
            height: 100vh;
            background: url('img/book.jpg') no-repeat center center / cover;
        }

        nav {
            width: 100%;
            padding: 1rem 2rem; 
            display: flex;
            flex-direction: column; 
            align-items: center;
        }

        .logo h1 {
            font-size: 24px; 
            color: #fff;
        }

        .links {
            width: 100%;
            display: flex;
            justify-content: space-between; 
            margin-top: 1rem; 
        }

        ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap; 
            justify-content: center; 
            gap: 2rem; 
        }

        li a {
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 25px;
            padding: 10px 15px;
            transition: 0.65s;
        }

        li a:hover {
            background-color: var(--text-color);
        }

        .active {
            background-color: var(--text-color);
        }

        button {
            border: 2px solid var(--back-up-color);
            background: transparent;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 16px;
            font-weight: 600;
            color: var(--back-up-color);
            cursor: pointer;
            transition: 0.65s;
            margin-top: 1rem;
        }

        button:hover {
            background-color: var(--back-up-color);
            color: #333;
        }

        .home-content {
            padding: 2rem;
            display: flex;
            align-items: center;
            flex-direction: column;
            height: auto;
            text-align: center;
        }

        .home-container {
            align-items: center;
            max-width: 600px;
            width: 100%;
            position: relative;
        }

        .home-container h1 {
            color: #ff1100;
            font-size: 3rem;
            padding-bottom: 20px;
        }

        .home-container p {
            color: #fff;
            padding: 20px;
            font-size: 16px;
            position: relative;
            z-index: 2;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.41);
            z-index: 1;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                align-items: center;
            }

            ul {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }

            .home-container h1 {
                font-size: 2.5rem;
            }

            .home-container p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Logo</h1>
            </div>
            <div class="links">
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="{{ route('authors.index') }}">View Collection</a></li> 
                    <li><a href="{{ route('authors.create') }}">Create Authors</a></li>
                    <li><a href="{{ route('books.create') }}">Create Book</a></li> 
                    <li><a href="{{ route('profile.edit') }}">Profile</a></li> 
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Log Out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="home-content">
            <div class="home-container">
                <h1>Book & Author Tracker</h1>
                <div class="overlay"></div> <!-- Background overlay -->
                <p>A Book & Author Tracker is a system for efficiently managing and organizing books and their authors. It allows users to add, view, update, and delete book and author information, enabling easy tracking of their relationships. The tracker supports features for book management alongside author management that includes profiles with names. It simplifies searching and filtering, allowing users to find books by specific authors or explore authors based on their works. Overall, this system streamlines the management of book collections, ensuring accurate and up-to-date records.</p>
            </div>
        </div>
    </header>
</body>
</html>
