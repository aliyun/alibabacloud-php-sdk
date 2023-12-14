<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreateBatchTaskAdvanceRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $batchTaskType;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @example C86D03D1-253E-6832-A4B1-195F945BCEEB
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example http://xxx.ab***dx.com/testMeta.json
     *
     * @var Stream
     */
    public $fileUrlObject;

    /**
     * @example vs-tyjjhgyu***xdfd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example testBucket
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @example testPath/testName
     *
     * @var string
     */
    public $ossDataPath;

    /**
     * @example testMeta.json
     *
     * @var string
     */
    public $ossMetaFile;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'batchTaskType' => 'BatchTaskType',
        'callbackUrl'   => 'CallbackUrl',
        'clientToken'   => 'ClientToken',
        'fileUrlObject' => 'FileUrl',
        'instanceId'    => 'InstanceId',
        'ossBucketName' => 'OssBucketName',
        'ossDataPath'   => 'OssDataPath',
        'ossMetaFile'   => 'OssMetaFile',
        'roleArn'       => 'RoleArn',
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
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->fileUrlObject) {
            $res['FileUrl'] = $this->fileUrlObject;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['BatchTaskType'])) {
            $model->batchTaskType = $map['BatchTaskType'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrlObject = $map['FileUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        return $model;
    }
}
