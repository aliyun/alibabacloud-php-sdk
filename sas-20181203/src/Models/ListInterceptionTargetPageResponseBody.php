<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionTargetPageResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionTargetPageResponseBody\ruleTargetList;
use AlibabaCloud\Tea\Model;

class ListInterceptionTargetPageResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example 028CF634-5268-5660-9575-48C9ED6B****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var ruleTargetList[]
     */
    public $ruleTargetList;
    protected $_name = [
        'pageInfo'       => 'PageInfo',
        'requestId'      => 'RequestId',
        'ruleTargetList' => 'RuleTargetList',
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
        if (null !== $this->ruleTargetList) {
            $res['RuleTargetList'] = [];
            if (null !== $this->ruleTargetList && \is_array($this->ruleTargetList)) {
                $n = 0;
                foreach ($this->ruleTargetList as $item) {
                    $res['RuleTargetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInterceptionTargetPageResponseBody
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
        if (isset($map['RuleTargetList'])) {
            if (!empty($map['RuleTargetList'])) {
                $model->ruleTargetList = [];
                $n                     = 0;
                foreach ($map['RuleTargetList'] as $item) {
                    $model->ruleTargetList[$n++] = null !== $item ? ruleTargetList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
