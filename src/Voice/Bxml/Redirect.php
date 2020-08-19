<?php
/**
 * Redirect.php
 *
 * Implementation of the BXML Redirect verb
 *
 *  * @copyright Bandwidth INC
 */

namespace BandwidthLib\Voice\Bxml;

require_once "Verb.php";

class Redirect extends Verb {

    /**
     * Sets the username attribute for Redirect
     *
     * @param string $username The username for http authentication on the redirect callback url
     */
    public function username($username) {
        $this->username = $username;
    }

    /**
     * Sets the password attribute for Redirect
     *
     * @param string $password The password for http authentication on the redirect callback url
     */
    public function password($password) {
        $this->password = $password;
    }

    /**
     * Sets the redirectUrl attribute for Redirect
     *
     * @param string $redirectUrl The url to receive the redirect callback 
     */
    public function redirectUrl($redirectUrl) {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * Sets the redirectMethod attribute for Redirect
     *
     * @param string $redirectMethod The http method to send the redirect callback 
     */
    public function redirectMethod($redirectMethod) {
        $this->redirectMethod = $redirectMethod;
    }

    /**
     * Sets the tag attribute for Redirect
     *
     * @param string $tag A custom string to be included in callbacks 
     */
    public function tag($tag) {
        $this->tag = $tag;
    }

    /**
     * Sets the redirectFallbackUrl attribute for Redirect
     *
     * @param string $redirectFallbackUrl Fallback url for redirect events 
     */
    public function redirectFallbackUrl($redirectFallbackUrl) {
        $this->redirectFallbackUrl = $redirectFallbackUrl;
    }

    /**
     * Sets the redirectFallbackMethod attribute for Redirect
     *
     * @param string $redirectFallbackMethod HTTP method for fallback events 
     */
    public function redirectFallbackMethod($redirectFallbackMethod) {
        $this->redirectFallbackMethod = $redirectFallbackMethod;
    }

    /**
     * Sets the fallbackUsername attribute for Redirect
     *
     * @param string $fallbackUsername HTTP basic auth username for fallback events
     */
    public function fallbackUsername($fallbackUsername) {
        $this->fallbackUsername = $fallbackUsername;
    }

    /**
     * Sets the fallbackPassword attribute for Redirect
     *
     * @param string $fallbackPassword HTTP basic auth password for fallback events 
     */
    public function fallbackPassword($fallbackPassword) {
        $this->fallbackPassword = $fallbackPassword;
    }

    public function toBxml($doc) {
        $element = $doc->createElement("Redirect");

        if(isset($this->username)) {
            $element->setAttribute("username", $this->username);
        }

        if(isset($this->password)) {
            $element->setAttribute("password", $this->password);
        }

        if(isset($this->tag)) {
            $element->setAttribute("tag", $this->tag);
        }

        if(isset($this->redirectUrl)) {
            $element->setAttribute("redirectUrl", $this->redirectUrl);
        }

        if(isset($this->redirectMethod)) {
            $element->setAttribute("redirectMethod", $this->redirectMethod);
        }

        if(isset($this->redirectFallbackUrl)) {
            $element->setAttribute("redirectFallbackUrl", $this->redirectFallbackUrl);
        }

        if(isset($this->redirectFallbackMethod)) {
            $element->setAttribute("redirectFallbackMethod", $this->redirectFallbackMethod);
        }

        if(isset($this->fallbackUsername)) {
            $element->setAttribute("fallbackUsername", $this->fallbackUsername);
        }

        if(isset($this->fallbackPassword)) {
            $element->setAttribute("fallbackPassword", $this->fallbackPassword);
        }

        return $element;
    }
}
