<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\oidcConfig;

use AlibabaCloud\Tea\Model;

class authnParam extends Model
{
    /**
     * @description OIDC/OAuth2 authentication method.
     *
     * @example client_secret_post
     *
     * @var string
     */
    public $authnMethod;

    /**
     * @description The client ID of the device whose access credential you want to query.
     *
     * @example mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The application secret registered with the OIDC authentication service.
     *
     * @example CSEHDddddddxxxxuxkJEHPveWRXBGqVqRsxxxx
     *
     * @var string
     */
    public $clientSecret;
    protected $_name = [
        'authnMethod' => 'AuthnMethod',
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authnMethod) {
            $res['AuthnMethod'] = $this->authnMethod;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
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
        if (isset($map['AuthnMethod'])) {
            $model->authnMethod = $map['AuthnMethod'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        return $model;
    }
}
