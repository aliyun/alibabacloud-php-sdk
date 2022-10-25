<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayRouteTimeoutShrinkRequest extends Model
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
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $timeoutJSONShrink;
    protected $_name = [
        'acceptLanguage'    => 'AcceptLanguage',
        'gatewayId'         => 'GatewayId',
        'gatewayUniqueId'   => 'GatewayUniqueId',
        'id'                => 'Id',
        'timeoutJSONShrink' => 'TimeoutJSON',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->timeoutJSONShrink) {
            $res['TimeoutJSON'] = $this->timeoutJSONShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayRouteTimeoutShrinkRequest
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TimeoutJSON'])) {
            $model->timeoutJSONShrink = $map['TimeoutJSON'];
        }

        return $model;
    }
}
