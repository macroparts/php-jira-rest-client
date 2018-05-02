<?php

namespace JiraRestApi\Configuration;

/**
 * Class AbstractConfiguration.
 */
abstract class AbstractConfiguration implements ConfigurationInterface
{
    /**
     * Jira host.
     *
     * @var string
     */
    protected $jiraHost;

    /**
     * Jira login.
     *
     * @var string
     */
    protected $jiraUser;

    /**
     * Jira password.
     *
     * @var string
     */
    protected $jiraPassword;

    /**
     * Path to log file.
     *
     * @var string
     */
    protected $jiraLogFile;

    /**
     * Log level (DEBUG, INFO, ERROR, WARNING).
     *
     * @var string
     */
    protected $jiraLogLevel;

    /**
     * Curl options CURLOPT_SSL_VERIFYHOST.
     *
     * @var bool
     */
    protected $curlOptSslVerifyHost;

    /**
     * Curl options CURLOPT_SSL_VERIFYPEER.
     *
     * @var bool
     */
    protected $curlOptSslVerifyPeer;

    /**
     * Curl options CURLOPT_VERBOSE.
     *
     * @var bool
     */
    protected $curlOptVerbose;

    /**
     * HTTP header 'Authorization: Bearer {token}' for OAuth.
     *
     * @var string
     */
    protected $oauthAccessToken;

    /**
     * enable cookie authorization.
     *
     * @var bool
     */
    protected $cookieAuthEnabled;

    /**
     * cookie file name.
     *
     * @var string
     */
    protected $cookiePath = 'jira.cookies';

    /**
     * @return string
     */
    public function getJiraHost()
    {
        return $this->jiraHost;
    }

    /**
     * @return string
     */
    public function getCookiePath()
    {
        return $this->cookiePath;
    }

    /**
     * @return string
     */
    public function getJiraUser()
    {
        return $this->jiraUser;
    }

    /**
     * @return string
     */
    public function getJiraPassword()
    {
        return $this->jiraPassword;
    }

    /**
     * @return string
     */
    public function getJiraLogFile()
    {
        return $this->jiraLogFile;
    }

    /**
     * @return string
     */
    public function getJiraLogLevel()
    {
        return $this->jiraLogLevel;
    }

    /**
     * @return bool
     */
    public function isCurlOptSslVerifyHost()
    {
        return $this->curlOptSslVerifyHost;
    }

    /**
     * @return bool
     */
    public function isCurlOptSslVerifyPeer()
    {
        return $this->curlOptSslVerifyPeer;
    }

    /**
     * @return bool
     */
    public function isCurlOptVerbose()
    {
        return $this->curlOptVerbose;
    }

    /**
     * @return string
     */
    public function getOAuthAccessToken()
    {
        return $this->oauthAccessToken;
    }

    /**
     * @return string
     */
    public function isCookieAuthorizationEnabled()
    {
        return $this->cookieAuthEnabled;
    }

    /**
     * @param string $jiraHost
     * @return $this
     */
    public function setJiraHost($jiraHost)
    {
        $this->jiraHost = $jiraHost;
        return $this;
    }

    /**
     * @param string $jiraUser
     * @return $this
     */
    public function setJiraUser($jiraUser)
    {
        $this->jiraUser = $jiraUser;
        return $this;
    }

    /**
     * @param string $jiraPassword
     * @return $this
     */
    public function setJiraPassword($jiraPassword)
    {
        $this->jiraPassword = $jiraPassword;
        return $this;
    }

    /**
     * @param string $jiraLogFile
     * @return $this
     */
    public function setJiraLogFile($jiraLogFile)
    {
        $this->jiraLogFile = $jiraLogFile;
        return $this;
    }

    /**
     * @param string $jiraLogLevel
     * @return $this
     */
    public function setJiraLogLevel($jiraLogLevel)
    {
        $this->jiraLogLevel = $jiraLogLevel;
        return $this;
    }

    /**
     * @param bool $curlOptSslVerifyHost
     * @return $this
     */
    public function setCurlOptSslVerifyHost($curlOptSslVerifyHost)
    {
        $this->curlOptSslVerifyHost = $curlOptSslVerifyHost;
        return $this;
    }

    /**
     * @param bool $curlOptSslVerifyPeer
     * @return $this
     */
    public function setCurlOptSslVerifyPeer($curlOptSslVerifyPeer)
    {
        $this->curlOptSslVerifyPeer = $curlOptSslVerifyPeer;
        return $this;
    }

    /**
     * @param bool $curlOptVerbose
     * @return $this
     */
    public function setCurlOptVerbose($curlOptVerbose)
    {
        $this->curlOptVerbose = $curlOptVerbose;
        return $this;
    }

    /**
     * @param string $oauthAccessToken
     * @return $this
     */
    public function setOauthAccessToken($oauthAccessToken)
    {
        $this->oauthAccessToken = $oauthAccessToken;
        return $this;
    }

    /**
     * @param bool $cookieAuthEnabled
     * @return $this
     */
    public function setCookieAuthEnabled($cookieAuthEnabled)
    {
        $this->cookieAuthEnabled = $cookieAuthEnabled;
        return $this;
    }

    /**
     * @param string $cookiePath
     * @return $this
     */
    public function setCookiePath($cookiePath)
    {
        $this->cookiePath = $cookiePath;
        return $this;
    }
}
