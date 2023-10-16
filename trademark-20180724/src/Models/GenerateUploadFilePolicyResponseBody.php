<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class GenerateUploadFilePolicyResponseBody extends Model
{
    /**
     * @description accessId
     *
     * @example hObpgEXoca42qH3V
     *
     * @var string
     */
    public $accessId;

    /**
     * @description osspolicy
     *
     * @example eyJleHBpcmF0aW9uIjoiMjAxOC0xMi0yNVQwODozNDo0MC41ODVaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMjA0ODAwXSxbInN0YXJ0cy13aXRoIiwiJGtleSIsIjEyMTk1NDExNjEyMTMwNTcvaWNvbiJdXX0=
     *
     * @var string
     */
    public $encodedPolicy;

    /**
     * @example 1545726880585
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example 1219541161213057/icon
     *
     * @var string
     */
    public $fileDir;

    /**
     * @example //trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/
     *
     * @var string
     */
    public $host;

    /**
     * @example A891194E-BEB7-45EA-9A02-886B94479783
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ozjILaFe+DSgUPX2OOplFHYBJqk=
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
