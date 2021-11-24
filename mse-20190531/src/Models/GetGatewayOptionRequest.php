<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetGatewayOptionRequest extends Model
{
    /**
     * @var int
     */
    public $gatewayId;
    protected $_name = [
        'gatewayId' => 'GatewayId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGatewayOptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        return $model;
    }
}
