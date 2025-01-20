<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class AIGCFaceVerifyRequest extends Model
{
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
