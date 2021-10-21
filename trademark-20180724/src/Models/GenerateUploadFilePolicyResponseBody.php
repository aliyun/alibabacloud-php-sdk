<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class GenerateUploadFilePolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $encodedPolicy;

    /**
     * @var string
     */
    public $fileDir;

    /**
     * @var string
     */
    public $accessId;
    protected $_name = [
        'signature'     => 'Signature',
        'host'          => 'Host',
        'requestId'     => 'RequestId',
        'expireTime'    => 'ExpireTime',
        'encodedPolicy' => 'EncodedPolicy',
        'fileDir'       => 'FileDir',
        'accessId'      => 'AccessId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->encodedPolicy) {
            $res['EncodedPolicy'] = $this->encodedPolicy;
        }
        if (null !== $this->fileDir) {
            $res['FileDir'] = $this->fileDir;
        }
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateUploadFilePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['EncodedPolicy'])) {
            $model->encodedPolicy = $map['EncodedPolicy'];
        }
        if (isset($map['FileDir'])) {
            $model->fileDir = $map['FileDir'];
        }
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }

        return $model;
    }
}
