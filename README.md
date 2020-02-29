## FebruaryChallenge2020

####Level 1 - Encode a string

- Use JavaScript or PHP to encode a string
- This could either be a command or a web page that converts a given string to a hashed string
- If it's a command then the first argument should be the string you want to encrypt.
- If it's a webpage you can pass the string in the query string.

Web request

/hashthis?string=helloworld

Or command

$ ./hashthis.php helloword

####Level 2 Add the hashed string to a text file

- Create a new line in a text file for every hashed string

####Level 3 Validate the clear text string

- Create a HTML form that posts a string for validation
- Validate the submitted string against the hashes in the text file -- Loop over existing hashes in the text file and verify that the submitted string exist
- Print the result to the page
- If submitted string is valid then print out the decoded string and its hash


###USAGE

To generate and save the hash

    /hashthis?string=helloworld
    
    
index.php contains the Level 3 form
