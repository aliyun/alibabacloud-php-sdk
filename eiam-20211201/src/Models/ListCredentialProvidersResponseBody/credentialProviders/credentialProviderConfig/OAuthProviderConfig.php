<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListCredentialProvidersResponseBody\credentialProviders\credentialProviderConfig;

use AlibabaCloud\Dara\Model;

class OAuthProviderConfig extends Model
{
    /**
     * @var string
     */
    public $authorizationEndpoint;

    /**
     * @var string
     */
    public $authorizationFlow;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $discoveryUrl;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $pkceChallengeMethod;

    /**
     * @var bool
     */
    public $pkceEnabled;

    /**
     * @var string
     */
    public $providerVendor;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $systemRedirectUri;

    /**
     * @var string
     */
    public $tokenEndpoint;
    protected $_name = [
        'authorizationEndpoint' => 'AuthorizationEndpoint',
        'authorizationFlow' => 'AuthorizationFlow',
        'clientId' => 'ClientId',
        'discoveryUrl' => 'DiscoveryUrl',
        'issuer' => 'Issuer',
        'pkceChallengeMethod' => 'PkceChallengeMethod',
        'pkceEnabled' => 'PkceEnabled',
        'providerVendor' => 'ProviderVendor',
        'scope' => 'Scope',
        'systemRedirectUri' => 'SystemRedirectUri',
        'tokenEndpoint' => 'TokenEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationEndpoint) {
            $res['AuthorizationEndpoint'] = $this->authorizationEndpoint;
        }

        if (null !== $this->authorizationFlow) {
            $res['AuthorizationFlow'] = $this->authorizationFlow;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->discoveryUrl) {
            $res['DiscoveryUrl'] = $this->discoveryUrl;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->pkceChallengeMethod) {
            $res['PkceChallengeMethod'] = $this->pkceChallengeMethod;
        }

        if (null !== $this->pkceEnabled) {
            $res['PkceEnabled'] = $this->pkceEnabled;
        }

        if (null !== $this->providerVendor) {
            $res['ProviderVendor'] = $this->providerVendor;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->systemRedirectUri) {
            $res['SystemRedirectUri'] = $this->systemRedirectUri;
        }

        if (null !== $this->tokenEndpoint) {
            $res['TokenEndpoint'] = $this->tokenEndpoint;
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
        if (isset($map['AuthorizationEndpoint'])) {
            $model->authorizationEndpoint = $map['AuthorizationEndpoint'];
        }

        if (isset($map['AuthorizationFlow'])) {
            $model->authorizationFlow = $map['AuthorizationFlow'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['DiscoveryUrl'])) {
            $model->discoveryUrl = $map['DiscoveryUrl'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['PkceChallengeMethod'])) {
            $model->pkceChallengeMethod = $map['PkceChallengeMethod'];
        }

        if (isset($map['PkceEnabled'])) {
            $model->pkceEnabled = $map['PkceEnabled'];
        }

        if (isset($map['ProviderVendor'])) {
            $model->providerVendor = $map['ProviderVendor'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['SystemRedirectUri'])) {
            $model->systemRedirectUri = $map['SystemRedirectUri'];
        }

        if (isset($map['TokenEndpoint'])) {
            $model->tokenEndpoint = $map['TokenEndpoint'];
        }

        return $model;
    }
}
