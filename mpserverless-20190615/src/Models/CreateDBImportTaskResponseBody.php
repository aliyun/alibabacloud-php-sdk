<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateDBImportTaskResponseBody extends Model
{
    /**
     * @example LTAIupaslTlU*****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @example 2020-07-20T05:32:03Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example mongo/import/0e16bb12-14af-4635-b24c-5ac1a9*****\/20200720130203_973820af-966d-42ec-9fab-17dfe4a******.csv
     *
     * @var string
     */
    public $fileKey;

    /**
     * @example https://mps-zjk-share.oss-cn-zhangjiakou.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @example eyJleHBpcmF0aW9uIjjoiMjAyMC0wNy0yMFQwNTozMjowMy40NDVaIiwiY29uZGl0aW9ucyI*****Y29udGVudC1sZW5ndoiMjAyMC==
     *
     * @var string
     */
    public $policy;

    /**
     * @example 692DCFEF-46DD-4EBB-B1DB-338E687DC260
     *
     * @var string
     */
    public $requestId;

    /**
     * @example *****luWDvbmhqwwy9pm/Mso++pk=
     *
     * @var string
     */
    public $signature;

    /**
     * @example 973820af-966d-42ec-9fab-17dfe4a*****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'expireTime'  => 'ExpireTime',
        'fileKey'     => 'FileKey',
        'host'        => 'Host',
        'policy'      => 'Policy',
        'requestId'   => 'RequestId',
        'signature'   => 'Signature',
        'taskId'      => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBImportTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
