<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ContrastFaceVerifyAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $faceContrastFileObject;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $outerOrderNo;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $certType;

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
    public $faceContrastPicture;

    /**
     * @var string
     */
    public $deviceToken;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $faceContrastPictureUrl;

    /**
     * @var string
     */
    public $certifyId;

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
    public $model;
    protected $_name = [
        'faceContrastFileObject' => 'FaceContrastFileObject',
        'sceneId'                => 'SceneId',
        'outerOrderNo'           => 'OuterOrderNo',
        'productCode'            => 'ProductCode',
        'certType'               => 'CertType',
        'certName'               => 'CertName',
        'certNo'                 => 'CertNo',
        'faceContrastPicture'    => 'FaceContrastPicture',
        'deviceToken'            => 'DeviceToken',
        'mobile'                 => 'Mobile',
        'ip'                     => 'Ip',
        'userId'                 => 'UserId',
        'faceContrastPictureUrl' => 'FaceContrastPictureUrl',
        'certifyId'              => 'CertifyId',
        'ossBucketName'          => 'OssBucketName',
        'ossObjectName'          => 'OssObjectName',
        'model'                  => 'Model',
    ];

    public function validate()
    {
        Model::validateRequired('faceContrastFileObject', $this->faceContrastFileObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceContrastFileObject) {
            $res['FaceContrastFileObject'] = $this->faceContrastFileObject;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certNo) {
            $res['CertNo'] = $this->certNo;
        }
        if (null !== $this->faceContrastPicture) {
            $res['FaceContrastPicture'] = $this->faceContrastPicture;
        }
        if (null !== $this->deviceToken) {
            $res['DeviceToken'] = $this->deviceToken;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->faceContrastPictureUrl) {
            $res['FaceContrastPictureUrl'] = $this->faceContrastPictureUrl;
        }
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossObjectName) {
            $res['OssObjectName'] = $this->ossObjectName;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContrastFaceVerifyAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceContrastFileObject'])) {
            $model->faceContrastFileObject = $map['FaceContrastFileObject'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertNo'])) {
            $model->certNo = $map['CertNo'];
        }
        if (isset($map['FaceContrastPicture'])) {
            $model->faceContrastPicture = $map['FaceContrastPicture'];
        }
        if (isset($map['DeviceToken'])) {
            $model->deviceToken = $map['DeviceToken'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['FaceContrastPictureUrl'])) {
            $model->faceContrastPictureUrl = $map['FaceContrastPictureUrl'];
        }
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssObjectName'])) {
            $model->ossObjectName = $map['OssObjectName'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        return $model;
    }
}
