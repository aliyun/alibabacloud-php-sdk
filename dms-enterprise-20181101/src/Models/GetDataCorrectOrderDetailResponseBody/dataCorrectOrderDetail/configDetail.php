<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\configDetail\cronExtConfig;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\configDetail\importExtConfig;
use AlibabaCloud\Tea\Model;

class configDetail extends Model
{
    /**
     * @description Indicates whether the task is a scheduled task for historical data cleanup. This parameter is a reserved parameter and is valid only if the value of DetailType is CRON_CLEAR_DATA.
     *
     * @example true
     *
     * @var bool
     */
    public $cron;

    /**
     * @description The number of times the scheduled task is run. This parameter is valid only if the value of DetailType is CRON_CLEAR_DATA.
     *
     * @example 0
     *
     * @var int
     */
    public $cronCallTimes;

    /**
     * @description The additional configuration information about historical data cleanup. This parameter is valid only if the value of DetailType is CRON_CLEAR_DATA.
     *
     * @var cronExtConfig
     */
    public $cronExtConfig;

    /**
     * @description The CRON expression of the scheduled task. This parameter is valid only if the value of DetailType is CRON_CLEAR_DATA.
     *
     * @example 0 0 2 * * ?
     *
     * @var string
     */
    public $cronFormat;

    /**
     * @description The time when the task was last run.
     *
     * @example 2024-04-19 02:00:00.0
     *
     * @var string
     */
    public $cronLastCallStartTime;

    /**
     * @description The time when the task is run next time. This parameter is returned only if the value of CronStatus is SUCCESS.
     *
     * @example 2024-04-19 02:00:00
     *
     * @var string
     */
    public $cronNextCallTime;

    /**
     * @description The state of the scheduled task. If this parameter is empty, the task is not run. Valid values:
     *
     *   PAUSE: The task is suspended.
     *   WAITING: The task is waiting to be run.
     *   SUCCESS: The task is run.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $cronStatus;

    /**
     * @description The name of the table to which data is to be imported. This parameter is valid only if the value of DetailType is BIG_FILE. If the value of FileType is SQL, this parameter is empty.
     *
     * @example tb_import_tb_name
     *
     * @var string
     */
    public $csvTableName;

    /**
     * @description The ID of the current data change task. This is a reserved parameter and can be ignored.
     *
     * @example 13***
     *
     * @var int
     */
    public $currentTaskId;

    /**
     * @description The type of the ticket. Valid values:
     *
     *   COMMON: regular data change.
     *   CHUNK_DML: lock-free data change.
     *   BIG_FILE: large data import.
     *   CRON_CLEAR_DATA: historical data cleanup.
     *   PROCEDURE: programmable object change.
     *
     * @example BIG_FILE
     *
     * @var string
     */
    public $detailType;

    /**
     * @description The execution duration of the scheduled task. Unit: hour. This parameter is valid only if the value of DetailType is CRON_CLEAR_DATA. If the value is greater than 0, an execution duration is set.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The encoding method of the file. This parameter may be empty, which indicates the value of AUTO. Valid values:
     *
     *   **AUTO**: automatic identification.
     *   **UTF-8**: UTF-8 encoding.
     *   **GBK**: GBK encoding.
     *   **ISO-8859-1**: ISO-8859-1 encoding.
     *
     * @example UTF-8
     *
     * @var string
     */
    public $fileEncoding;

    /**
     * @description The type of the file to be imported. This parameter is valid if the value of DetailType is BIG_FILE. Valid values:
     *
     *   **SQL**: an SQL file.
     *   **CSV**: a CSV file.
     *   **EXCEL**: an Excel file.
     *   **JSON**: a JSON file, which is supported only by MongoDB databases.
     *
     * @example CSV
     *
     * @var string
     */
    public $fileType;

    /**
     * @description The additional configuration information about data import. This parameter is valid if the value of DetailType is BIG_FILE.
     *
     * @var importExtConfig
     */
    public $importExtConfig;
    protected $_name = [
        'cron'                  => 'Cron',
        'cronCallTimes'         => 'CronCallTimes',
        'cronExtConfig'         => 'CronExtConfig',
        'cronFormat'            => 'CronFormat',
        'cronLastCallStartTime' => 'CronLastCallStartTime',
        'cronNextCallTime'      => 'CronNextCallTime',
        'cronStatus'            => 'CronStatus',
        'csvTableName'          => 'CsvTableName',
        'currentTaskId'         => 'CurrentTaskId',
        'detailType'            => 'DetailType',
        'duration'              => 'Duration',
        'fileEncoding'          => 'FileEncoding',
        'fileType'              => 'FileType',
        'importExtConfig'       => 'ImportExtConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }
        if (null !== $this->cronCallTimes) {
            $res['CronCallTimes'] = $this->cronCallTimes;
        }
        if (null !== $this->cronExtConfig) {
            $res['CronExtConfig'] = null !== $this->cronExtConfig ? $this->cronExtConfig->toMap() : null;
        }
        if (null !== $this->cronFormat) {
            $res['CronFormat'] = $this->cronFormat;
        }
        if (null !== $this->cronLastCallStartTime) {
            $res['CronLastCallStartTime'] = $this->cronLastCallStartTime;
        }
        if (null !== $this->cronNextCallTime) {
            $res['CronNextCallTime'] = $this->cronNextCallTime;
        }
        if (null !== $this->cronStatus) {
            $res['CronStatus'] = $this->cronStatus;
        }
        if (null !== $this->csvTableName) {
            $res['CsvTableName'] = $this->csvTableName;
        }
        if (null !== $this->currentTaskId) {
            $res['CurrentTaskId'] = $this->currentTaskId;
        }
        if (null !== $this->detailType) {
            $res['DetailType'] = $this->detailType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileEncoding) {
            $res['FileEncoding'] = $this->fileEncoding;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->importExtConfig) {
            $res['ImportExtConfig'] = null !== $this->importExtConfig ? $this->importExtConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }
        if (isset($map['CronCallTimes'])) {
            $model->cronCallTimes = $map['CronCallTimes'];
        }
        if (isset($map['CronExtConfig'])) {
            $model->cronExtConfig = cronExtConfig::fromMap($map['CronExtConfig']);
        }
        if (isset($map['CronFormat'])) {
            $model->cronFormat = $map['CronFormat'];
        }
        if (isset($map['CronLastCallStartTime'])) {
            $model->cronLastCallStartTime = $map['CronLastCallStartTime'];
        }
        if (isset($map['CronNextCallTime'])) {
            $model->cronNextCallTime = $map['CronNextCallTime'];
        }
        if (isset($map['CronStatus'])) {
            $model->cronStatus = $map['CronStatus'];
        }
        if (isset($map['CsvTableName'])) {
            $model->csvTableName = $map['CsvTableName'];
        }
        if (isset($map['CurrentTaskId'])) {
            $model->currentTaskId = $map['CurrentTaskId'];
        }
        if (isset($map['DetailType'])) {
            $model->detailType = $map['DetailType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileEncoding'])) {
            $model->fileEncoding = $map['FileEncoding'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['ImportExtConfig'])) {
            $model->importExtConfig = importExtConfig::fromMap($map['ImportExtConfig']);
        }

        return $model;
    }
}
