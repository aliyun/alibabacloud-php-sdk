<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitDeviceResponse;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $extParams;

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
    public $message;

    /**
     * @var string
     */
    public $ossEndPoint;

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
    public $fileName;

    /**
     * @var string
     */
    public $presignedUrl;
    protected $_name = [
        'certifyId'       => 'CertifyId',
        'protocol'        => 'Protocol',
        'extParams'       => 'ExtParams',
        'retCode'         => 'RetCode',
        'retCodeSub'      => 'RetCodeSub',
        'retMessageSub'   => 'RetMessageSub',
        'message'         => 'Message',
        'ossEndPoint'     => 'OssEndPoint',
        'accessKeyId'     => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'securityToken'   => 'SecurityToken',
        'bucketName'      => 'BucketName',
        'fileNamePrefix'  => 'FileNamePrefix',
        'fileName'        => 'FileName',
        'presignedUrl'    => 'PresignedUrl',
    ];

    public function validate()
    {
        Model::validateRequired('certifyId', $this->certifyId, true);
        Model::validateRequired('protocol', $this->protocol, true);
        Model::validateRequired('extParams', $this->extParams, true);
        Model::validateRequired('retCode', $this->retCode, true);
        Model::validateRequired('retCodeSub', $this->retCodeSub, true);
        Model::validateRequired('retMessageSub', $this->retMessageSub, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('ossEndPoint', $this->ossEndPoint, true);
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('accessKeySecret', $this->accessKeySecret, true);
        Model::validateRequired('securityToken', $this->securityToken, true);
        Model::validateRequired('bucketName', $this->bucketName, true);
        Model::validateRequired('fileNamePrefix', $this->fileNamePrefix, true);
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('presignedUrl', $this->presignedUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->extParams) {
            $res['ExtParams'] = $this->extParams;
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->ossEndPoint) {
            $res['OssEndPoint'] = $this->ossEndPoint;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
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
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->presignedUrl) {
            $res['PresignedUrl'] = $this->presignedUrl;
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
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ExtParams'])) {
            $model->extParams = $map['ExtParams'];
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OssEndPoint'])) {
            $model->ossEndPoint = $map['OssEndPoint'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['PresignedUrl'])) {
            $model->presignedUrl = $map['PresignedUrl'];
        }

        return $model;
    }
}
