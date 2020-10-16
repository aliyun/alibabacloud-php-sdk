<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeFaceQualityResponse\data;

use AlibabaCloud\Tea\Model;

class attributes extends Model
{
    /**
     * @var int
     */
    public $leftTopX;

    /**
     * @var int
     */
    public $leftTopY;

    /**
     * @var int
     */
    public $rightBottomX;

    /**
     * @var int
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $targetImageStoragePath;

    /**
     * @var string
     */
    public $faceStyle;

    /**
     * @var string
     */
    public $faceQuality;

    /**
     * @var string
     */
    public $faceScore;
    protected $_name = [
        'leftTopX'               => 'LeftTopX',
        'leftTopY'               => 'LeftTopY',
        'rightBottomX'           => 'RightBottomX',
        'rightBottomY'           => 'RightBottomY',
        'targetImageStoragePath' => 'TargetImageStoragePath',
        'faceStyle'              => 'FaceStyle',
        'faceQuality'            => 'FaceQuality',
        'faceScore'              => 'FaceScore',
    ];

    public function validate()
    {
        Model::validateRequired('leftTopX', $this->leftTopX, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
        Model::validateRequired('targetImageStoragePath', $this->targetImageStoragePath, true);
        Model::validateRequired('faceStyle', $this->faceStyle, true);
        Model::validateRequired('faceQuality', $this->faceQuality, true);
        Model::validateRequired('faceScore', $this->faceScore, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->targetImageStoragePath) {
            $res['TargetImageStoragePath'] = $this->targetImageStoragePath;
        }
        if (null !== $this->faceStyle) {
            $res['FaceStyle'] = $this->faceStyle;
        }
        if (null !== $this->faceQuality) {
            $res['FaceQuality'] = $this->faceQuality;
        }
        if (null !== $this->faceScore) {
            $res['FaceScore'] = $this->faceScore;
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
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['TargetImageStoragePath'])) {
            $model->targetImageStoragePath = $map['TargetImageStoragePath'];
        }
        if (isset($map['FaceStyle'])) {
            $model->faceStyle = $map['FaceStyle'];
        }
        if (isset($map['FaceQuality'])) {
            $model->faceQuality = $map['FaceQuality'];
        }
        if (isset($map['FaceScore'])) {
            $model->faceScore = $map['FaceScore'];
        }

        return $model;
    }
}
