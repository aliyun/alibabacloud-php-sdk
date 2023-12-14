<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class RestartFileSharesRequest extends Model
{
    /**
     * @example gw-000eg44nmxbsfwbvq***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example NFS
     *
     * @var string
     */
    public $shareProtocol;
    protected $_name = [
        'gatewayId'     => 'GatewayId',
        'securityToken' => 'SecurityToken',
        'shareProtocol' => 'ShareProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->shareProtocol) {
            $res['ShareProtocol'] = $this->shareProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartFileSharesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ShareProtocol'])) {
            $model->shareProtocol = $map['ShareProtocol'];
        }

        return $model;
    }
}
