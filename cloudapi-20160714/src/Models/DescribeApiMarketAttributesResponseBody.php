<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiMarketAttributesResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $marketChargingMode;

    /**
     * @var string
     */
    public $needCharging;
    protected $_name = [
        'apiId'              => 'ApiId',
        'requestId'          => 'RequestId',
        'marketChargingMode' => 'MarketChargingMode',
        'needCharging'       => 'NeedCharging',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->marketChargingMode) {
            $res['MarketChargingMode'] = $this->marketChargingMode;
        }
        if (null !== $this->needCharging) {
            $res['NeedCharging'] = $this->needCharging;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MarketChargingMode'])) {
            $model->marketChargingMode = $map['MarketChargingMode'];
        }
        if (isset($map['NeedCharging'])) {
            $model->needCharging = $map['NeedCharging'];
        }

        return $model;
    }
}
