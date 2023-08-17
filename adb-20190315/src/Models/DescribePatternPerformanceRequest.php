<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribePatternPerformanceRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * > You can call the [DescribeDBClusters](~~129857~~) operation to query the information about all AnalyticDB for MySQL clusters within a region, including cluster IDs.
     * @example am-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time must be in UTC.
     *
     * > The end time must be later than the start time.
     * @example 2021-11-18T18:05:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The SQL pattern ID.
     *
     * > You can call the [DescribeSQLPatterns](~~321868~~) operation to query the information about all SQL patterns in an AnalyticDB for MySQL cluster within a period of time, including SQL pattern IDs.
     * @example 3847585356974******
     *
     * @var string
     */
    public $patternId;

    /**
     * @description The region ID of the cluster.
     *
     * > You can call the [DescribeRegions](~~143074~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time must be in UTC.
     *
     * >
     *
     *   Only data within the last 14 days can be queried. For example, if the current date is November 22 (UTC+8), you can query data on a day as early as November 9 by setting StartTime to 2021-11-08T16:00:00Z. If you set StartTime to a value earlier than 2021-11-08T16:00:00Z, the Performances parameter is empty.
     *
     *   The maximum time range that can be specified is 24 hours.
     *
     * @example 2021-11-18T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'endTime'     => 'EndTime',
        'patternId'   => 'PatternId',
        'regionId'    => 'RegionId',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->patternId) {
            $res['PatternId'] = $this->patternId;
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
     * @return DescribePatternPerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PatternId'])) {
            $model->patternId = $map['PatternId'];
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
