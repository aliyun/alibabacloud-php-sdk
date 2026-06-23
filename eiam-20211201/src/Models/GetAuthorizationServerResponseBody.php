<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetAuthorizationServerResponseBody\authorizationServer;

class GetAuthorizationServerResponseBody extends Model
{
    /**
     * @var authorizationServer
     */
    public $authorizationServer;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorizationServer' => 'AuthorizationServer',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->authorizationServer) {
            $this->authorizationServer->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationServer) {
            $res['AuthorizationServer'] = null !== $this->authorizationServer ? $this->authorizationServer->toArray($noStream) : $this->authorizationServer;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AuthorizationServer'])) {
            $model->authorizationServer = authorizationServer::fromMap($map['AuthorizationServer']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
