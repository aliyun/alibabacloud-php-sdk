<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetCloudAccountResponseBody\cloudAccount;

use AlibabaCloud\Dara\Model;

class cloudAccountProviderConfig extends Model
{
    /**
     * @var string
     */
    public $audience;

    /**
     * @var string
     */
    public $authorizationServerId;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $oidcJwksEndpoint;
    protected $_name = [
        'audience' => 'Audience',
        'authorizationServerId' => 'AuthorizationServerId',
        'issuer' => 'Issuer',
        'oidcJwksEndpoint' => 'OidcJwksEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audience) {
            $res['Audience'] = $this->audience;
        }

        if (null !== $this->authorizationServerId) {
            $res['AuthorizationServerId'] = $this->authorizationServerId;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->oidcJwksEndpoint) {
            $res['OidcJwksEndpoint'] = $this->oidcJwksEndpoint;
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
        if (isset($map['Audience'])) {
            $model->audience = $map['Audience'];
        }

        if (isset($map['AuthorizationServerId'])) {
            $model->authorizationServerId = $map['AuthorizationServerId'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['OidcJwksEndpoint'])) {
            $model->oidcJwksEndpoint = $map['OidcJwksEndpoint'];
        }

        return $model;
    }
}
