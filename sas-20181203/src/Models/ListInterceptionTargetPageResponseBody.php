<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionTargetPageResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionTargetPageResponseBody\ruleTargetList;

class ListInterceptionTargetPageResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
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
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->ruleTargetList)) {
            Model::validateArray($this->ruleTargetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleTargetList) {
            if (\is_array($this->ruleTargetList)) {
                $res['RuleTargetList'] = [];
                $n1                    = 0;
                foreach ($this->ruleTargetList as $item1) {
                    $res['RuleTargetList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleTargetList'])) {
            if (!empty($map['RuleTargetList'])) {
                $model->ruleTargetList = [];
                $n1                    = 0;
                foreach ($map['RuleTargetList'] as $item1) {
                    $model->ruleTargetList[$n1++] = ruleTargetList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
