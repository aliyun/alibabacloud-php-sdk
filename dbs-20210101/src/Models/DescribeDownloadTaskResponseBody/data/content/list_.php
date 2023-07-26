<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeDownloadTaskResponseBody\data\content;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The point in time of the backup set if the task is used to download a backup set at a specific point in time. The value is a timestamp of the LONG type. Unit: milliseconds.
     *
     * @example 1663162216000
     *
     * @var string
     */
    public $backupSetTime;

    /**
     * @description The ID of the full backup set.
     *
     * @example 148261****
     *
     * @var string
     */
    public $bakSetId;

    /**
     * @description The databases.
     *
     * @example [dbtest]
     *
     * @var string
     */
    public $dbList;

    /**
     * @description The state of the download task. Valid values:
     *
     *   **Initializing**: The download task was being initialized.
     *   **queuing**: The download task was queuing.
     *   **running**: The download task was running.
     *   **failed**: The download task failed.
     *   **finished**: The download task was complete.
     *   **expired**: The download task expired.
     *
     * @example queueing
     *
     * @var string
     */
    public $downloadStatus;

    /**
     * @description The amount of output data. Unit: bytes.
     *
     * @example 0
     *
     * @var string
     */
    public $exportDataSize;

    /**
     * @description The format to which the downloaded backup set is converted. Valid values:
     *
     *   **csv**
     *   **SQL**
     *   **Parquet**
     *
     * @example csv
     *
     * @var string
     */
    public $format;

    /**
     * @description The time when the download task was created. The value is a timestamp.
     *
     * @example 1663321957000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The amount of data that is processed. Unit: bytes.
     *
     * @example 0
     *
     * @var string
     */
    public $importDataSize;

    /**
     * @description The number of tables that have been downloaded and the total number of tables to be downloaded.
     *
     * @example 0/0
     *
     * @var string
     */
    public $progress;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionCode;

    /**
     * @description The destination path to which the data is downloaded if the TargeType parameter is set to OSS.
     *
     * @example test_db/path
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description The type of the method in which the backup set is downloaded. Valid values:
     *
     *   **OSS**
     *   **URL**
     *
     * @example URL
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The ID of the download task.
     *
     * @example dt-qxntlvgu****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'backupSetTime'  => 'BackupSetTime',
        'bakSetId'       => 'BakSetId',
        'dbList'         => 'DbList',
        'downloadStatus' => 'DownloadStatus',
        'exportDataSize' => 'ExportDataSize',
        'format'         => 'Format',
        'gmtCreate'      => 'GmtCreate',
        'importDataSize' => 'ImportDataSize',
        'progress'       => 'Progress',
        'regionCode'     => 'RegionCode',
        'targetPath'     => 'TargetPath',
        'targetType'     => 'TargetType',
        'taskId'         => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetTime) {
            $res['BackupSetTime'] = $this->backupSetTime;
        }
        if (null !== $this->bakSetId) {
            $res['BakSetId'] = $this->bakSetId;
        }
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }
        if (null !== $this->downloadStatus) {
            $res['DownloadStatus'] = $this->downloadStatus;
        }
        if (null !== $this->exportDataSize) {
            $res['ExportDataSize'] = $this->exportDataSize;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->importDataSize) {
            $res['ImportDataSize'] = $this->importDataSize;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }
        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetTime'])) {
            $model->backupSetTime = $map['BackupSetTime'];
        }
        if (isset($map['BakSetId'])) {
            $model->bakSetId = $map['BakSetId'];
        }
        if (isset($map['DbList'])) {
            $model->dbList = $map['DbList'];
        }
        if (isset($map['DownloadStatus'])) {
            $model->downloadStatus = $map['DownloadStatus'];
        }
        if (isset($map['ExportDataSize'])) {
            $model->exportDataSize = $map['ExportDataSize'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ImportDataSize'])) {
            $model->importDataSize = $map['ImportDataSize'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }
        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
