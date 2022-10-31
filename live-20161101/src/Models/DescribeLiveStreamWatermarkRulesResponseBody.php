<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarkRulesResponseBody\ruleInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamWatermarkRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleInfoList
     */
    public $ruleInfoList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'ruleInfoList' => 'RuleInfoList',
    ];

    public function validate()
    {
    }

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

        return $model;
    }
}
