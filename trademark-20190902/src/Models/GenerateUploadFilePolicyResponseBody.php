<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class GenerateUploadFilePolicyResponseBody extends Model
{
    /**
     * @description OSSAccessKeyId
     *
     * @example hObpgEXoca42qH3V
     *
     * @var string
     */
    public $accessId;

    /**
     * @example eyJleHBpcmF0aW9uIjoiMjAxOS0wOS0xNlQwODo1Njo0Ni4yMjFaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMjA0ODAwXSxbInN0YXJ0cy13aXRoIiwiJGtleSIsIjEzNDg2NTM3NTU0NzI4NTUvaWNvbiJdLFsiZXEiLCIkYnVja2V0IiwidHJhZGUtbWFyay11c2VyLXVwbG9hZCJdXX0=
     *
     * @var string
     */
    public $encodedPolicy;

    /**
     * @example 1568624206221
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example 123456789/icon
     *
     * @var string
     */
    public $fileDir;

    /**
     * @description host
     *
     * @example //trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/
     *
     * @var string
     */
    public $host;

    /**
     * @example 7E617C0D-C226-473D-A9C4-3252B7792FA1
     *
     * @var string
     */
    public $requestId;

    /**
     * @example yjIcnOapBfLe4kt0nIF272GprgE=
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId'      => 'AccessId',
        'encodedPolicy' => 'EncodedPolicy',
        'expireTime'    => 'ExpireTime',
        'fileDir'       => 'FileDir',
        'host'          => 'Host',
        'requestId'     => 'RequestId',
        'signature'     => 'Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GenerateUploadFilePolicyResponseBody
     */
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
