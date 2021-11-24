<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayOptionShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayOptionShrink;
    protected $_name = [
        'gatewayId'           => 'GatewayId',
        'gatewayOptionShrink' => 'GatewayOption',
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
        if (null !== $this->gatewayOptionShrink) {
            $res['GatewayOption'] = $this->gatewayOptionShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayOptionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayOption'])) {
            $model->gatewayOptionShrink = $map['GatewayOption'];
        }

        return $model;
    }
}
