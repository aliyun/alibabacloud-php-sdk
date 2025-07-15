<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAIProduceRulesResponseBody\ruleInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveAIProduceRulesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 5c6a2a0df228-4a64- af62-20e91b96****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The subtitle rules.
     *
     * @var ruleInfoList
     */
    public $ruleInfoList;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleInfoList' => 'RuleInfoList',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveAIProduceRulesResponseBody
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

        return $model;
    }
}
