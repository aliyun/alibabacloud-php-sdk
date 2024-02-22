<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class AIGCFaceVerifyRequest extends Model
{
    /**
     * @example /9j/4AAQSkZJRgABAQAASxxxxxxx
     *
     * @var string
     */
    public $faceContrastPicture;

    /**
     * @example https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg
     *
     * @var string
     */
    public $faceContrastPictureUrl;

    /**
     * @example cn-shanghai-aliyun-cloudauth-xxxxx
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @example verify/xxxxx/xxxxxx.jpeg
     *
     * @var string
     */
    public $ossObjectName;

    /**
     * @example e0c34a77f5ac40a5aa5e6ed20c353888
     *
     * @var string
     */
    public $outerOrderNo;

    /**
     * @example LR_FR_AIGC
     *
     * @var string
     */
    public $productCode;

    /**
     * @example 100000xxxx
     *
     * @var int
     */
    public $sceneId;
    protected $_name = [
        'faceContrastPicture'    => 'FaceContrastPicture',
        'faceContrastPictureUrl' => 'FaceContrastPictureUrl',
        'ossBucketName'          => 'OssBucketName',
        'ossObjectName'          => 'OssObjectName',
        'outerOrderNo'           => 'OuterOrderNo',
        'productCode'            => 'ProductCode',
        'sceneId'                => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceContrastPicture) {
            $res['FaceContrastPicture'] = $this->faceContrastPicture;
        }
        if (null !== $this->faceContrastPictureUrl) {
            $res['FaceContrastPictureUrl'] = $this->faceContrastPictureUrl;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIGCFaceVerifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceContrastPicture'])) {
            $model->faceContrastPicture = $map['FaceContrastPicture'];
        }
        if (isset($map['FaceContrastPictureUrl'])) {
            $model->faceContrastPictureUrl = $map['FaceContrastPictureUrl'];
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

        return $model;
    }
}
