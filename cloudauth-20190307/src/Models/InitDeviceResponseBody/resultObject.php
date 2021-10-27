<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $extParams;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileNamePrefix;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $ossEndPoint;

    /**
     * @var string
     */
    public $presignedUrl;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $retCode;

    /**
     * @var string
     */
    public $retCodeSub;

    /**
     * @var string
     */
    public $retMessageSub;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessKeyId'     => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'bucketName'      => 'BucketName',
        'certifyId'       => 'CertifyId',
        'extParams'       => 'ExtParams',
        'fileName'        => 'FileName',
        'fileNamePrefix'  => 'FileNamePrefix',
        'message'         => 'Message',
        'ossEndPoint'     => 'OssEndPoint',
        'presignedUrl'    => 'PresignedUrl',
        'protocol'        => 'Protocol',
        'retCode'         => 'RetCode',
        'retCodeSub'      => 'RetCodeSub',
        'retMessageSub'   => 'RetMessageSub',
        'securityToken'   => 'SecurityToken',
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
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->extParams) {
            $res['ExtParams'] = $this->extParams;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileNamePrefix) {
            $res['FileNamePrefix'] = $this->fileNamePrefix;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->ossEndPoint) {
            $res['OssEndPoint'] = $this->ossEndPoint;
        }
        if (null !== $this->presignedUrl) {
            $res['PresignedUrl'] = $this->presignedUrl;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }
        if (null !== $this->retCodeSub) {
            $res['RetCodeSub'] = $this->retCodeSub;
        }
        if (null !== $this->retMessageSub) {
            $res['RetMessageSub'] = $this->retMessageSub;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['ExtParams'])) {
            $model->extParams = $map['ExtParams'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileNamePrefix'])) {
            $model->fileNamePrefix = $map['FileNamePrefix'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OssEndPoint'])) {
            $model->ossEndPoint = $map['OssEndPoint'];
        }
        if (isset($map['PresignedUrl'])) {
            $model->presignedUrl = $map['PresignedUrl'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }
        if (isset($map['RetCodeSub'])) {
            $model->retCodeSub = $map['RetCodeSub'];
        }
        if (isset($map['RetMessageSub'])) {
            $model->retMessageSub = $map['RetMessageSub'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
