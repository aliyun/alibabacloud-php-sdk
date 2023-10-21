<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeCrossRegionBackupsResponseBody extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * @example 2019-06-15T12:10:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The cross-region data backup files.
     *
     * @var items
     */
    public $items;

    /**
     * @description The page number. Pages start from page 1.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of cross-region data backup files on the current page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 60912B41-7579-4B5D-B289-8856030F0A6A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range to query.
     *
     * @example 2019-05-30T12:10:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The total number of entries that are returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'endTime'          => 'EndTime',
        'items'            => 'Items',
        'pageNumber'       => 'PageNumber',
        'pageRecordCount'  => 'PageRecordCount',
        'regionId'         => 'RegionId',
        'requestId'        => 'RequestId',
        'startTime'        => 'StartTime',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCrossRegionBackupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
