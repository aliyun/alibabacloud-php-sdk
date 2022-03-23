<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewayServiceRequest extends Model
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
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'gatewayId'       => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'serviceId'       => 'ServiceId',
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
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGatewayServiceRequest
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
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
