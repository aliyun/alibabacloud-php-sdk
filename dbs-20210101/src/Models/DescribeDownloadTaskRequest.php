<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDownloadTaskRequest extends Model
{
    /**
     * @description The ID of the backup set generated when you create a download task. You can call the [DescribeBackups](~~26273~~) operation to query the ID.
     *
     * @example 216****
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The ID of the Database Backup (DBS) data source. Specify the parameter in the format of *ds-${Instance ID}\_${regionId}*.
     *
     * @example ds-rm-2ze8g2am97624****_cn-hangzhou
     *
     * @var string
     */
    public $datasourceId;

    /**
     * @description The end of the time range to query. Specify this parameter as a timestamp of the LONG type. Unit: milliseconds.
     *
     * @example 1661941556000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the instance.
     *
     * > This parameter is required.
     * @example rm-bp1imnmcjxdz7****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The column based on which the entries are sorted. By default, the entries are sorted by the time when the download task was created. Set the value to **gmt_create**.
     *
     * @example gmt_create
     *
     * @var string
     */
    public $orderColumn;

    /**
     * @description The order in which you want to sort the entries. Valid values:
     *
     *   **asc**: the ascending order.
     *   **desc**: the descending order. This is the default value.
     *
     * @example desc
     *
     * @var string
     */
    public $orderDirect;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 50
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The ID of the region in which the instance resides. You can call the [DescribeDBInstanceAttribute](~~26231~~) operation to query the region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionCode;

    /**
     * @description The beginning of the time range to query. Specify this parameter as a timestamp of the LONG type. Unit: milliseconds.
     *
     * @example 1661941554000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the download task. Valid values:
     *
     *   **Initializing**: The download task is being initialized.
     *   **queueing**: The download task is queuing.
     *   **running**: The download task is running.
     *   **failed**: The download task fails.
     *   **finished**: The download task is complete.
     *   **expired**: The download task expires.
     *
     * @example queueing
     *
     * @var string
     */
    public $state;

    /**
     * @description The type of the download task. Valid values:
     *
     *   **full**: downloads a full backup set.
     *   **pitr**: downloads a backup set at a specific point in time.
     *
     * @example full
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'backupSetId'  => 'BackupSetId',
        'currentPage'  => 'CurrentPage',
        'datasourceId' => 'DatasourceId',
        'endTime'      => 'EndTime',
        'instanceName' => 'InstanceName',
        'orderColumn'  => 'OrderColumn',
        'orderDirect'  => 'OrderDirect',
        'pageSize'     => 'PageSize',
        'regionCode'   => 'RegionCode',
        'startTime'    => 'StartTime',
        'state'        => 'State',
        'taskType'     => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->orderColumn) {
            $res['OrderColumn'] = $this->orderColumn;
        }
        if (null !== $this->orderDirect) {
            $res['OrderDirect'] = $this->orderDirect;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDownloadTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['OrderColumn'])) {
            $model->orderColumn = $map['OrderColumn'];
        }
        if (isset($map['OrderDirect'])) {
            $model->orderDirect = $map['OrderDirect'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
