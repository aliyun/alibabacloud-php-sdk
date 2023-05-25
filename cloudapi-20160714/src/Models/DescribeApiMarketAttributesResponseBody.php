<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiMarketAttributesResponseBody extends Model
{
    /**
     * @example 6318cd8f6a304cac9318dea8d9a78f7a
     *
     * @var string
     */
    public $apiId;

    /**
     * @example PREPAID_BY_USAGE
     *
     * @var string
     */
    public $marketChargingMode;

    /**
     * @example true
     *
     * @var string
     */
    public $needCharging;

    /**
     * @example 545D4E52-4F77-5EC4-BB7E-7344CEC7B5E6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiId'              => 'ApiId',
        'marketChargingMode' => 'MarketChargingMode',
        'needCharging'       => 'NeedCharging',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->marketChargingMode) {
            $res['MarketChargingMode'] = $this->marketChargingMode;
        }
        if (null !== $this->needCharging) {
            $res['NeedCharging'] = $this->needCharging;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiMarketAttributesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['MarketChargingMode'])) {
            $model->marketChargingMode = $map['MarketChargingMode'];
        }
        if (isset($map['NeedCharging'])) {
            $model->needCharging = $map['NeedCharging'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
