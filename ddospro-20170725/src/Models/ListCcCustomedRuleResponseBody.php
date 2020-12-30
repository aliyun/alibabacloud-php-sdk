<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\ListCcCustomedRuleResponseBody\ruleList;
use AlibabaCloud\Tea\Model;

class ListCcCustomedRuleResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var ruleList
     */
    public $ruleList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'ruleList'   => 'RuleList',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = null !== $this->ruleList ? $this->ruleList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCcCustomedRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RuleList'])) {
            $model->ruleList = ruleList::fromMap($map['RuleList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
