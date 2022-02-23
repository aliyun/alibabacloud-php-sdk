<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CompareFaceVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $crop;

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
    public $sourceCertifyId;

    /**
     * @var string
     */
    public $sourceFaceContrastPicture;

    /**
     * @var string
     */
    public $sourceFaceContrastPictureUrl;

    /**
     * @var string
     */
    public $sourceOssBucketName;

    /**
     * @var string
     */
    public $sourceOssObjectName;

    /**
     * @var string
     */
    public $targetCertifyId;

    /**
     * @var string
     */
    public $targetFaceContrastPicture;

    /**
     * @var string
     */
    public $targetFaceContrastPictureUrl;

    /**
     * @var string
     */
    public $targetOssBucketName;

    /**
     * @var string
     */
    public $targetOssObjectName;
    protected $_name = [
        'crop'                         => 'Crop',
        'outerOrderNo'                 => 'OuterOrderNo',
        'productCode'                  => 'ProductCode',
        'sceneId'                      => 'SceneId',
        'sourceCertifyId'              => 'SourceCertifyId',
        'sourceFaceContrastPicture'    => 'SourceFaceContrastPicture',
        'sourceFaceContrastPictureUrl' => 'SourceFaceContrastPictureUrl',
        'sourceOssBucketName'          => 'SourceOssBucketName',
        'sourceOssObjectName'          => 'SourceOssObjectName',
        'targetCertifyId'              => 'TargetCertifyId',
        'targetFaceContrastPicture'    => 'TargetFaceContrastPicture',
        'targetFaceContrastPictureUrl' => 'TargetFaceContrastPictureUrl',
        'targetOssBucketName'          => 'TargetOssBucketName',
        'targetOssObjectName'          => 'TargetOssObjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
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
        if (null !== $this->sourceCertifyId) {
            $res['SourceCertifyId'] = $this->sourceCertifyId;
        }
        if (null !== $this->sourceFaceContrastPicture) {
            $res['SourceFaceContrastPicture'] = $this->sourceFaceContrastPicture;
        }
        if (null !== $this->sourceFaceContrastPictureUrl) {
            $res['SourceFaceContrastPictureUrl'] = $this->sourceFaceContrastPictureUrl;
        }
        if (null !== $this->sourceOssBucketName) {
            $res['SourceOssBucketName'] = $this->sourceOssBucketName;
        }
        if (null !== $this->sourceOssObjectName) {
            $res['SourceOssObjectName'] = $this->sourceOssObjectName;
        }
        if (null !== $this->targetCertifyId) {
            $res['TargetCertifyId'] = $this->targetCertifyId;
        }
        if (null !== $this->targetFaceContrastPicture) {
            $res['TargetFaceContrastPicture'] = $this->targetFaceContrastPicture;
        }
        if (null !== $this->targetFaceContrastPictureUrl) {
            $res['TargetFaceContrastPictureUrl'] = $this->targetFaceContrastPictureUrl;
        }
        if (null !== $this->targetOssBucketName) {
            $res['TargetOssBucketName'] = $this->targetOssBucketName;
        }
        if (null !== $this->targetOssObjectName) {
            $res['TargetOssObjectName'] = $this->targetOssObjectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompareFaceVerifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
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
        if (isset($map['SourceCertifyId'])) {
            $model->sourceCertifyId = $map['SourceCertifyId'];
        }
        if (isset($map['SourceFaceContrastPicture'])) {
            $model->sourceFaceContrastPicture = $map['SourceFaceContrastPicture'];
        }
        if (isset($map['SourceFaceContrastPictureUrl'])) {
            $model->sourceFaceContrastPictureUrl = $map['SourceFaceContrastPictureUrl'];
        }
        if (isset($map['SourceOssBucketName'])) {
            $model->sourceOssBucketName = $map['SourceOssBucketName'];
        }
        if (isset($map['SourceOssObjectName'])) {
            $model->sourceOssObjectName = $map['SourceOssObjectName'];
        }
        if (isset($map['TargetCertifyId'])) {
            $model->targetCertifyId = $map['TargetCertifyId'];
        }
        if (isset($map['TargetFaceContrastPicture'])) {
            $model->targetFaceContrastPicture = $map['TargetFaceContrastPicture'];
        }
        if (isset($map['TargetFaceContrastPictureUrl'])) {
            $model->targetFaceContrastPictureUrl = $map['TargetFaceContrastPictureUrl'];
        }
        if (isset($map['TargetOssBucketName'])) {
            $model->targetOssBucketName = $map['TargetOssBucketName'];
        }
        if (isset($map['TargetOssObjectName'])) {
            $model->targetOssObjectName = $map['TargetOssObjectName'];
        }

        return $model;
    }
}
