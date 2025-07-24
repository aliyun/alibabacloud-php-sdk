<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class GetServiceEstimateCostResponseBody extends Model
{
    /**
     * @description The estimated price.
     *
     * @example {\\"cmgj00059839\\": {\\"Result\\": {\\"InquiryType\\": \\"Buy\\", \\"Order\\": {\\"Currency\\": \\"CNY\\", \\"DiscountAmount\\": \\"0.0\\", \\"TradeAmount\\": \\"0.01\\", \\"OriginalAmount\\": \\"0.01\\"}}}}
     *
     * @var CommodityValue[]
     */
    public $commodity;

    /**
     * @description The request ID.
     *
     * @example 08ABBB67-39C9-5EE7-98E5-80486F75CE8D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resources.
     *
     * @example { "EcsInstance" : { "Type" : "ALIYUN::ECS::Instance", "Success" : true, "Result" : { "Order" : { "Currency" : "CNY", "RuleIds" : [ "102111101338\\*\\*\\*\\*" ], "DetailInfos" : { "ResourcePriceModel" : [ { "OriginalPrice" : 0, "DiscountPrice" : 0, "SubRules" : { "Rule" : [ ] }, "Resource" : "bandwidth", "TradePrice" : 0 }, { "OriginalPrice" : 0, "DiscountPrice" : 0, "SubRules" : { "Rule" : [ ] }, "Resource" : "image", "TradePrice" : 0 }, { "OriginalPrice" : 0.366666, "DiscountPrice" : 0.249012, "SubRules" : { "Rule" : [ ] }, "Resource" : "instanceType", "TradePrice" : 0.117654 }, { "OriginalPrice" : 0.055555, "DiscountPrice" : 0.037729, "SubRules" : { "Rule" : [ ] }, "Resource" : "systemDisk", "TradePrice" : 0.017826 } ] }, "TradeAmount" : 0.135, "OriginalAmount" : 0.422, "Coupons" : { "Coupon" : [ ] }, "DiscountAmount" : 0.287 }, "OrderSupplement" : { "PriceUnit" : "/Hour", "ChargeType" : "PostPaid", "Quantity" : 1, "PriceType" : "Total" }, "Rules" : { "Rule" : [ { "RuleDescId" : "102111101338\\*\\*\\*\\*", "Name" : "contract discount_multi-billing item discount_3.208750 discount" } ] } } } }
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
            $res['Commodity'] = [];
            if (null !== $this->commodity && \is_array($this->commodity)) {
                foreach ($this->commodity as $key => $val) {
                    $res['Commodity'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
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
