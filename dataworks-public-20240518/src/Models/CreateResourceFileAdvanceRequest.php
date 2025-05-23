<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class CreateResourceFileAdvanceRequest extends Model
{
    /**
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
     * @var int
     */
    public $fileType;

    /**
     * @var string
     */
    public $originResourceName;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $registerToCalcEngine;

    /**
     * @var Stream
     */
    public $resourceFileObject;

    /**
     * @var string
     */
    public $storageURL;

    /**
     * @var bool
     */
    public $uploadMode;
    protected $_name = [
        'content' => 'Content',
        'fileDescription' => 'FileDescription',
        'fileFolderPath' => 'FileFolderPath',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'originResourceName' => 'OriginResourceName',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'registerToCalcEngine' => 'RegisterToCalcEngine',
        'resourceFileObject' => 'ResourceFile',
        'storageURL' => 'StorageURL',
        'uploadMode' => 'UploadMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->resourceFileObject) {
            $res['ResourceFile'] = $this->resourceFileObject;
        }

        if (null !== $this->storageURL) {
            $res['StorageURL'] = $this->storageURL;
        }

        if (null !== $this->uploadMode) {
            $res['UploadMode'] = $this->uploadMode;
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
            $model->resourceFileObject = $map['ResourceFile'];
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
