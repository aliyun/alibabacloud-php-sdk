<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeBackupFilesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example acp-34pqe4r0kd9kn****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @var string
     */
    public $androidInstanceName;

    /**
     * @example bf-b0qbg3pbpjkn7****
     *
     * @var string
     */
    public $backupFileId;

    /**
     * @example a-58ftsoo90p0qa****.ab
     *
     * @var string
     */
    public $backupFileName;

    /**
     * @example oss://cloudphone-saved-bucket-cn-shanghai/backup/aic-58ftsoo90p0qa****.ab
     *
     * @var string
     */
    public $backupFilePath;

    /**
     * @var string
     */
    public $description;

    /**
     * @example test
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 10227168
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example 2024-05-15 17:33:59
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2024-05-15 17:33:59
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example ag-58ftsoo90p0qi****
     *
     * @var string
     */
    public $instanceGroupId;

    /**
     * @var string[]
     */
    public $sourceFilePathList;

    /**
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @example oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $uploadEndpoint;

    /**
     * @example OSS
     *
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'androidInstanceId'   => 'AndroidInstanceId',
        'androidInstanceName' => 'AndroidInstanceName',
        'backupFileId'        => 'BackupFileId',
        'backupFileName'      => 'BackupFileName',
        'backupFilePath'      => 'BackupFilePath',
        'description'         => 'Description',
        'endUserId'           => 'EndUserId',
        'fileSize'            => 'FileSize',
        'gmtCreated'          => 'GmtCreated',
        'gmtModified'         => 'GmtModified',
        'instanceGroupId'     => 'InstanceGroupId',
        'sourceFilePathList'  => 'SourceFilePathList',
        'status'              => 'Status',
        'uploadEndpoint'      => 'UploadEndpoint',
        'uploadType'          => 'UploadType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }
        if (null !== $this->androidInstanceName) {
            $res['AndroidInstanceName'] = $this->androidInstanceName;
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
        if (null !== $this->sourceFilePathList) {
            $res['SourceFilePathList'] = $this->sourceFilePathList;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['SourceFilePathList'])) {
            if (!empty($map['SourceFilePathList'])) {
                $model->sourceFilePathList = $map['SourceFilePathList'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
