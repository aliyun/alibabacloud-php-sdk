<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\QueryHistoryAvgMetricListResponseBody\avgMetricList;

class QueryHistoryAvgMetricListResponseBody extends Model
{
    /**
     * @var avgMetricList[]
     */
    public $avgMetricList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'avgMetricList' => 'AvgMetricList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->avgMetricList)) {
            Model::validateArray($this->avgMetricList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgMetricList) {
            if (\is_array($this->avgMetricList)) {
                $res['AvgMetricList'] = [];
                $n1 = 0;
                foreach ($this->avgMetricList as $item1) {
                    $res['AvgMetricList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AvgMetricList'])) {
            if (!empty($map['AvgMetricList'])) {
                $model->avgMetricList = [];
                $n1 = 0;
                foreach ($map['AvgMetricList'] as $item1) {
                    $model->avgMetricList[$n1] = avgMetricList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
