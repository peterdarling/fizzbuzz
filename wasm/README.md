Example using Emscripten SDK

To complie:

    $ emcc fizzbuzz.c -s WASM=1 -o fizzbuzz.html

Use Emscripten SDK HTTP server to test:

    $ emrun --no_browser --port 8080 .

URL:

    http://localhost:8080/fizzbuzz.html