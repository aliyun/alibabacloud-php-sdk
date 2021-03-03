<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\lungNodule\series;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var string
     */
    public $lobe;

    /**
     * @var float
     */
    public $meanValue;

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
    public $diameter;

    /**
     * @var float
     */
    public $x;

    /**
     * @var float
     */
    public $y;

    /**
     * @var float
     */
    public $z;

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
    protected $_name = [
        'lobe'           => 'Lobe',
        'meanValue'      => 'MeanValue',
        'lung'           => 'Lung',
        'confidence'     => 'Confidence',
        'SOPInstanceUID' => 'SOPInstanceUID',
        'category'       => 'Category',
        'volume'         => 'Volume',
        'diameter'       => 'Diameter',
        'x'              => 'X',
        'y'              => 'Y',
        'z'              => 'Z',
        'imageX'         => 'ImageX',
        'imageY'         => 'ImageY',
        'imageZ'         => 'ImageZ',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lobe) {
            $res['Lobe'] = $this->lobe;
        }
        if (null !== $this->meanValue) {
            $res['MeanValue'] = $this->meanValue;
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }
        if (null !== $this->diameter) {
            $res['Diameter'] = $this->diameter;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->z) {
            $res['Z'] = $this->z;
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
        if (isset($map['Lobe'])) {
            $model->lobe = $map['Lobe'];
        }
        if (isset($map['MeanValue'])) {
            $model->meanValue = $map['MeanValue'];
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }
        if (isset($map['Diameter'])) {
            $model->diameter = $map['Diameter'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['Z'])) {
            $model->z = $map['Z'];
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

        return $model;
    }
}
