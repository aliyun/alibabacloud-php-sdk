<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLPatternAttributeRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the detailed information of all AnalyticDB for MySQL clusters within a specific region, including cluster IDs.
     * @example am-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * >  The end time must be later than the start time.
     * @example 2021-09-30T00:15Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The languages available for file titles and some error messages. Default value: zh. Valid values:
     *
     *   **zh**: Simplified Chinese
     *   **en**: English
     *   **ja**: Japanese
     *   **zh-tw**: Traditional Chinese
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the SQL pattern.
     *
     * >  You can call the [DescribeSQLPatterns](~~321868~~) operation to query the list of SQL patterns within an AnalyticDB for MySQL cluster for a specific period of time, including SQL pattern IDs.
     * @example 5575924945138******
     *
     * @var int
     */
    public $patternId;

    /**
     * @description The region ID of the cluster.
     *
     * >  You can call the [DescribeRegions](~~143074~~) operation to query the regions and zones supported by AnalyticDB for MySQL, including region IDs.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-ddTHH:mmZ* format. The time must be in UTC.
     *
     * >  Only data generated within the last 15 days can be viewed.
     * @example 2021-09-30T00:10Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'endTime'     => 'EndTime',
        'lang'        => 'Lang',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
     * @return DescribeSQLPatternAttributeRequest
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
