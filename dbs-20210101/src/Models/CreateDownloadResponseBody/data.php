<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\CreateDownloadResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $backupSetTime;

    /**
     * @var string
     */
    public $bakSetId;

    /**
     * @var string
     */
    public $dbList;

    /**
     * @var string
     */
    public $downloadStatus;

    /**
     * @var int
     */
    public $exportDataSize;

    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $importDataSize;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $regionCode;

    /**
     * @var string
     */
    public $targetPath;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'backupSetTime' => 'BackupSetTime',
        'bakSetId' => 'BakSetId',
        'dbList' => 'DbList',
        'downloadStatus' => 'DownloadStatus',
        'exportDataSize' => 'ExportDataSize',
        'format' => 'Format',
        'gmtCreate' => 'GmtCreate',
        'importDataSize' => 'ImportDataSize',
        'progress' => 'Progress',
        'regionCode' => 'RegionCode',
        'targetPath' => 'TargetPath',
        'targetType' => 'TargetType',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
