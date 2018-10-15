# Modified module from Evil Portal for Pineapple
This modifications allow the module to block HTTPs request from a client as long as they didn't go trough the captive portal at least once.

As this modification makes the HTTPs certificate check fail, the module cannot redirect directly the client to your captive portal. Here are the behaviors depending on your web browser when a client tries to load an HTTPs without going trough your captive portal :

> Mozilla firefox still asks to your client if he wants to connect to the network (= redirect user to the captive portal), clicking on a small button.

> Chrome automatically opens up a new tab with your captive portal when you try to open an HTTPs website.

> IE doens't care and just says that the certificate check failed.

> If you browse to an HTTP website, you will be redirected to your captive portal automatically.

## Landed page

I added a landing page named "dest.php" in the example, and made some modifications in the modules in order to redirect to this page after login trough the captive portal no matter what happens. It looks a lot more natural then just reload index.php page as the module would originaly do.
