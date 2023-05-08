<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemAggregationRulesResponseBody\aggregationList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemAggregationRulesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

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
     * @example 6800B790-B10A-5C2F-BEB3-F1D5CE61****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregationList' => 'AggregationList',
        'pageInfo'        => 'PageInfo',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregationList) {
            $res['AggregationList'] = [];
            if (null !== $this->aggregationList && \is_array($this->aggregationList)) {
                $n = 0;
                foreach ($this->aggregationList as $item) {
                    $res['AggregationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSystemAggregationRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregationList'])) {
            if (!empty($map['AggregationList'])) {
                $model->aggregationList = [];
                $n                      = 0;
                foreach ($map['AggregationList'] as $item) {
                    $model->aggregationList[$n++] = null !== $item ? aggregationList::fromMap($item) : $item;
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
