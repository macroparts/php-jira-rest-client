<?php
/**
 * @copyright 2018 innosabi GmbH
 * @author Daniel Jurkovic <daniel.jurkovic@innosabi.com>
 */

namespace JiraRestApi\Configuration;


/**
 * Class AbstractConfiguration.
 */
interface ConfigurationInterface
{
    /**
     * @return string
     */
    public function getJiraHost();

    /**
     * @return string
     */
    public function getCookiePath();

    /**
     * @return string
     */
    public function getJiraUser();

    /**
     * @return string
     */
    public function getJiraPassword();

    /**
     * @return string
     */
    public function getJiraLogFile();

    /**
     * @return string
     */
    public function getJiraLogLevel();

    /**
     * @return bool
     */
    public function isCurlOptSslVerifyHost();

    /**
     * @return bool
     */
    public function isCurlOptSslVerifyPeer();

    /**
     * @return bool
     */
    public function isCurlOptVerbose();

    /**
     * @return string
     */
    public function getOAuthAccessToken();

    /**
     * @return string
     */
    public function isCookieAuthorizationEnabled();

    /**
     * @param string $jiraHost
     * @return $this
     */
    public function setJiraHost($jiraHost);

    /**
     * @param string $jiraUser
     * @return $this
     */
    public function setJiraUser($jiraUser);

    /**
     * @param string $jiraPassword
     * @return $this
     */
    public function setJiraPassword($jiraPassword);

    /**
     * @param string $jiraLogFile
     * @return $this
     */
    public function setJiraLogFile($jiraLogFile);

    /**
     * @param string $jiraLogLevel
     * @return $this
     */
    public function setJiraLogLevel($jiraLogLevel);

    /**
     * @param bool $curlOptSslVerifyHost
     * @return $this
     */
    public function setCurlOptSslVerifyHost($curlOptSslVerifyHost);

    /**
     * @param bool $curlOptSslVerifyPeer
     * @return $this
     */
    public function setCurlOptSslVerifyPeer($curlOptSslVerifyPeer);

    /**
     * @param bool $curlOptVerbose
     * @return $this
     */
    public function setCurlOptVerbose($curlOptVerbose);

    /**
     * @param string $oauthAccessToken
     * @return $this
     */
    public function setOauthAccessToken($oauthAccessToken);

    /**
     * @param bool $cookieAuthEnabled
     * @return $this
     */
    public function setCookieAuthEnabled($cookieAuthEnabled);

    /**
     * @param string $cookiePath
     * @return $this
     */
    public function setCookiePath($cookiePath);
}