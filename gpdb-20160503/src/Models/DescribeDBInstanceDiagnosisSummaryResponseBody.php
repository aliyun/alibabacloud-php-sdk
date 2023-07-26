<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryResponseBody\items;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryResponseBody\masterStatusInfo;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryResponseBody\segmentStatusInfo;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceDiagnosisSummaryResponseBody extends Model
{
    /**
     * @description Details of instance nodes.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description State statistics of the coordinator node.
     *
     * @var masterStatusInfo
     */
    public $masterStatusInfo;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The ID of the request.
     *
     * @example 070534EC-78D5-5519-83CC-E7B1A9213483
     *
     * @var string
     */
    public $requestId;

    /**
     * @description State statistics of compute nodes.
     *
     * @var segmentStatusInfo
     */
    public $segmentStatusInfo;

    /**
     * @description The total number of entries returned.
     *
     * @example 6
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->masterStatusInfo) {
            $res['MasterStatusInfo'] = null !== $this->masterStatusInfo ? $this->masterStatusInfo->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->segmentStatusInfo) {
            $res['SegmentStatusInfo'] = null !== $this->segmentStatusInfo ? $this->segmentStatusInfo->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceDiagnosisSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
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
