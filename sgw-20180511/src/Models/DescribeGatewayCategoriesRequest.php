<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewayCategoriesRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayLocation;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'gatewayLocation' => 'GatewayLocation',
        'securityToken'   => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayLocation) {
            $res['GatewayLocation'] = $this->gatewayLocation;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewayCategoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayLocation'])) {
            $model->gatewayLocation = $map['GatewayLocation'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
