<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class InitFaceVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $appQualityCheck;

    /**
     * @var string
     */
    public $authId;

    /**
     * @var string
     */
    public $birthday;

    /**
     * @var string
     */
    public $callbackToken;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $cameraSelection;

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
    public $certifyUrlStyle;

    /**
     * @var string
     */
    public $certifyUrlType;

    /**
     * @var string
     */
    public $crop;

    /**
     * @var string
     */
    public $encryptType;

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
    public $faceGuardOutput;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $metaInfo;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $mode;

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
    public $procedurePriority;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $rarelyCharacters;

    /**
     * @var string
     */
    public $readImg;

    /**
     * @var string
     */
    public $returnUrl;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $suitableType;

    /**
     * @var string
     */
    public $uiCustomUrl;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $validityDate;

    /**
     * @var string
     */
    public $videoEvidence;

    /**
     * @var string
     */
    public $voluntaryCustomizedContent;
    protected $_name = [
        'appQualityCheck' => 'AppQualityCheck',
        'authId' => 'AuthId',
        'birthday' => 'Birthday',
        'callbackToken' => 'CallbackToken',
        'callbackUrl' => 'CallbackUrl',
        'cameraSelection' => 'CameraSelection',
        'certName' => 'CertName',
        'certNo' => 'CertNo',
        'certType' => 'CertType',
        'certifyId' => 'CertifyId',
        'certifyUrlStyle' => 'CertifyUrlStyle',
        'certifyUrlType' => 'CertifyUrlType',
        'crop' => 'Crop',
        'encryptType' => 'EncryptType',
        'faceContrastPicture' => 'FaceContrastPicture',
        'faceContrastPictureUrl' => 'FaceContrastPictureUrl',
        'faceGuardOutput' => 'FaceGuardOutput',
        'ip' => 'Ip',
        'metaInfo' => 'MetaInfo',
        'mobile' => 'Mobile',
        'mode' => 'Mode',
        'model' => 'Model',
        'ossBucketName' => 'OssBucketName',
        'ossObjectName' => 'OssObjectName',
        'outerOrderNo' => 'OuterOrderNo',
        'procedurePriority' => 'ProcedurePriority',
        'productCode' => 'ProductCode',
        'rarelyCharacters' => 'RarelyCharacters',
        'readImg' => 'ReadImg',
        'returnUrl' => 'ReturnUrl',
        'sceneId' => 'SceneId',
        'suitableType' => 'SuitableType',
        'uiCustomUrl' => 'UiCustomUrl',
        'userId' => 'UserId',
        'validityDate' => 'ValidityDate',
        'videoEvidence' => 'VideoEvidence',
        'voluntaryCustomizedContent' => 'VoluntaryCustomizedContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appQualityCheck) {
            $res['AppQualityCheck'] = $this->appQualityCheck;
        }

        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }

        if (null !== $this->birthday) {
            $res['Birthday'] = $this->birthday;
        }

        if (null !== $this->callbackToken) {
            $res['CallbackToken'] = $this->callbackToken;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->cameraSelection) {
            $res['CameraSelection'] = $this->cameraSelection;
        }

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

        if (null !== $this->certifyUrlStyle) {
            $res['CertifyUrlStyle'] = $this->certifyUrlStyle;
        }

        if (null !== $this->certifyUrlType) {
            $res['CertifyUrlType'] = $this->certifyUrlType;
        }

        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }

        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }

        if (null !== $this->faceContrastPicture) {
            $res['FaceContrastPicture'] = $this->faceContrastPicture;
        }

        if (null !== $this->faceContrastPictureUrl) {
            $res['FaceContrastPictureUrl'] = $this->faceContrastPictureUrl;
        }

        if (null !== $this->faceGuardOutput) {
            $res['FaceGuardOutput'] = $this->faceGuardOutput;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->metaInfo) {
            $res['MetaInfo'] = $this->metaInfo;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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

        if (null !== $this->procedurePriority) {
            $res['ProcedurePriority'] = $this->procedurePriority;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->rarelyCharacters) {
            $res['RarelyCharacters'] = $this->rarelyCharacters;
        }

        if (null !== $this->readImg) {
            $res['ReadImg'] = $this->readImg;
        }

        if (null !== $this->returnUrl) {
            $res['ReturnUrl'] = $this->returnUrl;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->suitableType) {
            $res['SuitableType'] = $this->suitableType;
        }

        if (null !== $this->uiCustomUrl) {
            $res['UiCustomUrl'] = $this->uiCustomUrl;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->validityDate) {
            $res['ValidityDate'] = $this->validityDate;
        }

        if (null !== $this->videoEvidence) {
            $res['VideoEvidence'] = $this->videoEvidence;
        }

        if (null !== $this->voluntaryCustomizedContent) {
            $res['VoluntaryCustomizedContent'] = $this->voluntaryCustomizedContent;
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
        if (isset($map['AppQualityCheck'])) {
            $model->appQualityCheck = $map['AppQualityCheck'];
        }

        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }

        if (isset($map['Birthday'])) {
            $model->birthday = $map['Birthday'];
        }

        if (isset($map['CallbackToken'])) {
            $model->callbackToken = $map['CallbackToken'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['CameraSelection'])) {
            $model->cameraSelection = $map['CameraSelection'];
        }

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

        if (isset($map['CertifyUrlStyle'])) {
            $model->certifyUrlStyle = $map['CertifyUrlStyle'];
        }

        if (isset($map['CertifyUrlType'])) {
            $model->certifyUrlType = $map['CertifyUrlType'];
        }

        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }

        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }

        if (isset($map['FaceContrastPicture'])) {
            $model->faceContrastPicture = $map['FaceContrastPicture'];
        }

        if (isset($map['FaceContrastPictureUrl'])) {
            $model->faceContrastPictureUrl = $map['FaceContrastPictureUrl'];
        }

        if (isset($map['FaceGuardOutput'])) {
            $model->faceGuardOutput = $map['FaceGuardOutput'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['MetaInfo'])) {
            $model->metaInfo = $map['MetaInfo'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
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

        if (isset($map['ProcedurePriority'])) {
            $model->procedurePriority = $map['ProcedurePriority'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['RarelyCharacters'])) {
            $model->rarelyCharacters = $map['RarelyCharacters'];
        }

        if (isset($map['ReadImg'])) {
            $model->readImg = $map['ReadImg'];
        }

        if (isset($map['ReturnUrl'])) {
            $model->returnUrl = $map['ReturnUrl'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['SuitableType'])) {
            $model->suitableType = $map['SuitableType'];
        }

        if (isset($map['UiCustomUrl'])) {
            $model->uiCustomUrl = $map['UiCustomUrl'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['ValidityDate'])) {
            $model->validityDate = $map['ValidityDate'];
        }

        if (isset($map['VideoEvidence'])) {
            $model->videoEvidence = $map['VideoEvidence'];
        }

        if (isset($map['VoluntaryCustomizedContent'])) {
            $model->voluntaryCustomizedContent = $map['VoluntaryCustomizedContent'];
        }

        return $model;
    }
}
