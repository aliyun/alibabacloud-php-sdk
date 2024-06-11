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
     * @description This parameter is required.
     *
     * @example oss://cloudphone-saved-bucket-****\/mabo/aic-i3b83gk0rw6p24jx3_2024051409****.ab
     *
     * @var string
     */
    public $backupFilePath;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
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
        'backupFilePath'        => 'BackupFilePath',
        'description'           => 'Description',
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
        if (null !== $this->backupFilePath) {
            $res['BackupFilePath'] = $this->backupFilePath;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['BackupFilePath'])) {
            $model->backupFilePath = $map['BackupFilePath'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
