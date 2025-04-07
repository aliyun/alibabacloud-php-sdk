<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GetServiceEstimateCostResponseBody extends Model
{
    /**
     * @description The subscription duration information about the purchase order of Alibaba Cloud Marketplace.
     *
     * @example {\\"PayPeriodUnit\\":Month,\\"PayPeriod\\":1}
     *
     * @var mixed[]
     */
    public $commodity;

    /**
     * @description The request ID.
     *
     * @example E73F09DC-6C13-5CB1-A10F-7A4E125ABD2C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of resources.
     *
     * @example {
     * "ECSInstances":{
     * "Type":"ALIYUN::ECS::InstanceGroup",
     * "Success":true,
     * "Result":{
     * "Order":{
     * "Currency":"CNY",
     * "RuleIds":[
     * 1752723
     * ],
     * "DetailInfos":{
     * "ResourcePriceModel":[
     * {
     * "Resource":"bandwidth",
     * "TradeAmount":0.0,
     * "SubRuleIds":[],
     * "OriginalAmount":0.0,
     * "DiscountAmount":0.0
     * },
     * {
     * "Resource":"image",
     * "TradeAmount":0.0,
     * "SubRuleIds":[],
     * "OriginalAmount":0.0,
     * "DiscountAmount":0.0
     * },
     * {
     * "Resource":"instanceType",
     * "TradeAmount":0.006966,
     * "SubRuleIds":[],
     * "OriginalAmount":0.45,
     * "DiscountAmount":0.443034
     * },
     * {
     * "Resource":"systemDisk",
     * "TradeAmount":0.000867,
     * "SubRuleIds":[],
     * "OriginalAmount":0.056,
     * "DiscountAmount":0.055133
     * },
     * {
     * "Resource":"dataDisk",
     * "TradeAmount":0.002167,
     * "SubRuleIds":[],
     * "OriginalAmount":0.14,
     * "DiscountAmount":0.137833
     * }
     * ]
     * }
     *
     * @var mixed[]
     */
    public $resources;
    protected $_name = [
        'commodity' => 'Commodity',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodity) {
            $res['Commodity'] = $this->commodity;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceEstimateCostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commodity'])) {
            $model->commodity = $map['Commodity'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
