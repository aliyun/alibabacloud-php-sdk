<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRulesResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRulesResponseBody\ruleList;
use AlibabaCloud\Tea\Model;

class ListSystemClientRulesResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example C43CA30F-EF67-51BB-8C95-F31B8303****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var ruleList[]
     */
    public $ruleList;
    protected $_name = [
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
        'ruleList'  => 'RuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = [];
            if (null !== $this->ruleList && \is_array($this->ruleList)) {
                $n = 0;
                foreach ($this->ruleList as $item) {
                    $res['RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSystemClientRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n               = 0;
                foreach ($map['RuleList'] as $item) {
                    $model->ruleList[$n++] = null !== $item ? ruleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
