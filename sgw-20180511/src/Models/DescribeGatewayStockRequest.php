<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewayStockRequest extends Model
{
    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $gatewayRegionId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'gatewayRegionId' => 'GatewayRegionId',
        'securityToken'   => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayRegionId) {
            $res['GatewayRegionId'] = $this->gatewayRegionId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewayStockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayRegionId'])) {
            $model->gatewayRegionId = $map['GatewayRegionId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
