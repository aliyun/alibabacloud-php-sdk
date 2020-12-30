<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $ossEndPoint;

    /**
     * @var string
     */
    public $retCodeSub;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $extParams;

    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $presignedUrl;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $fileNamePrefix;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $retMessageSub;

    /**
     * @var string
     */
    public $retCode;
    protected $_name = [
        'ossEndPoint'     => 'OssEndPoint',
        'retCodeSub'      => 'RetCodeSub',
        'protocol'        => 'Protocol',
        'message'         => 'Message',
        'extParams'       => 'ExtParams',
        'certifyId'       => 'CertifyId',
        'fileName'        => 'FileName',
        'accessKeyId'     => 'AccessKeyId',
        'presignedUrl'    => 'PresignedUrl',
        'securityToken'   => 'SecurityToken',
        'bucketName'      => 'BucketName',
        'fileNamePrefix'  => 'FileNamePrefix',
        'accessKeySecret' => 'AccessKeySecret',
        'retMessageSub'   => 'RetMessageSub',
        'retCode'         => 'RetCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossEndPoint) {
            $res['OssEndPoint'] = $this->ossEndPoint;
        }
        if (null !== $this->retCodeSub) {
            $res['RetCodeSub'] = $this->retCodeSub;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->extParams) {
            $res['ExtParams'] = $this->extParams;
        }
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->presignedUrl) {
            $res['PresignedUrl'] = $this->presignedUrl;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->fileNamePrefix) {
            $res['FileNamePrefix'] = $this->fileNamePrefix;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->retMessageSub) {
            $res['RetMessageSub'] = $this->retMessageSub;
        }
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssEndPoint'])) {
            $model->ossEndPoint = $map['OssEndPoint'];
        }
        if (isset($map['RetCodeSub'])) {
            $model->retCodeSub = $map['RetCodeSub'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ExtParams'])) {
            $model->extParams = $map['ExtParams'];
        }
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['PresignedUrl'])) {
            $model->presignedUrl = $map['PresignedUrl'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['FileNamePrefix'])) {
            $model->fileNamePrefix = $map['FileNamePrefix'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['RetMessageSub'])) {
            $model->retMessageSub = $map['RetMessageSub'];
        }
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }

        return $model;
    }
}
