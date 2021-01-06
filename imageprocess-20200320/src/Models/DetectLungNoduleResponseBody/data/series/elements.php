<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponseBody\data\series;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var float
     */
    public $z;

    /**
     * @var string
     */
    public $lobe;

    /**
     * @var float
     */
    public $meanValue;

    /**
     * @var float
     */
    public $imageZ;

    /**
     * @var string
     */
    public $lung;

    /**
     * @var float
     */
    public $confidence;

    /**
     * @var string
     */
    public $SOPInstanceUID;

    /**
     * @var float
     */
    public $imageX;

    /**
     * @var float
     */
    public $y;

    /**
     * @var string
     */
    public $category;

    /**
     * @var float
     */
    public $volume;

    /**
     * @var float
     */
    public $imageY;

    /**
     * @var float
     */
    public $diameter;

    /**
     * @var float
     */
    public $x;
    protected $_name = [
        'z'              => 'Z',
        'lobe'           => 'Lobe',
        'meanValue'      => 'MeanValue',
        'imageZ'         => 'ImageZ',
        'lung'           => 'Lung',
        'confidence'     => 'Confidence',
        'SOPInstanceUID' => 'SOPInstanceUID',
        'imageX'         => 'ImageX',
        'y'              => 'Y',
        'category'       => 'Category',
        'volume'         => 'Volume',
        'imageY'         => 'ImageY',
        'diameter'       => 'Diameter',
        'x'              => 'X',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->z) {
            $res['Z'] = $this->z;
        }
        if (null !== $this->lobe) {
            $res['Lobe'] = $this->lobe;
        }
        if (null !== $this->meanValue) {
            $res['MeanValue'] = $this->meanValue;
        }
        if (null !== $this->imageZ) {
            $res['ImageZ'] = $this->imageZ;
        }
        if (null !== $this->lung) {
            $res['Lung'] = $this->lung;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->SOPInstanceUID) {
            $res['SOPInstanceUID'] = $this->SOPInstanceUID;
        }
        if (null !== $this->imageX) {
            $res['ImageX'] = $this->imageX;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }
        if (null !== $this->imageY) {
            $res['ImageY'] = $this->imageY;
        }
        if (null !== $this->diameter) {
            $res['Diameter'] = $this->diameter;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
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
        if (isset($map['Z'])) {
            $model->z = $map['Z'];
        }
        if (isset($map['Lobe'])) {
            $model->lobe = $map['Lobe'];
        }
        if (isset($map['MeanValue'])) {
            $model->meanValue = $map['MeanValue'];
        }
        if (isset($map['ImageZ'])) {
            $model->imageZ = $map['ImageZ'];
        }
        if (isset($map['Lung'])) {
            $model->lung = $map['Lung'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['SOPInstanceUID'])) {
            $model->SOPInstanceUID = $map['SOPInstanceUID'];
        }
        if (isset($map['ImageX'])) {
            $model->imageX = $map['ImageX'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }
        if (isset($map['ImageY'])) {
            $model->imageY = $map['ImageY'];
        }
        if (isset($map['Diameter'])) {
            $model->diameter = $map['Diameter'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        return $model;
    }
}
