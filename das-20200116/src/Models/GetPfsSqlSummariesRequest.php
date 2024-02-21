<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetPfsSqlSummariesRequest extends Model
{
    /**
     * @description Specifies whether to sort the returned entries in ascending order. Default value: **false**. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $asc;

    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The end time must be later than the start time. You can view the data of up to seven days within the last month.
     * @example 1679297005999
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The instance ID.
     *
     * @example rm-uf61swc4cru0b****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The keywords of the SQL template. Separate multiple keywords with spaces.
     *
     * @example select update
     *
     * @var string
     */
    public $keywords;

    /**
     * @description The node ID.
     *
     * >  This parameter must be specified if the database instance is an ApsaraDB RDS for MySQL Cluster Edition instance or a PolarDB for MySQL cluster.
     * @example r-****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The field by which to sort the returned entries. Default value: **count**.
     *
     *   **count**: the number of executions.
     *   **avgRt**: the average execution duration.
     *   **rtRate**: the execution duration percentage.
     *   **rowsExamined**: the total number of scanned rows.
     *   **avgRowsExamined**: the average number of scanned rows.
     *   **avgRowsReturned**: the average number of returned rows.
     *
     * @example count
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The SQL ID.
     *
     * >  If this parameter is specified, the full request statistics of the specified SQL query are collected. If this parameter is left empty, the full request statistics of the entire database instance are collected.
     * @example 651b56fe9418d48edb8fdf0980ec****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1675833788056
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'asc'        => 'Asc',
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'keywords'   => 'Keywords',
        'nodeId'     => 'NodeId',
        'orderBy'    => 'OrderBy',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'sqlId'      => 'SqlId',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asc) {
            $res['Asc'] = $this->asc;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPfsSqlSummariesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asc'])) {
            $model->asc = $map['Asc'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
