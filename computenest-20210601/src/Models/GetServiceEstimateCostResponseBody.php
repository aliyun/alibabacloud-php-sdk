<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class GetServiceEstimateCostResponseBody extends Model
{
    /**
     * @description Estimated commodity cost.
     *
     * @example {\\"cmgj00059839\\": {\\"Result\\": {\\"InquiryType\\": \\"Buy\\", \\"Order\\": {\\"Currency\\": \\"CNY\\", \\"DiscountAmount\\": \\"0.0\\", \\"TradeAmount\\": \\"0.01\\", \\"OriginalAmount\\": \\"0.01\\"}}}}
     *
     * @var mixed[]
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
     * @description Estimated resource cost.
     *
     * @example {
     * "Currency" : "CNY",
     * "RuleIds" : [ "102111101338****" ],
     * "Rule" : [ {
     * "RuleDescId" : "102111101338****",
     * }
     * @var mixed[]
     */
    public $resources;
    protected $_name = [
        'commodity' => 'Commodity',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
    ];

    public function validate()
    {
    }

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
