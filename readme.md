## Interfaces for common requests and responses from Automated testing Services

The tests folder will have a number of examples usages and expectations of this service.

After this is in place you can inject it into your Controller/Command
using your dependency injection container to assign the instantiable class
 that follows this interface.

There are example clients classes like https://github.com/jlipps/sausage and one I will
implement if that one is not enough that follows the design of https://github.com/KnpLabs/php-github-api.

This way you can drop in any Automated Testing Provider as needed event switch on the fly.

