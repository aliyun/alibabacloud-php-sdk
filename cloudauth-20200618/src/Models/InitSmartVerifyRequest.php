<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models;

use AlibabaCloud\Tea\Model;

class InitSmartVerifyRequest extends Model
{
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
    public $facePictureBase64;

    /**
     * @var string
     */
    public $facePictureUrl;

    /**
     * @var string
     */
    public $idName;

    /**
     * @var string
     */
    public $idNo;

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
    public $ocr;

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
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'callbackToken'     => 'CallbackToken',
        'callbackUrl'       => 'CallbackUrl',
        'certName'          => 'CertName',
        'certNo'            => 'CertNo',
        'certType'          => 'CertType',
        'certifyId'         => 'CertifyId',
        'facePictureBase64' => 'FacePictureBase64',
        'facePictureUrl'    => 'FacePictureUrl',
        'idName'            => 'IdName',
        'idNo'              => 'IdNo',
        'ip'                => 'Ip',
        'metaInfo'          => 'MetaInfo',
        'mobile'            => 'Mobile',
        'mode'              => 'Mode',
        'ocr'               => 'Ocr',
        'ossBucketName'     => 'OssBucketName',
        'ossObjectName'     => 'OssObjectName',
        'outerOrderNo'      => 'OuterOrderNo',
        'sceneId'           => 'SceneId',
        'userId'            => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackToken) {
            $res['CallbackToken'] = $this->callbackToken;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
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
        if (null !== $this->facePictureBase64) {
            $res['FacePictureBase64'] = $this->facePictureBase64;
        }
        if (null !== $this->facePictureUrl) {
            $res['FacePictureUrl'] = $this->facePictureUrl;
        }
        if (null !== $this->idName) {
            $res['IdName'] = $this->idName;
        }
        if (null !== $this->idNo) {
            $res['IdNo'] = $this->idNo;
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
        if (null !== $this->ocr) {
            $res['Ocr'] = $this->ocr;
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
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitSmartVerifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackToken'])) {
            $model->callbackToken = $map['CallbackToken'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
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
        if (isset($map['FacePictureBase64'])) {
            $model->facePictureBase64 = $map['FacePictureBase64'];
        }
        if (isset($map['FacePictureUrl'])) {
            $model->facePictureUrl = $map['FacePictureUrl'];
        }
        if (isset($map['IdName'])) {
            $model->idName = $map['IdName'];
        }
        if (isset($map['IdNo'])) {
            $model->idNo = $map['IdNo'];
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
        if (isset($map['Ocr'])) {
            $model->ocr = $map['Ocr'];
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
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
