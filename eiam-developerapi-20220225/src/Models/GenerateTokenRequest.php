<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class GenerateTokenRequest extends Model
{
    /**
     * @example app_mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $clientId;

    /**
     * @example CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx
     *
     * @var string
     */
    public $clientSecret;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $code;

    /**
     * @example xxx
     *
     * @var string
     */
    public $codeVerifier;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $deviceCode;

    /**
     * @example ATxxx
     *
     * @var string
     */
    public $exclusiveTag;

    /**
     * @example client_credentials
     *
     * @var string
     */
    public $grantType;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $password;

    /**
     * @example xxx
     *
     * @var string
     */
    public $redirectUri;

    /**
     * @example ATxxx
     *
     * @var string
     */
    public $refreshToken;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $scope;

    /**
     * @example uesrname_001
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'clientId'     => 'client_id',
        'clientSecret' => 'client_secret',
        'code'         => 'code',
        'codeVerifier' => 'code_verifier',
        'deviceCode'   => 'device_code',
        'exclusiveTag' => 'exclusive_tag',
        'grantType'    => 'grant_type',
        'password'     => 'password',
        'redirectUri'  => 'redirect_uri',
        'refreshToken' => 'refresh_token',
        'scope'        => 'scope',
        'username'     => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['client_id'] = $this->clientId;
        }
        if (null !== $this->clientSecret) {
            $res['client_secret'] = $this->clientSecret;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->codeVerifier) {
            $res['code_verifier'] = $this->codeVerifier;
        }
        if (null !== $this->deviceCode) {
            $res['device_code'] = $this->deviceCode;
        }
        if (null !== $this->exclusiveTag) {
            $res['exclusive_tag'] = $this->exclusiveTag;
        }
        if (null !== $this->grantType) {
            $res['grant_type'] = $this->grantType;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->redirectUri) {
            $res['redirect_uri'] = $this->redirectUri;
        }
        if (null !== $this->refreshToken) {
            $res['refresh_token'] = $this->refreshToken;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['client_id'])) {
            $model->clientId = $map['client_id'];
        }
        if (isset($map['client_secret'])) {
            $model->clientSecret = $map['client_secret'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['code_verifier'])) {
            $model->codeVerifier = $map['code_verifier'];
        }
        if (isset($map['device_code'])) {
            $model->deviceCode = $map['device_code'];
        }
        if (isset($map['exclusive_tag'])) {
            $model->exclusiveTag = $map['exclusive_tag'];
        }
        if (isset($map['grant_type'])) {
            $model->grantType = $map['grant_type'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['redirect_uri'])) {
            $model->redirectUri = $map['redirect_uri'];
        }
        if (isset($map['refresh_token'])) {
            $model->refreshToken = $map['refresh_token'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
