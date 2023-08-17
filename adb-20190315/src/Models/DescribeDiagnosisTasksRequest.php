<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisTasksRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * > You can call the [DescribeDBClusters](~~129857~~) operation to query the IDs of all AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a region.
     * @example am-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The IP address from which the query was initiated.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $host;

    /**
     * @description The order in which to sort the tasks by field. Specify the value in the JSON format. Example: `[{"Field":"CreateTime", "Type":"desc"}]`.
     *
     * >
     *
     *   `Field` indicates the field that is used to sort the tasks. Valid values of Field: `State`, `CreateTime`, `DBName`, `ProcessID`, `UpdateTime`, `JobName`, and `ProcessRows`.
     *
     *   `Type` indicates the sort type. Valid values of Type: `Desc` and `Asc`. The values are case-insensitive.
     *
     * @example [{"Field":"StartTime", "Type": "desc" }]
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:
     *
     *   30 (default)
     *   50
     *   100
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query ID.
     *
     * > You can call the [DescribeProcessList](~~190092~~) operation to query the IDs of queries that are being executed.
     * @example 202011191048151921681492420315100****
     *
     * @var string
     */
    public $processId;

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
     * @description The ID of a stage in the query that is specified by the `ProcessId` parameter.
     *
     * @example Stage[26]
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The state of the asynchronous import or export task to be queried. Valid values:
     *
     *   **RUNNING**
     *   **FINISHED**
     *   **FAILED**
     *
     * @example RUNNING
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'host'        => 'Host',
        'order'       => 'Order',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'processId'   => 'ProcessId',
        'regionId'    => 'RegionId',
        'stageId'     => 'StageId',
        'state'       => 'State',
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
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
