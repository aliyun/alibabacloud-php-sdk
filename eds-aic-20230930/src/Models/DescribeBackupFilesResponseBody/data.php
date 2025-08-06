<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBackupFilesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $androidInstanceId;

    /**
     * @var string
     */
    public $androidInstanceName;

    /**
     * @var bool
     */
    public $backupAll;

    /**
     * @var string
     */
    public $backupFileId;

    /**
     * @var string
     */
    public $backupFileName;

    /**
     * @var string
     */
    public $backupFilePath;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $instanceGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $sourceAppInfoList;

    /**
     * @var string[]
     */
    public $sourceFilePathList;

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
    public $uploadEndpoint;

    /**
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'androidInstanceId' => 'AndroidInstanceId',
        'androidInstanceName' => 'AndroidInstanceName',
        'backupAll' => 'BackupAll',
        'backupFileId' => 'BackupFileId',
        'backupFileName' => 'BackupFileName',
        'backupFilePath' => 'BackupFilePath',
        'description' => 'Description',
        'endUserId' => 'EndUserId',
        'fileSize' => 'FileSize',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'instanceGroupId' => 'InstanceGroupId',
        'regionId' => 'RegionId',
        'sourceAppInfoList' => 'SourceAppInfoList',
        'sourceFilePathList' => 'SourceFilePathList',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'uploadEndpoint' => 'UploadEndpoint',
        'uploadType' => 'UploadType',
    ];

    public function validate()
    {
        if (\is_array($this->sourceAppInfoList)) {
            Model::validateArray($this->sourceAppInfoList);
        }
        if (\is_array($this->sourceFilePathList)) {
            Model::validateArray($this->sourceFilePathList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }

        if (null !== $this->androidInstanceName) {
            $res['AndroidInstanceName'] = $this->androidInstanceName;
        }

        if (null !== $this->backupAll) {
            $res['BackupAll'] = $this->backupAll;
        }

        if (null !== $this->backupFileId) {
            $res['BackupFileId'] = $this->backupFileId;
        }

        if (null !== $this->backupFileName) {
            $res['BackupFileName'] = $this->backupFileName;
        }

        if (null !== $this->backupFilePath) {
            $res['BackupFilePath'] = $this->backupFilePath;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sourceAppInfoList) {
            if (\is_array($this->sourceAppInfoList)) {
                $res['SourceAppInfoList'] = [];
                $n1 = 0;
                foreach ($this->sourceAppInfoList as $item1) {
                    $res['SourceAppInfoList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceFilePathList) {
            if (\is_array($this->sourceFilePathList)) {
                $res['SourceFilePathList'] = [];
                $n1 = 0;
                foreach ($this->sourceFilePathList as $item1) {
                    $res['SourceFilePathList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->uploadEndpoint) {
            $res['UploadEndpoint'] = $this->uploadEndpoint;
        }

        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
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
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }

        if (isset($map['AndroidInstanceName'])) {
            $model->androidInstanceName = $map['AndroidInstanceName'];
        }

        if (isset($map['BackupAll'])) {
            $model->backupAll = $map['BackupAll'];
        }

        if (isset($map['BackupFileId'])) {
            $model->backupFileId = $map['BackupFileId'];
        }

        if (isset($map['BackupFileName'])) {
            $model->backupFileName = $map['BackupFileName'];
        }

        if (isset($map['BackupFilePath'])) {
            $model->backupFilePath = $map['BackupFilePath'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SourceAppInfoList'])) {
            if (!empty($map['SourceAppInfoList'])) {
                $model->sourceAppInfoList = [];
                $n1 = 0;
                foreach ($map['SourceAppInfoList'] as $item1) {
                    $model->sourceAppInfoList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceFilePathList'])) {
            if (!empty($map['SourceFilePathList'])) {
                $model->sourceFilePathList = [];
                $n1 = 0;
                foreach ($map['SourceFilePathList'] as $item1) {
                    $model->sourceFilePathList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UploadEndpoint'])) {
            $model->uploadEndpoint = $map['UploadEndpoint'];
        }

        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }

        return $model;
    }
}
