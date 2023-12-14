<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DisableGatewayNFSVersionRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $NFSVersion;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'gatewayId'     => 'GatewayId',
        'NFSVersion'    => 'NFSVersion',
        'securityToken' => 'SecurityToken',
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
        if (null !== $this->NFSVersion) {
            $res['NFSVersion'] = $this->NFSVersion;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableGatewayNFSVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['NFSVersion'])) {
            $model->NFSVersion = $map['NFSVersion'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
