<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class ContrastFaceVerifyAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certNo;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $crop;

    /**
     * @var string
     */
    public $deviceToken;

    /**
     * @var string
     */
    public $encryptType;

    /**
     * @var Stream
     */
    public $faceContrastFileObject;

    /**
     * @var string
     */
    public $faceContrastPicture;

    /**
     * @var string
     */
    public $faceContrastPictureUrl;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossObjectName;

    /**
     * @var string
     */
    public $outerOrderNo;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'certName' => 'CertName',
        'certNo' => 'CertNo',
        'certType' => 'CertType',
        'certifyId' => 'CertifyId',
        'crop' => 'Crop',
        'deviceToken' => 'DeviceToken',
        'encryptType' => 'EncryptType',
        'faceContrastFileObject' => 'FaceContrastFile',
        'faceContrastPicture' => 'FaceContrastPicture',
        'faceContrastPictureUrl' => 'FaceContrastPictureUrl',
        'ip' => 'Ip',
        'mobile' => 'Mobile',
        'model' => 'Model',
        'ossBucketName' => 'OssBucketName',
        'ossObjectName' => 'OssObjectName',
        'outerOrderNo' => 'OuterOrderNo',
        'productCode' => 'ProductCode',
        'sceneId' => 'SceneId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->certNo) {
            $res['CertNo'] = $this->certNo;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }

        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }

        if (null !== $this->deviceToken) {
            $res['DeviceToken'] = $this->deviceToken;
        }

        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }

        if (null !== $this->faceContrastFileObject) {
            $res['FaceContrastFile'] = $this->faceContrastFileObject;
        }

        if (null !== $this->faceContrastPicture) {
            $res['FaceContrastPicture'] = $this->faceContrastPicture;
        }

        if (null !== $this->faceContrastPictureUrl) {
            $res['FaceContrastPictureUrl'] = $this->faceContrastPictureUrl;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->ossObjectName) {
            $res['OssObjectName'] = $this->ossObjectName;
        }

        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['CertNo'])) {
            $model->certNo = $map['CertNo'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }

        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }

        if (isset($map['DeviceToken'])) {
            $model->deviceToken = $map['DeviceToken'];
        }

        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }

        if (isset($map['FaceContrastFile'])) {
            $model->faceContrastFileObject = $map['FaceContrastFile'];
        }

        if (isset($map['FaceContrastPicture'])) {
            $model->faceContrastPicture = $map['FaceContrastPicture'];
        }

        if (isset($map['FaceContrastPictureUrl'])) {
            $model->faceContrastPictureUrl = $map['FaceContrastPictureUrl'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['OssObjectName'])) {
            $model->ossObjectName = $map['OssObjectName'];
        }

        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
