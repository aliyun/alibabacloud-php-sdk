<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarkRulesResponseBody\ruleInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamWatermarkRulesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 5c6a2a0df228-4a64- af62-20e91b9676b3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The watermark rules.
     *
     * @var ruleInfoList
     */
    public $ruleInfoList;

    /**
     * @description The total number of entries that meet the specified conditions.
     *
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleInfoList' => 'RuleInfoList',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleInfoList) {
            $res['RuleInfoList'] = null !== $this->ruleInfoList ? $this->ruleInfoList->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamWatermarkRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleInfoList'])) {
            $model->ruleInfoList = ruleInfoList::fromMap($map['RuleInfoList']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
