<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribePortRulePageResponseBody\ruleList;
use AlibabaCloud\Tea\Model;

class DescribePortRulePageResponseBody extends Model
{
    /**
     * @var ruleList[]
     */
    public $ruleList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'ruleList'  => 'RuleList',
        'requestId' => 'RequestId',
        'count'     => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleList) {
            $res['RuleList'] = [];
            if (null !== $this->ruleList && \is_array($this->ruleList)) {
                $n = 0;
                foreach ($this->ruleList as $item) {
                    $res['RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePortRulePageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n               = 0;
                foreach ($map['RuleList'] as $item) {
                    $model->ruleList[$n++] = null !== $item ? ruleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
