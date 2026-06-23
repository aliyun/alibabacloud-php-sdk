<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetAuthorizationServerResponseBody\authorizationServer;

use AlibabaCloud\Dara\Model;

class protocolEndpoint extends Model
{
    /**
     * @var string
     */
    public $oauth2TokenEndpoint;

    /**
     * @var string
     */
    public $oidcJwksEndpoint;
    protected $_name = [
        'oauth2TokenEndpoint' => 'Oauth2TokenEndpoint',
        'oidcJwksEndpoint' => 'OidcJwksEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oauth2TokenEndpoint) {
            $res['Oauth2TokenEndpoint'] = $this->oauth2TokenEndpoint;
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
        if (isset($map['Oauth2TokenEndpoint'])) {
            $model->oauth2TokenEndpoint = $map['Oauth2TokenEndpoint'];
        }

        if (isset($map['OidcJwksEndpoint'])) {
            $model->oidcJwksEndpoint = $map['OidcJwksEndpoint'];
        }

        return $model;
    }
}
