<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreateTempFileUploadUrlResponseBody extends Model
{
    /**
     * @description The name of the OSS bucket to which the file is uploaded.
     *
     * @example hbr-temp-bucket
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The HTTP status code. The status code 200 indicates that the call is successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The endpoint that is used to upload the file to OSS.
     *
     * @example oss-cn-shenzhen.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The expiration time of the signature that is used to upload the file to OSS. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1654326678
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The message that is returned. If the call is successful, "successful" is returned. If the call fails, an error message is returned.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The AccessKey ID that is used to upload the file to OSS.
     *
     * @example LTAI****Up
     *
     * @var string
     */
    public $ossAccessKeyId;

    /**
     * @description The policy that is used to upload the file to OSS.
     *
     * @example eyJleH****V19
     *
     * @var string
     */
    public $policy;

    /**
     * @description The ID of the request.
     *
     * @example F4EEB401-DD21-588D-AE3B-1E835C7655E1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The signature that is used to upload the file to OSS.
     *
     * @example RmhI****0A=
     *
     * @var string
     */
    public $signature;

    /**
     * @description Indicates whether the call is successful. Valid values:
     *
     *   true: The call is successful.
     *   false: The call fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The key that is used to upload the file to OSS.
     *
     * @example temp/1440155109798732/upload/2022-07-29/49bed34c-b430-4e7e-89b1-4be2b734f95c/iaclone.diff
     *
     * @var string
     */
    public $tempFileKey;
    protected $_name = [
        'bucketName'     => 'BucketName',
        'code'           => 'Code',
        'endpoint'       => 'Endpoint',
        'expireTime'     => 'ExpireTime',
        'message'        => 'Message',
        'ossAccessKeyId' => 'OssAccessKeyId',
        'policy'         => 'Policy',
        'requestId'      => 'RequestId',
        'signature'      => 'Signature',
        'success'        => 'Success',
        'tempFileKey'    => 'TempFileKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->ossAccessKeyId) {
            $res['OssAccessKeyId'] = $this->ossAccessKeyId;
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tempFileKey) {
            $res['TempFileKey'] = $this->tempFileKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTempFileUploadUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OssAccessKeyId'])) {
            $model->ossAccessKeyId = $map['OssAccessKeyId'];
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TempFileKey'])) {
            $model->tempFileKey = $map['TempFileKey'];
        }

        return $model;
    }
}
