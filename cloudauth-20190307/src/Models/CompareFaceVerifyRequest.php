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
     * @example e0c34a77f5ac40a5aa5e6ed20c353888
     *
     * @var string
     */
    public $outerOrderNo;

    /**
     * @example PV_FC
     *
     * @var string
     */
    public $productCode;

    /**
     * @example 1000000006
     *
     * @var int
     */
    public $sceneId;

    /**
     * @example 0bfa7c493f850e5178b9f8613634c9xx
     *
     * @var string
     */
    public $sourceCertifyId;

    /**
     * @example /9j/4AAQSkZJRgABAQAASxxxxxxx
     *
     * @var string
     */
    public $sourceFaceContrastPicture;

    /**
     * @example https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg
     *
     * @var string
     */
    public $sourceFaceContrastPictureUrl;

    /**
     * @example cn-shanghai-aliyun-cloudauth-xxxxx
     *
     * @var string
     */
    public $sourceOssBucketName;

    /**
     * @example verify/xxxxx/xxxxxx.jpeg
     *
     * @var string
     */
    public $sourceOssObjectName;

    /**
     * @example 0bfa7c493f850e5178b9f8613634c9xx
     *
     * @var string
     */
    public $targetCertifyId;

    /**
     * @example /9j/4AAQSkZJRgABAQAASxxxxxxx
     *
     * @var string
     */
    public $targetFaceContrastPicture;

    /**
     * @example https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg
     *
     * @var string
     */
    public $targetFaceContrastPictureUrl;

    /**
     * @example cn-shanghai-aliyun-cloudauth-xxxxx
     *
     * @var string
     */
    public $targetOssBucketName;

    /**
     * @example verify/xxxxx/xxxxxx.jpeg
     *
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
