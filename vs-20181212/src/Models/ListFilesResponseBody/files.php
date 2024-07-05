<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListFilesResponseBody;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example f-1671accd4dafdag3er256cvgewt13f7141db2f7
     *
     * @var string
     */
    public $fileId;

    /**
     * @example myfile
     *
     * @var string
     */
    public $fileName;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example upload success
     *
     * @var string
     */
    public $statusDescription;

    /**
     * @example /data/tmp/test/xxx.tar
     *
     * @var string
     */
    public $targetPath;

    /**
     * @example 2024-03-28T14:15:08+08:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 2024-03-28T14:10:12+08:00
     *
     * @var string
     */
    public $uploadTime;
    protected $_name = [
        'description'       => 'Description',
        'fileId'            => 'FileId',
        'fileName'          => 'FileName',
        'status'            => 'Status',
        'statusDescription' => 'StatusDescription',
        'targetPath'        => 'TargetPath',
        'updateTime'        => 'UpdateTime',
        'uploadTime'        => 'UploadTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDescription) {
            $res['StatusDescription'] = $this->statusDescription;
        }
        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDescription'])) {
            $model->statusDescription = $map['StatusDescription'];
        }
        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
