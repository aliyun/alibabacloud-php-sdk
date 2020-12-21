<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeImageResponseBody\data;

use AlibabaCloud\Tea\Model;

class faceList extends Model
{
    /**
     * @var float
     */
    public $quality;

    /**
     * @var string
     */
    public $respiratorColor;

    /**
     * @var float
     */
    public $keyPointQuality;

    /**
     * @var string
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var string
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $imageBaseSixFour;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $rightBottomX;

    /**
     * @var string
     */
    public $localFeature;

    /**
     * @var string
     */
    public $leftTopX;
    protected $_name = [
        'quality'          => 'Quality',
        'respiratorColor'  => 'RespiratorColor',
        'keyPointQuality'  => 'KeyPointQuality',
        'rightBottomY'     => 'RightBottomY',
        'feature'          => 'Feature',
        'leftTopY'         => 'LeftTopY',
        'imageBaseSixFour' => 'ImageBaseSixFour',
        'fileName'         => 'FileName',
        'rightBottomX'     => 'RightBottomX',
        'localFeature'     => 'LocalFeature',
        'leftTopX'         => 'LeftTopX',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }
        if (null !== $this->respiratorColor) {
            $res['RespiratorColor'] = $this->respiratorColor;
        }
        if (null !== $this->keyPointQuality) {
            $res['KeyPointQuality'] = $this->keyPointQuality;
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
        if (null !== $this->imageBaseSixFour) {
            $res['ImageBaseSixFour'] = $this->imageBaseSixFour;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->localFeature) {
            $res['LocalFeature'] = $this->localFeature;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
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
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }
        if (isset($map['RespiratorColor'])) {
            $model->respiratorColor = $map['RespiratorColor'];
        }
        if (isset($map['KeyPointQuality'])) {
            $model->keyPointQuality = $map['KeyPointQuality'];
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
        if (isset($map['ImageBaseSixFour'])) {
            $model->imageBaseSixFour = $map['ImageBaseSixFour'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['LocalFeature'])) {
            $model->localFeature = $map['LocalFeature'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }

        return $model;
    }
}
