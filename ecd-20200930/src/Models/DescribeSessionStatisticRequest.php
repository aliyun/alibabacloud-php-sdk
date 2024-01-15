<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeSessionStatisticRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * @example 1677808889806
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The workspace ID.
     *
     * @example cn-shanghai+dir-259382****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The query interval. Unit: seconds. Valid values:
     *
     *   60
     *   120
     *
     * @example 60
     *
     * @var int
     */
    public $period;

    /**
     * @description The region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies to search for session information by region ID. This parameter is used to filter desktop information of a specific region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $searchRegionId;

    /**
     * @description The beginning of the time range to query.
     *
     * @example 1679449506572
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'        => 'EndTime',
        'officeSiteId'   => 'OfficeSiteId',
        'period'         => 'Period',
        'regionId'       => 'RegionId',
        'searchRegionId' => 'SearchRegionId',
        'startTime'      => 'StartTime',
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
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->searchRegionId) {
            $res['SearchRegionId'] = $this->searchRegionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSessionStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SearchRegionId'])) {
            $model->searchRegionId = $map['SearchRegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
