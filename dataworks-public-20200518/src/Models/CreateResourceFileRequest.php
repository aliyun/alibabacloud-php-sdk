<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceFileRequest extends Model
{
    /**
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fileDescription;

    /**
     * @var string
     */
    public $fileFolderPath;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @example 10
     *
     * @var int
     */
    public $fileType;

    /**
     * @example origin_file_name.sql
     *
     * @var string
     */
    public $originResourceName;

    /**
     * @example 1000000000001
     *
     * @var string
     */
    public $owner;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @example false
     *
     * @var bool
     */
    public $registerToCalcEngine;

    /**
     * @example http://bucketname1.oss-cn-shanghai.aliyuncs.com/example
     *
     * @var string
     */
    public $resourceFile;

    /**
     * @example oss://oss-cn-shanghai.aliyuncs.com/emr-test
     *
     * @var string
     */
    public $storageURL;

    /**
     * @example false
     *
     * @var bool
     */
    public $uploadMode;
    protected $_name = [
        'content'              => 'Content',
        'fileDescription'      => 'FileDescription',
        'fileFolderPath'       => 'FileFolderPath',
        'fileName'             => 'FileName',
        'fileType'             => 'FileType',
        'originResourceName'   => 'OriginResourceName',
        'owner'                => 'Owner',
        'projectId'            => 'ProjectId',
        'registerToCalcEngine' => 'RegisterToCalcEngine',
        'resourceFile'         => 'ResourceFile',
        'storageURL'           => 'StorageURL',
        'uploadMode'           => 'UploadMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->fileDescription) {
            $res['FileDescription'] = $this->fileDescription;
        }
        if (null !== $this->fileFolderPath) {
            $res['FileFolderPath'] = $this->fileFolderPath;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->originResourceName) {
            $res['OriginResourceName'] = $this->originResourceName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->registerToCalcEngine) {
            $res['RegisterToCalcEngine'] = $this->registerToCalcEngine;
        }
        if (null !== $this->resourceFile) {
            $res['ResourceFile'] = $this->resourceFile;
        }
        if (null !== $this->storageURL) {
            $res['StorageURL'] = $this->storageURL;
        }
        if (null !== $this->uploadMode) {
            $res['UploadMode'] = $this->uploadMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FileDescription'])) {
            $model->fileDescription = $map['FileDescription'];
        }
        if (isset($map['FileFolderPath'])) {
            $model->fileFolderPath = $map['FileFolderPath'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['OriginResourceName'])) {
            $model->originResourceName = $map['OriginResourceName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegisterToCalcEngine'])) {
            $model->registerToCalcEngine = $map['RegisterToCalcEngine'];
        }
        if (isset($map['ResourceFile'])) {
            $model->resourceFile = $map['ResourceFile'];
        }
        if (isset($map['StorageURL'])) {
            $model->storageURL = $map['StorageURL'];
        }
        if (isset($map['UploadMode'])) {
            $model->uploadMode = $map['UploadMode'];
        }

        return $model;
    }
}
