<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\RecognizeImageResponseBody\data;

use AlibabaCloud\Tea\Model;

class faceList extends Model
{
    /**
     * @var string
     */
    public $cropAlgorithmCode;

    /**
     * @var string
     */
    public $feature;

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
    public $targetImageContent;

    /**
     * @var float
     */
    public $faceQuality;

    /**
     * @var int
     */
    public $rightBottomX;

    /**
     * @var int
     */
    public $leftTopX;

    /**
     * @var float
     */
    public $faceKeyPointQuality;
    protected $_name = [
        'cropAlgorithmCode'   => 'CropAlgorithmCode',
        'feature'             => 'Feature',
        'rightBottomY'        => 'RightBottomY',
        'leftTopY'            => 'LeftTopY',
        'targetImageContent'  => 'TargetImageContent',
        'faceQuality'         => 'FaceQuality',
        'rightBottomX'        => 'RightBottomX',
        'leftTopX'            => 'LeftTopX',
        'faceKeyPointQuality' => 'FaceKeyPointQuality',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cropAlgorithmCode) {
            $res['CropAlgorithmCode'] = $this->cropAlgorithmCode;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->targetImageContent) {
            $res['TargetImageContent'] = $this->targetImageContent;
        }
        if (null !== $this->faceQuality) {
            $res['FaceQuality'] = $this->faceQuality;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->faceKeyPointQuality) {
            $res['FaceKeyPointQuality'] = $this->faceKeyPointQuality;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CropAlgorithmCode'])) {
            $model->cropAlgorithmCode = $map['CropAlgorithmCode'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['TargetImageContent'])) {
            $model->targetImageContent = $map['TargetImageContent'];
        }
        if (isset($map['FaceQuality'])) {
            $model->faceQuality = $map['FaceQuality'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['FaceKeyPointQuality'])) {
            $model->faceKeyPointQuality = $map['FaceKeyPointQuality'];
        }

        return $model;
    }
}
