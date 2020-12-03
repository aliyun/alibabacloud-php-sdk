<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponse\data\series;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var float
     */
    public $confidence;

    /**
     * @var float
     */
    public $diameter;

    /**
     * @var string
     */
    public $lobe;

    /**
     * @var string
     */
    public $lung;

    /**
     * @var float
     */
    public $x;

    /**
     * @var float
     */
    public $z;

    /**
     * @var float
     */
    public $y;

    /**
     * @var float
     */
    public $imageX;

    /**
     * @var float
     */
    public $imageY;

    /**
     * @var float
     */
    public $imageZ;

    /**
     * @var string
     */
    public $SOPInstanceUID;

    /**
     * @var float
     */
    public $volume;

    /**
     * @var float
     */
    public $meanValue;
    protected $_name = [
        'category'       => 'Category',
        'confidence'     => 'Confidence',
        'diameter'       => 'Diameter',
        'lobe'           => 'Lobe',
        'lung'           => 'Lung',
        'x'              => 'X',
        'z'              => 'Z',
        'y'              => 'Y',
        'imageX'         => 'ImageX',
        'imageY'         => 'ImageY',
        'imageZ'         => 'ImageZ',
        'SOPInstanceUID' => 'SOPInstanceUID',
        'volume'         => 'Volume',
        'meanValue'      => 'MeanValue',
    ];

    public function validate()
    {
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('confidence', $this->confidence, true);
        Model::validateRequired('diameter', $this->diameter, true);
        Model::validateRequired('lobe', $this->lobe, true);
        Model::validateRequired('lung', $this->lung, true);
        Model::validateRequired('x', $this->x, true);
        Model::validateRequired('z', $this->z, true);
        Model::validateRequired('y', $this->y, true);
        Model::validateRequired('imageX', $this->imageX, true);
        Model::validateRequired('imageY', $this->imageY, true);
        Model::validateRequired('imageZ', $this->imageZ, true);
        Model::validateRequired('SOPInstanceUID', $this->SOPInstanceUID, true);
        Model::validateRequired('volume', $this->volume, true);
        Model::validateRequired('meanValue', $this->meanValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->diameter) {
            $res['Diameter'] = $this->diameter;
        }
        if (null !== $this->lobe) {
            $res['Lobe'] = $this->lobe;
        }
        if (null !== $this->lung) {
            $res['Lung'] = $this->lung;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->z) {
            $res['Z'] = $this->z;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->imageX) {
            $res['ImageX'] = $this->imageX;
        }
        if (null !== $this->imageY) {
            $res['ImageY'] = $this->imageY;
        }
        if (null !== $this->imageZ) {
            $res['ImageZ'] = $this->imageZ;
        }
        if (null !== $this->SOPInstanceUID) {
            $res['SOPInstanceUID'] = $this->SOPInstanceUID;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }
        if (null !== $this->meanValue) {
            $res['MeanValue'] = $this->meanValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Diameter'])) {
            $model->diameter = $map['Diameter'];
        }
        if (isset($map['Lobe'])) {
            $model->lobe = $map['Lobe'];
        }
        if (isset($map['Lung'])) {
            $model->lung = $map['Lung'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Z'])) {
            $model->z = $map['Z'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['ImageX'])) {
            $model->imageX = $map['ImageX'];
        }
        if (isset($map['ImageY'])) {
            $model->imageY = $map['ImageY'];
        }
        if (isset($map['ImageZ'])) {
            $model->imageZ = $map['ImageZ'];
        }
        if (isset($map['SOPInstanceUID'])) {
            $model->SOPInstanceUID = $map['SOPInstanceUID'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }
        if (isset($map['MeanValue'])) {
            $model->meanValue = $map['MeanValue'];
        }

        return $model;
    }
}
