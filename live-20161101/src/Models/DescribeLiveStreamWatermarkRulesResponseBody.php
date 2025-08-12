<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarkRulesResponseBody\ruleInfoList;

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

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleInfoList' => 'RuleInfoList',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->ruleInfoList) {
            $this->ruleInfoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleInfoList) {
            $res['RuleInfoList'] = null !== $this->ruleInfoList ? $this->ruleInfoList->toArray($noStream) : $this->ruleInfoList;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
