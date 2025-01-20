<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateGatewayServiceTrafficPolicyRequest extends Model
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
     * @var TrafficPolicy
     */
    public $gatewayTrafficPolicy;
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'acceptLanguage'       => 'AcceptLanguage',
        'gatewayId'            => 'GatewayId',
        'gatewayTrafficPolicy' => 'GatewayTrafficPolicy',
        'gatewayUniqueId'      => 'GatewayUniqueId',
        'serviceId'            => 'ServiceId',
    ];

    public function validate()
    {
        if (null !== $this->gatewayTrafficPolicy) {
            $this->gatewayTrafficPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayTrafficPolicy) {
            $res['GatewayTrafficPolicy'] = null !== $this->gatewayTrafficPolicy ? $this->gatewayTrafficPolicy->toArray($noStream) : $this->gatewayTrafficPolicy;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['GatewayTrafficPolicy'])) {
            $model->gatewayTrafficPolicy = TrafficPolicy::fromMap($map['GatewayTrafficPolicy']);
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
