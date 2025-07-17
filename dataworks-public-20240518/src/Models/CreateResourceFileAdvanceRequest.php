<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreateResourceFileAdvanceRequest extends Model
{
    /**
     * @description The code for the file. The code format varies based on the file type. To view the code format for a specific file type, go to Operation Center, open the directed acyclic graph (DAG) of a node of the file type, right-click the node, and then select View Code.
     *
     * @example SHOW TABLES;
     *
     * @var string
     */
    public $content;

    /**
     * @description The description of the file.
     *
     * @example This is a description
     *
     * @var string
     */
    public $fileDescription;

    /**
     * @description The path of the file.
     *
     * This parameter is required.
     *
     * @example Business_process/First_Business_Process/MaxCompute/Folder_1/Folder_2
     *
     * @var string
     */
    public $fileFolderPath;

    /**
     * @description The name of the file.
     *
     * This parameter is required.
     *
     * @example Filename
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The type of the code for the file.
     *
     * The code for files varies based on the file type. For more information, see [DataWorks nodes](https://help.aliyun.com/document_detail/600169.html). You can call the [ListFileType](https://help.aliyun.com/document_detail/212428.html) operation to query the type of the code for the file.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $fileType;

    /**
     * @description The name of the original resource file.
     *
     * This parameter is required.
     *
     * @example origin_file_name.sql
     *
     * @var string
     */
    public $originResourceName;

    /**
     * @description The ID of the Alibaba Cloud account used by the file owner. If this parameter is not configured, the ID of the Alibaba Cloud account of the user who calls the operation is used by default.
     *
     * @example 1000000000001
     *
     * @var string
     */
    public $owner;

    /**
     * @description The DataWorks workspace ID. You can log on to the DataWorks console and go to the Workspace page to query the ID. You must configure this parameter to specify the DataWorks workspace to which the operation is applied.
     *
     * This parameter is required.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description Specifies whether to upload the resource file to a desired compute engine.
     *
     * This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $registerToCalcEngine;

    /**
     * @description The URL of the Object Storage Service (OSS) bucket to which you upload the file. The URL is provided by the POP platform.
     *
     * @example http://bucketname1.oss-cn-shanghai.aliyuncs.com/example
     *
     * @var Stream
     */
    public $resourceFileObject;

    /**
     * @description The storage path of the resource file in a desired compute engine. This parameter takes effect only for E-MapReduce (EMR) and Cloudera\\"s Distribution including Apache Hadoop (CDH) compute engines. In an EMR compute engine, this parameter is configured in the [osshdfs]://path/to/object format. In a CDH compute engine, this parameter is set to /user/admin/lib by default.
     *
     * @example oss://oss-cn-shanghai.aliyuncs.com/emr-test
     *
     * @var string
     */
    public $storageURL;

    /**
     * @description The upload mode of MaxCompute file resources. This parameter takes effect only for MaxCompute file resources. Valid values:
     *
     *   true: indicates the resource upload and download mode.
     *   false: indicates the online editing mode.
     *
     * @example false
     *
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

    public function validate() {}

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

    /**
     * @param array $map
     *
     * @return CreateResourceFileAdvanceRequest
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
