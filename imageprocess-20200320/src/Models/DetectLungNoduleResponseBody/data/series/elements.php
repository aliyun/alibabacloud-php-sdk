<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponseBody\data\series;

use AlibabaCloud\Dara\Model;

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
    public $lobe;

    /**
     * @var string
     */
    public $lung;

    /**
     * @var float[]
     */
    public $majorAxis;

    /**
     * @var float
     */
    public $meanValue;

    /**
     * @var float[]
     */
    public $minorAxis;

    /**
     * @var string
     */
    public $recistSOPInstanceUID;

    /**
     * @var float
     */
    public $risk;

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
    public $x;

    /**
     * @var float
     */
    public $y;

    /**
     * @var float
     */
    public $z;
    protected $_name = [
        'category' => 'Category',
        'confidence' => 'Confidence',
        'diameter' => 'Diameter',
        'imageX' => 'ImageX',
        'imageY' => 'ImageY',
        'imageZ' => 'ImageZ',
        'lobe' => 'Lobe',
        'lung' => 'Lung',
        'majorAxis' => 'MajorAxis',
        'meanValue' => 'MeanValue',
        'minorAxis' => 'MinorAxis',
        'recistSOPInstanceUID' => 'RecistSOPInstanceUID',
        'risk' => 'Risk',
        'SOPInstanceUID' => 'SOPInstanceUID',
        'volume' => 'Volume',
        'x' => 'X',
        'y' => 'Y',
        'z' => 'Z',
    ];

    public function validate()
    {
        if (\is_array($this->majorAxis)) {
            Model::validateArray($this->majorAxis);
        }
        if (\is_array($this->minorAxis)) {
            Model::validateArray($this->minorAxis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->imageX) {
            $res['ImageX'] = $this->imageX;
        }

        if (null !== $this->imageY) {
            $res['ImageY'] = $this->imageY;
        }

        if (null !== $this->imageZ) {
            $res['ImageZ'] = $this->imageZ;
        }

        if (null !== $this->lobe) {
            $res['Lobe'] = $this->lobe;
        }

        if (null !== $this->lung) {
            $res['Lung'] = $this->lung;
        }

        if (null !== $this->majorAxis) {
            if (\is_array($this->majorAxis)) {
                $res['MajorAxis'] = [];
                $n1 = 0;
                foreach ($this->majorAxis as $item1) {
                    $res['MajorAxis'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->meanValue) {
            $res['MeanValue'] = $this->meanValue;
        }

        if (null !== $this->minorAxis) {
            if (\is_array($this->minorAxis)) {
                $res['MinorAxis'] = [];
                $n1 = 0;
                foreach ($this->minorAxis as $item1) {
                    $res['MinorAxis'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->recistSOPInstanceUID) {
            $res['RecistSOPInstanceUID'] = $this->recistSOPInstanceUID;
        }

        if (null !== $this->risk) {
            $res['Risk'] = $this->risk;
        }

        if (null !== $this->SOPInstanceUID) {
            $res['SOPInstanceUID'] = $this->SOPInstanceUID;
        }

        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ImageX'])) {
            $model->imageX = $map['ImageX'];
        }

        if (isset($map['ImageY'])) {
            $model->imageY = $map['ImageY'];
        }

        if (isset($map['ImageZ'])) {
            $model->imageZ = $map['ImageZ'];
        }

        if (isset($map['Lobe'])) {
            $model->lobe = $map['Lobe'];
        }

        if (isset($map['Lung'])) {
            $model->lung = $map['Lung'];
        }

        if (isset($map['MajorAxis'])) {
            if (!empty($map['MajorAxis'])) {
                $model->majorAxis = [];
                $n1 = 0;
                foreach ($map['MajorAxis'] as $item1) {
                    $model->majorAxis[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MeanValue'])) {
            $model->meanValue = $map['MeanValue'];
        }

        if (isset($map['MinorAxis'])) {
            if (!empty($map['MinorAxis'])) {
                $model->minorAxis = [];
                $n1 = 0;
                foreach ($map['MinorAxis'] as $item1) {
                    $model->minorAxis[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RecistSOPInstanceUID'])) {
            $model->recistSOPInstanceUID = $map['RecistSOPInstanceUID'];
        }

        if (isset($map['Risk'])) {
            $model->risk = $map['Risk'];
        }

        if (isset($map['SOPInstanceUID'])) {
            $model->SOPInstanceUID = $map['SOPInstanceUID'];
        }

        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
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

        return $model;
    }
}
