<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class QueryHistoryAvgMetricListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataDate;

    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $rangeShrink;

    /**
     * @var string
     */
    public $resourceRegionId;

    /**
     * @var string
     */
    public $sortType;
    protected $_name = [
        'dataDate' => 'DataDate',
        'desktopId' => 'DesktopId',
        'metricName' => 'MetricName',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'rangeShrink' => 'Range',
        'resourceRegionId' => 'ResourceRegionId',
        'sortType' => 'SortType',
    ];

    public function validate()
    {
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDate) {
            $res['DataDate'] = $this->dataDate;
        }

        if (null !== $this->desktopId) {
            if (\is_array($this->desktopId)) {
                $res['DesktopId'] = [];
                $n1 = 0;
                foreach ($this->desktopId as $item1) {
                    $res['DesktopId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->rangeShrink) {
            $res['Range'] = $this->rangeShrink;
        }

        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }

        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
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
        if (isset($map['DataDate'])) {
            $model->dataDate = $map['DataDate'];
        }

        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = [];
                $n1 = 0;
                foreach ($map['DesktopId'] as $item1) {
                    $model->desktopId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Range'])) {
            $model->rangeShrink = $map['Range'];
        }

        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }

        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        return $model;
    }
}
