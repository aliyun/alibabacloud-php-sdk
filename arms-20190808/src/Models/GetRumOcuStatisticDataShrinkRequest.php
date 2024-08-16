<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetRumOcuStatisticDataShrinkRequest extends Model
{
    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1687849260000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The filter condition. Three types of filter conditions are provided:
     *
     *   Application name: pid (Note that the application name is displayed, but the application ID is actually specified)
     *   Application type: siteType
     *   Data type: dataType
     *
     * @var string
     */
    public $filterShrink;

    /**
     * @description The grouping fields. Valid values:
     *
     *   siteType: The total number of OCUs is grouped by application type.
     *   dataType: The total number of OCUs is grouped by data type.
     *   pid: The total number of OCUs is grouped by application ID.
     *   appName: The total number of OCUs is grouped by application name.
     *   startTime: The total number of OCUs is grouped by start time.
     *
     * @var string
     */
    public $groupShrink;

    /**
     * @description The page number.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries per page.
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the query. To query non-time series data, set the value to INSTANT. To query time series data, set the value to TIME_SERIES.
     *
     * @example TIME_SERIES
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1600063200000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'filterShrink' => 'Filter',
        'groupShrink'  => 'Group',
        'page'         => 'Page',
        'pageSize'     => 'PageSize',
        'queryType'    => 'QueryType',
        'regionId'     => 'RegionId',
        'startTime'    => 'StartTime',
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
        if (null !== $this->filterShrink) {
            $res['Filter'] = $this->filterShrink;
        }
        if (null !== $this->groupShrink) {
            $res['Group'] = $this->groupShrink;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRumOcuStatisticDataShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Filter'])) {
            $model->filterShrink = $map['Filter'];
        }
        if (isset($map['Group'])) {
            $model->groupShrink = $map['Group'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
