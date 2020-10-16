<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\RecognizeImageResponse\data;

use AlibabaCloud\Tea\Model;

class faceList extends Model
{
    /**
     * @var string
     */
    public $feature;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $imageBaseSixFour;

    /**
     * @var string
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $localFeature;

    /**
     * @var string
     */
    public $respiratorColor;

    /**
     * @var string
     */
    public $rightBottomX;

    /**
     * @var string
     */
    public $rightBottomY;
    protected $_name = [
        'feature'          => 'Feature',
        'fileName'         => 'FileName',
        'imageBaseSixFour' => 'ImageBaseSixFour',
        'leftTopX'         => 'LeftTopX',
        'leftTopY'         => 'LeftTopY',
        'localFeature'     => 'LocalFeature',
        'respiratorColor'  => 'RespiratorColor',
        'rightBottomX'     => 'RightBottomX',
        'rightBottomY'     => 'RightBottomY',
    ];

    public function validate()
    {
        Model::validateRequired('feature', $this->feature, true);
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('imageBaseSixFour', $this->imageBaseSixFour, true);
        Model::validateRequired('leftTopX', $this->leftTopX, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
        Model::validateRequired('localFeature', $this->localFeature, true);
        Model::validateRequired('respiratorColor', $this->respiratorColor, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->imageBaseSixFour) {
            $res['ImageBaseSixFour'] = $this->imageBaseSixFour;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->localFeature) {
            $res['LocalFeature'] = $this->localFeature;
        }
        if (null !== $this->respiratorColor) {
            $res['RespiratorColor'] = $this->respiratorColor;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
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
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['ImageBaseSixFour'])) {
            $model->imageBaseSixFour = $map['ImageBaseSixFour'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['LocalFeature'])) {
            $model->localFeature = $map['LocalFeature'];
        }
        if (isset($map['RespiratorColor'])) {
            $model->respiratorColor = $map['RespiratorColor'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }

        return $model;
    }
}
