<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeFaceQualityResponseBody\data;

use AlibabaCloud\Tea\Model;

class attributes extends Model
{
    /**
     * @var string
     */
    public $faceScore;

    /**
     * @var int
     */
    public $rightBottomY;

    /**
     * @var int
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $faceStyle;

    /**
     * @var string
     */
    public $faceQuality;

    /**
     * @var int
     */
    public $leftTopX;

    /**
     * @var int
     */
    public $rightBottomX;

    /**
     * @var string
     */
    public $targetImageStoragePath;
    protected $_name = [
        'faceScore'              => 'FaceScore',
        'rightBottomY'           => 'RightBottomY',
        'leftTopY'               => 'LeftTopY',
        'faceStyle'              => 'FaceStyle',
        'faceQuality'            => 'FaceQuality',
        'leftTopX'               => 'LeftTopX',
        'rightBottomX'           => 'RightBottomX',
        'targetImageStoragePath' => 'TargetImageStoragePath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceScore) {
            $res['FaceScore'] = $this->faceScore;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->faceStyle) {
            $res['FaceStyle'] = $this->faceStyle;
        }
        if (null !== $this->faceQuality) {
            $res['FaceQuality'] = $this->faceQuality;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->targetImageStoragePath) {
            $res['TargetImageStoragePath'] = $this->targetImageStoragePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceScore'])) {
            $model->faceScore = $map['FaceScore'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['FaceStyle'])) {
            $model->faceStyle = $map['FaceStyle'];
        }
        if (isset($map['FaceQuality'])) {
            $model->faceQuality = $map['FaceQuality'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['TargetImageStoragePath'])) {
            $model->targetImageStoragePath = $map['TargetImageStoragePath'];
        }

        return $model;
    }
}
