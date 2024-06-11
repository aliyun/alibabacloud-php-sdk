<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RecoveryFileRequest extends Model
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
     * @example bf-azhps4rdyi2th****
     *
     * @var string
     */
    public $backupFileId;

    /**
     * @description This parameter is required.
     *
     * @example oss://cloudphone-saved-bucket-cn-hangzhou-****\/aaa/acp-ig2bdpk374l12****_2024052014****.ab
     *
     * @var string
     */
    public $backupFilePath;

    /**
     * @example oss-cn-hangzhou-internal.aliyuncs.com
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
        'backupFileId'          => 'BackupFileId',
        'backupFilePath'        => 'BackupFilePath',
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
        if (null !== $this->backupFileId) {
            $res['BackupFileId'] = $this->backupFileId;
        }
        if (null !== $this->backupFilePath) {
            $res['BackupFilePath'] = $this->backupFilePath;
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
     * @return RecoveryFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIdList'])) {
            if (!empty($map['AndroidInstanceIdList'])) {
                $model->androidInstanceIdList = $map['AndroidInstanceIdList'];
            }
        }
        if (isset($map['BackupFileId'])) {
            $model->backupFileId = $map['BackupFileId'];
        }
        if (isset($map['BackupFilePath'])) {
            $model->backupFilePath = $map['BackupFilePath'];
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
