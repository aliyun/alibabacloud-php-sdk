<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RecoveryFileRequest extends Model
{
    /**
     * @description The IDs of the instances.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $androidInstanceIdList;

    /**
     * @description Specifies whether to back up the whole instance.
     *
     * @example true
     *
     * @var bool
     */
    public $backupAll;

    /**
     * @description The ID of the backup file.
     *
     * @example bf-azhps4rdyi2th****
     *
     * @var string
     */
    public $backupFileId;

    /**
     * @description The OSS path to which the backup file is uploaded.
     *
     * >  When calling the describeBuckets operation to retrieve a bucket name, you must also call the ossObjectList operation to obtain the object key. Combine these to form the full path: oss://${bucketName}/${key}.
     *
     * @var string
     */
    public $backupFilePath;

    /**
     * @description The endpoint of the OSS bucket that stores the backup file.
     *
     * > : When calling the DescribeBuckets operation to query buckets, retrieve the IntranetEndpoint value if the cloud phone and the OSS bucket are in the same region. If they are in different regions, retrieve the ExtranetEndpoint value instead.
     *
     * @example oss-cn-hangzhou-internal.aliyuncs.com
     *
     * @var string
     */
    public $uploadEndpoint;

    /**
     * @description The type of the backup.
     *
     * Valid values:
     *
     *   OSS: backup files are stored in OSS buckets.
     *
     * @example OSS
     *
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'androidInstanceIdList' => 'AndroidInstanceIdList',
        'backupAll' => 'BackupAll',
        'backupFileId' => 'BackupFileId',
        'backupFilePath' => 'BackupFilePath',
        'uploadEndpoint' => 'UploadEndpoint',
        'uploadType' => 'UploadType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIdList) {
            $res['AndroidInstanceIdList'] = $this->androidInstanceIdList;
        }
        if (null !== $this->backupAll) {
            $res['BackupAll'] = $this->backupAll;
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
        if (isset($map['BackupAll'])) {
            $model->backupAll = $map['BackupAll'];
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
