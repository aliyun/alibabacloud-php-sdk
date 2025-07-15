<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBackupFilesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example acp-34pqe4r0kd9kn****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @description The name of the instance.
     *
     * @example defaultInstanceName
     *
     * @var string
     */
    public $androidInstanceName;

    /**
     * @description Indicates whether the whole instance is backed up.
     *
     * @example true
     *
     * @var bool
     */
    public $backupAll;

    /**
     * @description The ID of the backup file.
     *
     * @example bf-b0qbg3pbpjkn7****
     *
     * @var string
     */
    public $backupFileId;

    /**
     * @description The name of the backup file.
     *
     * @example a-58ftsoo90p0qa****.ab
     *
     * @var string
     */
    public $backupFileName;

    /**
     * @description The directory in which the backup file is stored.
     *
     * @example oss://cloudphone-saved-bucket-cn-shanghai/backup/aic-58ftsoo90p0qa****.ab
     *
     * @var string
     */
    public $backupFilePath;

    /**
     * @description The description of the backup file.
     *
     * @example This is default description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The owner of the backup file.
     *
     * @example test
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The total size of the source files.
     *
     * @example 10227168
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The time when the backup file was created.
     *
     * @example 2024-05-15 17:33:59
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the backup file was last updated.
     *
     * @example 2024-05-15 17:33:59
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the instance group.
     *
     * @example ag-58ftsoo90p0qi****
     *
     * @var string
     */
    public $instanceGroupId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The names of the application packages that are backed up.
     *
     * @var string[]
     */
    public $sourceAppInfoList;

    /**
     * @description The directories of the source files.
     *
     * @var string[]
     */
    public $sourceFilePathList;

    /**
     * @description The status of the backup file.
     *
     * Valid values:
     *
     *   AVAILABLE
     *   RECOVERING
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID.
     *
     * @example t-bp67acfmxazb4p****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The endpoint of the OSS bucket that stores the backup file.
     *
     * @example oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $uploadEndpoint;

    /**
     * @description The type of the backup.
     *
     * Valid values:
     *
     *   OSS: backup files are stored in OSS buckets. .
     *
     * @example OSS
     *
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

    public function validate() {}

    public function toMap()
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
            $res['SourceAppInfoList'] = $this->sourceAppInfoList;
        }
        if (null !== $this->sourceFilePathList) {
            $res['SourceFilePathList'] = $this->sourceFilePathList;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $model->sourceAppInfoList = $map['SourceAppInfoList'];
            }
        }
        if (isset($map['SourceFilePathList'])) {
            if (!empty($map['SourceFilePathList'])) {
                $model->sourceFilePathList = $map['SourceFilePathList'];
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
