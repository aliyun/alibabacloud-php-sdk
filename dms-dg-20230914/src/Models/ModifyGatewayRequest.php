<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models;

use AlibabaCloud\Tea\Model;

class ModifyGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayDesc;

    /**
     * @description This parameter is required.
     *
     * @example dg-nmz841r7b681****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $gatewayName;
    protected $_name = [
        'gatewayDesc' => 'GatewayDesc',
        'gatewayId'   => 'GatewayId',
        'gatewayName' => 'GatewayName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayDesc) {
            $res['GatewayDesc'] = $this->gatewayDesc;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayDesc'])) {
            $model->gatewayDesc = $map['GatewayDesc'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }

        return $model;
    }
}
