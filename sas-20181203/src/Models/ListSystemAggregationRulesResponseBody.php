<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemAggregationRulesResponseBody\aggregationList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemAggregationRulesResponseBody\pageInfo;

class ListSystemAggregationRulesResponseBody extends Model
{
    /**
     * @var aggregationList[]
     */
    public $aggregationList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregationList' => 'AggregationList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->aggregationList)) {
            Model::validateArray($this->aggregationList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregationList) {
            if (\is_array($this->aggregationList)) {
                $res['AggregationList'] = [];
                $n1 = 0;
                foreach ($this->aggregationList as $item1) {
                    $res['AggregationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AggregationList'])) {
            if (!empty($map['AggregationList'])) {
                $model->aggregationList = [];
                $n1 = 0;
                foreach ($map['AggregationList'] as $item1) {
                    $model->aggregationList[$n1] = aggregationList::fromMap($item1);
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
