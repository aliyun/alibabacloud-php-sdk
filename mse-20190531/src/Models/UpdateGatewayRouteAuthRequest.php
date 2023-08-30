<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteAuthRequest\authJSON;
use AlibabaCloud\Tea\Model;

class UpdateGatewayRouteAuthRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The authentication configurations.
     *
     * @var authJSON
     */
    public $authJSON;

    /**
     * @description The gateway ID.
     *
     * @example 102
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-0adf3ad751284cc69fcf9669fba*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The route ID.
     *
     * @example 109
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'authJSON'        => 'AuthJSON',
        'gatewayId'       => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'id'              => 'Id',
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
        if (null !== $this->authJSON) {
            $res['AuthJSON'] = null !== $this->authJSON ? $this->authJSON->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayRouteAuthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AuthJSON'])) {
            $model->authJSON = authJSON::fromMap($map['AuthJSON']);
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

        return $model;
    }
}
