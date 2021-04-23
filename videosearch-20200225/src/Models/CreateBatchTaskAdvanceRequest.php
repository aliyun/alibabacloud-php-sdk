<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreateBatchTaskAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $fileUrlObject;

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
    public $roleArn;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $callbackUrl;
    protected $_name = [
        'fileUrlObject' => 'FileUrlObject',
        'batchTaskType' => 'BatchTaskType',
        'ossBucketName' => 'OssBucketName',
        'ossDataPath'   => 'OssDataPath',
        'ossMetaFile'   => 'OssMetaFile',
        'roleArn'       => 'RoleArn',
        'instanceId'    => 'InstanceId',
        'clientToken'   => 'ClientToken',
        'callbackUrl'   => 'CallbackUrl',
    ];

    public function validate()
    {
        Model::validateRequired('fileUrlObject', $this->fileUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrlObject) {
            $res['FileUrlObject'] = $this->fileUrlObject;
        }
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
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBatchTaskAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrlObject'])) {
            $model->fileUrlObject = $map['FileUrlObject'];
        }
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
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        return $model;
    }
}
