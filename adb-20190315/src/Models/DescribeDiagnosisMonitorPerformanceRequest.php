<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisMonitorPerformanceRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the cluster IDs of all AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a specific region.
     * @example am-bp108q1py5r78****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end of the time range to query. Specify the time in the UNIX timestamp format. Unit: milliseconds.
     *
     * @example 1671687948000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The language of file titles and error messages. Default value: zh. Valid values:
     *
     *   **zh**: simplified Chinese
     *   **en**: English
     *   **ja**: Japanese
     *   **zh-tw**: traditional Chinese
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The query conditions for SQL statements, which can be a combination of the `Type` and `Value` fields or a combination of the Type, `Min`, and `Max` fields. Specify the conditions in the JSON format. `Type` specifies the query dimension. Valid values for Type: `maxCost`, `status`, and `cost`. `Value`, `Min`, or `Max` specifies the query range for the dimension. Valid values:
     *
     *   `{"Type":"maxCost","Value":"100"}`: queries the top 100 most time-consuming SQL statements. Set `Value` to 100.
     *   `{"Type":"status","Value":"finished"}`: queries executed SQL statements. You can set `Value` to `running` to query SQL statements that are being executed. You can also set Value to `failed` to query SQL statements that failed to be executed.
     *   `{"Type":"cost","Min":"10","Max":"200"}`: queries SQL statements whose execution durations are in the range of 10 to 200 milliseconds. You can also customize the maximum and minimum execution durations.
     *
     * @example {\"Type\":\"maxCost\",\"Value\":\"100\"}
     *
     * @var string
     */
    public $queryCondition;

    /**
     * @description The region ID of the cluster.
     *
     * >  You can call the [DescribeRegions](~~143074~~) operation to query the most recent region list.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the UNIX timestamp format. Unit: milliseconds.
     *
     * @example 1671684348000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId'    => 'DBClusterId',
        'endTime'        => 'EndTime',
        'lang'           => 'Lang',
        'queryCondition' => 'QueryCondition',
        'regionId'       => 'RegionId',
        'startTime'      => 'StartTime',
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
        if (null !== $this->queryCondition) {
            $res['QueryCondition'] = $this->queryCondition;
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
     * @return DescribeDiagnosisMonitorPerformanceRequest
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
        if (isset($map['QueryCondition'])) {
            $model->queryCondition = $map['QueryCondition'];
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
