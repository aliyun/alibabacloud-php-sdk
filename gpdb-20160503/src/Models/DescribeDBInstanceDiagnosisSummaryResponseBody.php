<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryResponseBody\items;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryResponseBody\masterStatusInfo;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryResponseBody\segmentStatusInfo;

class DescribeDBInstanceDiagnosisSummaryResponseBody extends Model
{
    /**
     * @var items[]
     */
    public $items;
    /**
     * @var masterStatusInfo
     */
    public $masterStatusInfo;
    /**
     * @var string
     */
    public $pageNumber;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var segmentStatusInfo
     */
    public $segmentStatusInfo;
    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'items'             => 'Items',
        'masterStatusInfo'  => 'MasterStatusInfo',
        'pageNumber'        => 'PageNumber',
        'requestId'         => 'RequestId',
        'segmentStatusInfo' => 'SegmentStatusInfo',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (null !== $this->masterStatusInfo) {
            $this->masterStatusInfo->validate();
        }
        if (null !== $this->segmentStatusInfo) {
            $this->segmentStatusInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1           = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->masterStatusInfo) {
            $res['MasterStatusInfo'] = null !== $this->masterStatusInfo ? $this->masterStatusInfo->toArray($noStream) : $this->masterStatusInfo;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->segmentStatusInfo) {
            $res['SegmentStatusInfo'] = null !== $this->segmentStatusInfo ? $this->segmentStatusInfo->toArray($noStream) : $this->segmentStatusInfo;
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
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1           = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1++] = items::fromMap($item1);
                }
            }
        }

        if (isset($map['MasterStatusInfo'])) {
            $model->masterStatusInfo = masterStatusInfo::fromMap($map['MasterStatusInfo']);
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SegmentStatusInfo'])) {
            $model->segmentStatusInfo = segmentStatusInfo::fromMap($map['SegmentStatusInfo']);
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
