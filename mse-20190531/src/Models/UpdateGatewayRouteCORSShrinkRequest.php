<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayRouteCORSShrinkRequest extends Model
{
    /**
     * @description The language of the response. In compliance with [RFC 7231](https://tools.ietf.org/html/rfc7231), the backend service must return a response based on the language used by the user.
     *
     *   No default value
     *   zh-CN: Chinese
     *   en-US: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The information about the CORS policy.
     *
     * @var string
     */
    public $corsJSONShrink;

    /**
     * @description The ID of the gateway.
     *
     * @example 85
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-f70a6ddf2f0941a2bb997b2d16028f37
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The ID of the associated record.
     *
     * @example 55
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'corsJSONShrink'  => 'CorsJSON',
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
        if (null !== $this->corsJSONShrink) {
            $res['CorsJSON'] = $this->corsJSONShrink;
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
     * @return UpdateGatewayRouteCORSShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['CorsJSON'])) {
            $model->corsJSONShrink = $map['CorsJSON'];
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
