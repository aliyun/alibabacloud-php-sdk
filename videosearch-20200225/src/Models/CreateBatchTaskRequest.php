<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class CreateBatchTaskRequest extends Model
{
    /**
     * @var int
     */
    public $batchTaskType;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossDataPath;

    /**
     * @var string
     */
    public $ossMetaFile;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'batchTaskType' => 'BatchTaskType',
        'ossBucketName' => 'OssBucketName',
        'ossDataPath'   => 'OssDataPath',
        'ossMetaFile'   => 'OssMetaFile',
        'fileUrl'       => 'FileUrl',
        'roleArn'       => 'RoleArn',
        'instanceId'    => 'InstanceId',
        'clientToken'   => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchTaskType) {
            $res['BatchTaskType'] = $this->batchTaskType;
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossDataPath) {
            $res['OssDataPath'] = $this->ossDataPath;
        }
        if (null !== $this->ossMetaFile) {
            $res['OssMetaFile'] = $this->ossMetaFile;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBatchTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchTaskType'])) {
            $model->batchTaskType = $map['BatchTaskType'];
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssDataPath'])) {
            $model->ossDataPath = $map['OssDataPath'];
        }
        if (isset($map['OssMetaFile'])) {
            $model->ossMetaFile = $map['OssMetaFile'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
