<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Dara\Model;

class GenerateUploadFilePolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $encodedPolicy;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $fileDir;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId' => 'AccessId',
        'encodedPolicy' => 'EncodedPolicy',
        'expireTime' => 'ExpireTime',
        'fileDir' => 'FileDir',
        'fileUrl' => 'FileUrl',
        'host' => 'Host',
        'requestId' => 'RequestId',
        'signature' => 'Signature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }

        if (null !== $this->encodedPolicy) {
            $res['EncodedPolicy'] = $this->encodedPolicy;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->fileDir) {
            $res['FileDir'] = $this->fileDir;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
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
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }

        if (isset($map['EncodedPolicy'])) {
            $model->encodedPolicy = $map['EncodedPolicy'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['FileDir'])) {
            $model->fileDir = $map['FileDir'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
