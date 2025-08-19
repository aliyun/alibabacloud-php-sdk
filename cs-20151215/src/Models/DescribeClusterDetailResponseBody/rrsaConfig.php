<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody;

use AlibabaCloud\Dara\Model;

class rrsaConfig extends Model
{
    /**
     * @var string
     */
    public $audience;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $jwksUrl;

    /**
     * @var string
     */
    public $maxOidcTokenExpiration;

    /**
     * @var string
     */
    public $oidcArn;

    /**
     * @var string
     */
    public $oidcName;

    /**
     * @var string
     */
    public $openApiConfigurationUrl;
    protected $_name = [
        'audience' => 'audience',
        'enabled' => 'enabled',
        'issuer' => 'issuer',
        'jwksUrl' => 'jwks_url',
        'maxOidcTokenExpiration' => 'max_oidc_token_expiration',
        'oidcArn' => 'oidc_arn',
        'oidcName' => 'oidc_name',
        'openApiConfigurationUrl' => 'open_api_configuration_url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audience) {
            $res['audience'] = $this->audience;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->issuer) {
            $res['issuer'] = $this->issuer;
        }

        if (null !== $this->jwksUrl) {
            $res['jwks_url'] = $this->jwksUrl;
        }

        if (null !== $this->maxOidcTokenExpiration) {
            $res['max_oidc_token_expiration'] = $this->maxOidcTokenExpiration;
        }

        if (null !== $this->oidcArn) {
            $res['oidc_arn'] = $this->oidcArn;
        }

        if (null !== $this->oidcName) {
            $res['oidc_name'] = $this->oidcName;
        }

        if (null !== $this->openApiConfigurationUrl) {
            $res['open_api_configuration_url'] = $this->openApiConfigurationUrl;
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
        if (isset($map['audience'])) {
            $model->audience = $map['audience'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['issuer'])) {
            $model->issuer = $map['issuer'];
        }

        if (isset($map['jwks_url'])) {
            $model->jwksUrl = $map['jwks_url'];
        }

        if (isset($map['max_oidc_token_expiration'])) {
            $model->maxOidcTokenExpiration = $map['max_oidc_token_expiration'];
        }

        if (isset($map['oidc_arn'])) {
            $model->oidcArn = $map['oidc_arn'];
        }

        if (isset($map['oidc_name'])) {
            $model->oidcName = $map['oidc_name'];
        }

        if (isset($map['open_api_configuration_url'])) {
            $model->openApiConfigurationUrl = $map['open_api_configuration_url'];
        }

        return $model;
    }
}
