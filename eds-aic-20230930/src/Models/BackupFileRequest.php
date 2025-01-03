<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class BackupFileRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $androidInstanceIdList;

    /**
     * @var bool
     */
    public $backupAll;

    /**
     * @var string
     */
    public $backupFileName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $backupFilePath;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $sourceAppList;

    /**
     * @var string[]
     */
    public $sourceFilePathList;

    /**
     * @example oss-cn-shanghai-internal.aliyuncs.com
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
        'androidInstanceIdList' => 'AndroidInstanceIdList',
        'backupAll'             => 'BackupAll',
        'backupFileName'        => 'BackupFileName',
        'backupFilePath'        => 'BackupFilePath',
        'description'           => 'Description',
        'sourceAppList'         => 'SourceAppList',
        'sourceFilePathList'    => 'SourceFilePathList',
        'uploadEndpoint'        => 'UploadEndpoint',
        'uploadType'            => 'UploadType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIdList) {
            $res['AndroidInstanceIdList'] = $this->androidInstanceIdList;
        }
        if (null !== $this->backupAll) {
            $res['BackupAll'] = $this->backupAll;
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
        if (null !== $this->sourceAppList) {
            $res['SourceAppList'] = $this->sourceAppList;
        }
        if (null !== $this->sourceFilePathList) {
            $res['SourceFilePathList'] = $this->sourceFilePathList;
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
     * @return BackupFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIdList'])) {
            if (!empty($map['AndroidInstanceIdList'])) {
                $model->androidInstanceIdList = $map['AndroidInstanceIdList'];
            }
        }
        if (isset($map['BackupAll'])) {
            $model->backupAll = $map['BackupAll'];
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
        if (isset($map['SourceAppList'])) {
            if (!empty($map['SourceAppList'])) {
                $model->sourceAppList = $map['SourceAppList'];
            }
        }
        if (isset($map['SourceFilePathList'])) {
            if (!empty($map['SourceFilePathList'])) {
                $model->sourceFilePathList = $map['SourceFilePathList'];
            }
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
