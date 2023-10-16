<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySbjRuleResponseBody\sbjRuleList;
use AlibabaCloud\Tea\Model;

class QuerySbjRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var sbjRuleList
     */
    public $sbjRuleList;
    protected $_name = [
        'bizType'     => 'BizType',
        'requestId'   => 'RequestId',
        'ruleId'      => 'RuleId',
        'sbjRuleList' => 'SbjRuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->sbjRuleList) {
            $res['SbjRuleList'] = null !== $this->sbjRuleList ? $this->sbjRuleList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySbjRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['SbjRuleList'])) {
            $model->sbjRuleList = sbjRuleList::fromMap($map['SbjRuleList']);
        }

        return $model;
    }
}
