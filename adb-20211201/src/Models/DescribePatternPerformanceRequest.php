<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribePatternPerformanceRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * > You can call the [DescribeDBClusters](~~129857~~) operation to query the information about all AnalyticDB for MySQL Data Lakehouse Edition (V3.0) clusters within a region, including cluster IDs.
     * @example amv-uf6li1r3do8m****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end of the time range to query. Specify the time in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * > The end time must be later than the start time.
     * @example 2022-08-22T01:06:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the SQL pattern.
     *
     * > You can call the [DescribeSQLPatterns](~~321868~~) operation to query the information about all SQL patterns in an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster within a period of time, including SQL pattern IDs.
     * @example 3847585356974******
     *
     * @var string
     */
    public $patternId;

    /**
     * @description The region ID.
     *
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
     *   If the current date is August 22, 2022 (UTC+8), you can query the data of August 9, 2022 (2022-08-08T16:00:00Z) to the earliest extent. If you want to query the data that is earlier than August 9, 2022 (2022-08-08T16:00:00Z), null is returned.
     *
     *   The maximum time range that can be specified is 24 hours.
     *
     * @example 2022-08-21T02:15:00Z
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
