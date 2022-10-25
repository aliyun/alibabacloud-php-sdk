<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayOptionRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var GatewayOption
     */
    public $gatewayOption;

    /**
     * @var string
     */
    public $gatewayUniqueId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'gatewayId'       => 'GatewayId',
        'gatewayOption'   => 'GatewayOption',
        'gatewayUniqueId' => 'GatewayUniqueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayOption) {
            $res['GatewayOption'] = null !== $this->gatewayOption ? $this->gatewayOption->toMap() : null;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayOption'])) {
            $model->gatewayOption = GatewayOption::fromMap($map['GatewayOption']);
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        return $model;
    }
}
