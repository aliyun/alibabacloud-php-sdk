<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\RecognizeImageResponseBody\data;

use AlibabaCloud\Tea\Model;

class bodyList extends Model
{
    /**
     * @var string
     */
    public $cropAlgorithmCode;

    /**
     * @var int
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var int
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $targetImageContent;

    /**
     * @var int
     */
    public $leftTopX;

    /**
     * @var int
     */
    public $rightBottomX;
    protected $_name = [
        'cropAlgorithmCode'  => 'CropAlgorithmCode',
        'rightBottomY'       => 'RightBottomY',
        'feature'            => 'Feature',
        'leftTopY'           => 'LeftTopY',
        'targetImageContent' => 'TargetImageContent',
        'leftTopX'           => 'LeftTopX',
        'rightBottomX'       => 'RightBottomX',
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
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->targetImageContent) {
            $res['TargetImageContent'] = $this->targetImageContent;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bodyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CropAlgorithmCode'])) {
            $model->cropAlgorithmCode = $map['CropAlgorithmCode'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['TargetImageContent'])) {
            $model->targetImageContent = $map['TargetImageContent'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }

        return $model;
    }
}
