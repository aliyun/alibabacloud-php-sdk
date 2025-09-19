<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionRulePageResponseBody\interceptionRuleList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionRulePageResponseBody\pageInfo;

class ListInterceptionRulePageResponseBody extends Model
{
    /**
     * @var interceptionRuleList[]
     */
    public $interceptionRuleList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'interceptionRuleList' => 'InterceptionRuleList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->interceptionRuleList)) {
            Model::validateArray($this->interceptionRuleList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interceptionRuleList) {
            if (\is_array($this->interceptionRuleList)) {
                $res['InterceptionRuleList'] = [];
                $n1 = 0;
                foreach ($this->interceptionRuleList as $item1) {
                    $res['InterceptionRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InterceptionRuleList'])) {
            if (!empty($map['InterceptionRuleList'])) {
                $model->interceptionRuleList = [];
                $n1 = 0;
                foreach ($map['InterceptionRuleList'] as $item1) {
                    $model->interceptionRuleList[$n1] = interceptionRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
