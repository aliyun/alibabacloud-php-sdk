<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\configDetail\cronExtConfig;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\configDetail\importExtConfig;
use AlibabaCloud\Tea\Model;

class configDetail extends Model
{
    /**
     * @var bool
     */
    public $cron;

    /**
     * @var int
     */
    public $cronCallTimes;

    /**
     * @var cronExtConfig
     */
    public $cronExtConfig;

    /**
     * @var string
     */
    public $cronFormat;

    /**
     * @var string
     */
    public $cronLastCallStartTime;

    /**
     * @var string
     */
    public $cronNextCallTime;

    /**
     * @var string
     */
    public $cronStatus;

    /**
     * @var string
     */
    public $csvTableName;

    /**
     * @var int
     */
    public $currentTaskId;

    /**
     * @var string
     */
    public $detailType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $fileEncoding;

    /**
     * @var string
     */
    public $fileType;

    /**
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
