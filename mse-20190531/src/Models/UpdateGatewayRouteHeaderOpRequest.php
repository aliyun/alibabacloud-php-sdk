<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayRouteHeaderOpRequest extends Model
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
     * @description The ID of the gateway.
     *
     * @example 324
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-6bdc977deda44bf589c49d063b4c2d1d
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The information about the header configuration policy.
     *
     * @example {\"status\":\"on\",\"headerOpItems\":[{\"directionType\":\"Request\",\"opType\":\"Update\",\"key\":\"hosts\",\"value\":\"test.com\"}]}
     *
     * @var string
     */
    public $headerOpJSON;

    /**
     * @description The ID of the record.
     *
     * @example 411
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'gatewayId'       => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'headerOpJSON'    => 'HeaderOpJSON',
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
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->headerOpJSON) {
            $res['HeaderOpJSON'] = $this->headerOpJSON;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayRouteHeaderOpRequest
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
        if (isset($map['HeaderOpJSON'])) {
            $model->headerOpJSON = $map['HeaderOpJSON'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
