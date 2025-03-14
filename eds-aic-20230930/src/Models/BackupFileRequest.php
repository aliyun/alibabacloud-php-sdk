<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class BackupFileRequest extends Model
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
     * @description Whether all data is to be backed up.
     *
     * @example true
     *
     * @var bool
     */
    public $backupAll;

    /**
     * @description Backup file name.
     *
     * @example defaultBackupFile
     *
     * @var string
     */
    public $backupFileName;

    /**
     * @description The OSS path of the backup file.
     *
     * >  To upload a backup file to an OSS bucket, you must obtain the name of the bucket. When calling the describeBuckets operation to retrieve a bucket name, you must also call the ossObjectList operation to obtain the object key. Combine these to form the full path: oss://${bucketName}/${key}.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $backupFilePath;

    /**
     * @description The description of the backup file.
     *
     * @example This is a backup file description.
     *
     * @var string
     */
    public $description;

    /**
     * @description List of apps to be backed up.
     *
     * @var string[]
     */
    public $sourceAppList;

    /**
     * @description The paths to the source files.
     *
     * @var string[]
     */
    public $sourceFilePathList;

    /**
     * @description The endpoint of the OSS bucket to which you want to upload the backup file.
     *
     * > : When calling the DescribeBuckets operation to query buckets, retrieve the IntranetEndpoint value if the cloud phone and the OSS bucket are in the same region. If they are in different regions, retrieve the ExtranetEndpoint value instead.
     *
     * @example oss-cn-shanghai-internal.aliyuncs.com
     *
     * @var string
     */
    public $uploadEndpoint;

    /**
     * @description The type of the backup.
     *
     * Valid values:
     *
     *   OSS: uploads the backup file to an OSS bucket.
     *
     * @example OSS
     *
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'androidInstanceIdList' => 'AndroidInstanceIdList',
        'backupAll' => 'BackupAll',
        'backupFileName' => 'BackupFileName',
        'backupFilePath' => 'BackupFilePath',
        'description' => 'Description',
        'sourceAppList' => 'SourceAppList',
        'sourceFilePathList' => 'SourceFilePathList',
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
