<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig\scimProvisioningConfig\authnConfiguration;

use AlibabaCloud\Tea\Model;

class authnParam extends Model
{
    /**
     * @description The access token. This parameter is returned when the GrantType parameter is set to bearer_token.
     *
     * @example k52x2ru63rlkflina5utgkxxxx
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description The authentication mode of the SCIM protocol. Valid values:
     *
     *   client_secret_basic: The client secret is passed in the request header.
     *   client_secret_post: The client secret is passed in the request body.
     *
     * @example client_secret_basic
     *
     * @var string
     */
    public $authnMethod;

    /**
     * @description The client ID of the application.
     *
     * @example mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The client secret of the application.
     *
     * @example CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx
     *
     * @var string
     */
    public $clientSecret;

    /**
     * @description The token endpoint.
     *
     * @example https://www.example.com/oauth/token
     *
     * @var string
     */
    public $tokenEndpoint;
    protected $_name = [
        'accessToken'   => 'AccessToken',
        'authnMethod'   => 'AuthnMethod',
        'clientId'      => 'ClientId',
        'clientSecret'  => 'ClientSecret',
        'tokenEndpoint' => 'TokenEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return authnParam
     */
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
