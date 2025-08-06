<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodPlayerMetricDataDemoResponseBody\dataList;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodPlayerMetricDataDemoResponseBody\extend;

class DescribeVodPlayerMetricDataDemoResponseBody extends Model
{
    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var extend
     */
    public $extend;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCnt;
    protected $_name = [
        'dataList' => 'DataList',
        'extend' => 'Extend',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCnt' => 'TotalCnt',
    ];

    public function validate()
    {
        if (\is_array($this->dataList)) {
            Model::validateArray($this->dataList);
        }
        if (null !== $this->extend) {
            $this->extend->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataList) {
            if (\is_array($this->dataList)) {
                $res['DataList'] = [];
                $n1 = 0;
                foreach ($this->dataList as $item1) {
                    $res['DataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extend) {
            $res['Extend'] = null !== $this->extend ? $this->extend->toArray($noStream) : $this->extend;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
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
        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n1 = 0;
                foreach ($map['DataList'] as $item1) {
                    $model->dataList[$n1] = dataList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Extend'])) {
            $model->extend = extend::fromMap($map['Extend']);
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }

        return $model;
    }
}
