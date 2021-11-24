<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayOptionRequest extends Model
{
    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var GatewayOption
     */
    public $gatewayOption;
    protected $_name = [
        'gatewayId'     => 'GatewayId',
        'gatewayOption' => 'GatewayOption',
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
        if (null !== $this->gatewayOption) {
            $res['GatewayOption'] = null !== $this->gatewayOption ? $this->gatewayOption->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayOptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayOption'])) {
            $model->gatewayOption = GatewayOption::fromMap($map['GatewayOption']);
        }

        return $model;
    }
}
