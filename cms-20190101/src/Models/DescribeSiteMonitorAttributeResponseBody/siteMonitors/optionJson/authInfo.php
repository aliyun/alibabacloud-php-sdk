<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\authInfo\scopes;

class authInfo extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $apiAction;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $authStyle;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @var string
     */
    public $grantType;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var scopes
     */
    public $scopes;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $sessionToken;

    /**
     * @var string
     */
    public $tokenUrl;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $useCookieSessionKey;

    /**
     * @var string
     */
    public $username;

    /**
     * @var bool
     */
    public $withAddonResources;
    protected $_name = [
        'accessKeyId' => 'access_key_id',
        'accessKeySecret' => 'access_key_secret',
        'apiAction' => 'api_action',
        'apiVersion' => 'api_version',
        'authStyle' => 'auth_style',
        'clientId' => 'client_id',
        'clientSecret' => 'client_secret',
        'grantType' => 'grant_type',
        'password' => 'password',
        'regionId' => 'region_id',
        'scopes' => 'scopes',
        'serviceName' => 'service_name',
        'sessionToken' => 'session_token',
        'tokenUrl' => 'token_url',
        'type' => 'type',
        'useCookieSessionKey' => 'use_cookie_session_key',
        'username' => 'username',
        'withAddonResources' => 'with_addon_resources',
    ];

    public function validate()
    {
        if (null !== $this->scopes) {
            $this->scopes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['access_key_id'] = $this->accessKeyId;
        }

        if (null !== $this->accessKeySecret) {
            $res['access_key_secret'] = $this->accessKeySecret;
        }

        if (null !== $this->apiAction) {
            $res['api_action'] = $this->apiAction;
        }

        if (null !== $this->apiVersion) {
            $res['api_version'] = $this->apiVersion;
        }

        if (null !== $this->authStyle) {
            $res['auth_style'] = $this->authStyle;
        }

        if (null !== $this->clientId) {
            $res['client_id'] = $this->clientId;
        }

        if (null !== $this->clientSecret) {
            $res['client_secret'] = $this->clientSecret;
        }

        if (null !== $this->grantType) {
            $res['grant_type'] = $this->grantType;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }

        if (null !== $this->scopes) {
            $res['scopes'] = null !== $this->scopes ? $this->scopes->toArray($noStream) : $this->scopes;
        }

        if (null !== $this->serviceName) {
            $res['service_name'] = $this->serviceName;
        }

        if (null !== $this->sessionToken) {
            $res['session_token'] = $this->sessionToken;
        }

        if (null !== $this->tokenUrl) {
            $res['token_url'] = $this->tokenUrl;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->useCookieSessionKey) {
            $res['use_cookie_session_key'] = $this->useCookieSessionKey;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        if (null !== $this->withAddonResources) {
            $res['with_addon_resources'] = $this->withAddonResources;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['access_key_id'])) {
            $model->accessKeyId = $map['access_key_id'];
        }

        if (isset($map['access_key_secret'])) {
            $model->accessKeySecret = $map['access_key_secret'];
        }

        if (isset($map['api_action'])) {
            $model->apiAction = $map['api_action'];
        }

        if (isset($map['api_version'])) {
            $model->apiVersion = $map['api_version'];
        }

        if (isset($map['auth_style'])) {
            $model->authStyle = $map['auth_style'];
        }

        if (isset($map['client_id'])) {
            $model->clientId = $map['client_id'];
        }

        if (isset($map['client_secret'])) {
            $model->clientSecret = $map['client_secret'];
        }

        if (isset($map['grant_type'])) {
            $model->grantType = $map['grant_type'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }

        if (isset($map['scopes'])) {
            $model->scopes = scopes::fromMap($map['scopes']);
        }

        if (isset($map['service_name'])) {
            $model->serviceName = $map['service_name'];
        }

        if (isset($map['session_token'])) {
            $model->sessionToken = $map['session_token'];
        }

        if (isset($map['token_url'])) {
            $model->tokenUrl = $map['token_url'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['use_cookie_session_key'])) {
            $model->useCookieSessionKey = $map['use_cookie_session_key'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        if (isset($map['with_addon_resources'])) {
            $model->withAddonResources = $map['with_addon_resources'];
        }

        return $model;
    }
}
