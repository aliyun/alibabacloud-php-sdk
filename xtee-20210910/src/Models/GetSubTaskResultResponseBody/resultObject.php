<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\GetSubTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\GetSubTaskResultResponseBody\resultObject\config;
use AlibabaCloud\SDK\Xtee\V20210910\Models\GetSubTaskResultResponseBody\resultObject\file;
use AlibabaCloud\SDK\Xtee\V20210910\Models\GetSubTaskResultResponseBody\resultObject\log;

class resultObject extends Model
{
    /**
     * @var config[]
     */
    public $config;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var file
     */
    public $file;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var bool
     */
    public $isCharge;

    /**
     * @var log[]
     */
    public $log;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $resultUrl;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'config' => 'Config',
        'extraInfo' => 'ExtraInfo',
        'file' => 'File',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'fileUrl' => 'FileUrl',
        'isCharge' => 'IsCharge',
        'log' => 'Log',
        'reason' => 'Reason',
        'resultUrl' => 'ResultUrl',
        'scheduleType' => 'ScheduleType',
        'serviceCode' => 'ServiceCode',
        'serviceName' => 'ServiceName',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        if (null !== $this->file) {
            $this->file->validate();
        }
        if (\is_array($this->log)) {
            Model::validateArray($this->log);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['Config'] = [];
                $n1 = 0;
                foreach ($this->config as $item1) {
                    $res['Config'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->file) {
            $res['File'] = null !== $this->file ? $this->file->toArray($noStream) : $this->file;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->isCharge) {
            $res['IsCharge'] = $this->isCharge;
        }

        if (null !== $this->log) {
            if (\is_array($this->log)) {
                $res['Log'] = [];
                $n1 = 0;
                foreach ($this->log as $item1) {
                    $res['Log'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->resultUrl) {
            $res['ResultUrl'] = $this->resultUrl;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            if (!empty($map['Config'])) {
                $model->config = [];
                $n1 = 0;
                foreach ($map['Config'] as $item1) {
                    $model->config[$n1] = config::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['File'])) {
            $model->file = file::fromMap($map['File']);
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['IsCharge'])) {
            $model->isCharge = $map['IsCharge'];
        }

        if (isset($map['Log'])) {
            if (!empty($map['Log'])) {
                $model->log = [];
                $n1 = 0;
                foreach ($map['Log'] as $item1) {
                    $model->log[$n1] = log::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ResultUrl'])) {
            $model->resultUrl = $map['ResultUrl'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
