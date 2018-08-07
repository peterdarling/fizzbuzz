#include <stdio.h>

int main(void)
{
    char numStr[5];
    for (int i=1; i<=100; i++) {
        if (i % 3 && i % 5) sprintf(numStr,"%d ", i);
        else numStr[0] = '\0';

        printf("%s%s%s\n", numStr,
            i % 3 ? "" : "Fizz",
            i % 5 ? "" : "Buzz"
        );
    }

    return 0;
}
