<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig\scimProvisioningConfig\authnConfiguration;

use AlibabaCloud\Dara\Model;

class authnParam extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $authnMethod;

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
    public $tokenEndpoint;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'authnMethod' => 'AuthnMethod',
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'tokenEndpoint' => 'TokenEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->authnMethod) {
            $res['AuthnMethod'] = $this->authnMethod;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        if (isset($map['AuthnMethod'])) {
            $model->authnMethod = $map['AuthnMethod'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        if (isset($map['TokenEndpoint'])) {
            $model->tokenEndpoint = $map['TokenEndpoint'];
        }

        return $model;
    }
}
