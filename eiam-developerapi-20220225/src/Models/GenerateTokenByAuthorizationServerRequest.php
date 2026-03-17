<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class GenerateTokenByAuthorizationServerRequest extends Model
{
    /**
     * @var string
     */
    public $applicationFederatedCredentialName;

    /**
     * @var string
     */
    public $clientAssertion;

    /**
     * @var string
     */
    public $clientAssertionType;

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
    public $clientX509;

    /**
     * @var string
     */
    public $clientX509Chain;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeVerifier;

    /**
     * @var string
     */
    public $deviceCode;

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
    public $redirectUri;

    /**
     * @var string
     */
    public $refreshToken;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'applicationFederatedCredentialName' => 'application_federated_credential_name',
        'clientAssertion' => 'client_assertion',
        'clientAssertionType' => 'client_assertion_type',
        'clientId' => 'client_id',
        'clientSecret' => 'client_secret',
        'clientX509' => 'client_x509',
        'clientX509Chain' => 'client_x509_chain',
        'code' => 'code',
        'codeVerifier' => 'code_verifier',
        'deviceCode' => 'device_code',
        'grantType' => 'grant_type',
        'password' => 'password',
        'redirectUri' => 'redirect_uri',
        'refreshToken' => 'refresh_token',
        'scope' => 'scope',
        'username' => 'username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationFederatedCredentialName) {
            $res['application_federated_credential_name'] = $this->applicationFederatedCredentialName;
        }

        if (null !== $this->clientAssertion) {
            $res['client_assertion'] = $this->clientAssertion;
        }

        if (null !== $this->clientAssertionType) {
            $res['client_assertion_type'] = $this->clientAssertionType;
        }

        if (null !== $this->clientId) {
            $res['client_id'] = $this->clientId;
        }

        if (null !== $this->clientSecret) {
            $res['client_secret'] = $this->clientSecret;
        }

        if (null !== $this->clientX509) {
            $res['client_x509'] = $this->clientX509;
        }

        if (null !== $this->clientX509Chain) {
            $res['client_x509_chain'] = $this->clientX509Chain;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['application_federated_credential_name'])) {
            $model->applicationFederatedCredentialName = $map['application_federated_credential_name'];
        }

        if (isset($map['client_assertion'])) {
            $model->clientAssertion = $map['client_assertion'];
        }

        if (isset($map['client_assertion_type'])) {
            $model->clientAssertionType = $map['client_assertion_type'];
        }

        if (isset($map['client_id'])) {
            $model->clientId = $map['client_id'];
        }

        if (isset($map['client_secret'])) {
            $model->clientSecret = $map['client_secret'];
        }

        if (isset($map['client_x509'])) {
            $model->clientX509 = $map['client_x509'];
        }

        if (isset($map['client_x509_chain'])) {
            $model->clientX509Chain = $map['client_x509_chain'];
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
