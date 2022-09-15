<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayRouteWafStatusRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var bool
     */
    public $enableWaf;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $mseSessionId;

    /**
     * @var int
     */
    public $routeId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'enableWaf'       => 'EnableWaf',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'mseSessionId'    => 'MseSessionId',
        'routeId'         => 'RouteId',
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
        if (null !== $this->enableWaf) {
            $res['EnableWaf'] = $this->enableWaf;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->mseSessionId) {
            $res['MseSessionId'] = $this->mseSessionId;
        }
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayRouteWafStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['EnableWaf'])) {
            $model->enableWaf = $map['EnableWaf'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['MseSessionId'])) {
            $model->mseSessionId = $map['MseSessionId'];
        }
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }

        return $model;
    }
}
