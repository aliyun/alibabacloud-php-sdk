<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayServiceTrafficPolicyShrinkRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   **zh-CN** (default): Chinese
     *   **en-US**: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the gateway.
     *
     * @example 429
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The traffic policy of the gateway.
     *
     * This parameter is required.
     * @var string
     */
    public $gatewayTrafficPolicyShrink;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-75c5036c083e4f89ba8ef9fafff2e902
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The ID of the service.
     *
     * @example 411
     *
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'acceptLanguage'             => 'AcceptLanguage',
        'gatewayId'                  => 'GatewayId',
        'gatewayTrafficPolicyShrink' => 'GatewayTrafficPolicy',
        'gatewayUniqueId'            => 'GatewayUniqueId',
        'serviceId'                  => 'ServiceId',
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
        if (null !== $this->gatewayTrafficPolicyShrink) {
            $res['GatewayTrafficPolicy'] = $this->gatewayTrafficPolicyShrink;
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
     * @return UpdateGatewayServiceTrafficPolicyShrinkRequest
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
        if (isset($map['GatewayTrafficPolicy'])) {
            $model->gatewayTrafficPolicyShrink = $map['GatewayTrafficPolicy'];
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
