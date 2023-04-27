<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponseBody\data\series;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $category;

    /**
     * @example 0.7012705768508907
     *
     * @var float
     */
    public $confidence;

    /**
     * @example 9.730626493692398
     *
     * @var float
     */
    public $diameter;

    /**
     * @example 308.9676976455463
     *
     * @var float
     */
    public $imageX;

    /**
     * @example 198.3552282631497
     *
     * @var float
     */
    public $imageY;

    /**
     * @example 20.434030793471255
     *
     * @var float
     */
    public $imageZ;

    /**
     * @example up
     *
     * @var string
     */
    public $lobe;

    /**
     * @example left
     *
     * @var string
     */
    public $lung;

    /**
     * @var float[]
     */
    public $majorAxis;

    /**
     * @example 261.37589112119247
     *
     * @var float
     */
    public $meanValue;

    /**
     * @var float[]
     */
    public $minorAxis;

    /**
     * @description 结节最大径位置所在帧的ID标识。
     *
     * @example 1.3.6.1.4.1.14519.5.2.1.6279.6001.468208655866166788627471660948
     *
     * @var string
     */
    public $recistSOPInstanceUID;

    /**
     * @description 结节为恶性的置信度。取值范围0~1。
     *
     * @example 0.173
     *
     * @var float
     */
    public $risk;

    /**
     * @example 1.3.6.1.4.1.14519.5.2.1.6279.6001.261151233960269013402330853013
     *
     * @var string
     */
    public $SOPInstanceUID;

    /**
     * @example 10959.220491175074
     *
     * @var float
     */
    public $volume;

    /**
     * @example 51.24291240631416
     *
     * @var float
     */
    public $x;

    /**
     * @example -32.23147700784307
     *
     * @var float
     */
    public $y;

    /**
     * @example -46.81608170781766
     *
     * @var float
     */
    public $z;
    protected $_name = [
        'category'             => 'Category',
        'confidence'           => 'Confidence',
        'diameter'             => 'Diameter',
        'imageX'               => 'ImageX',
        'imageY'               => 'ImageY',
        'imageZ'               => 'ImageZ',
        'lobe'                 => 'Lobe',
        'lung'                 => 'Lung',
        'majorAxis'            => 'MajorAxis',
        'meanValue'            => 'MeanValue',
        'minorAxis'            => 'MinorAxis',
        'recistSOPInstanceUID' => 'RecistSOPInstanceUID',
        'risk'                 => 'Risk',
        'SOPInstanceUID'       => 'SOPInstanceUID',
        'volume'               => 'Volume',
        'x'                    => 'X',
        'y'                    => 'Y',
        'z'                    => 'Z',
    ];

    public function validate()
    {
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
            $res['MajorAxis'] = $this->majorAxis;
        }
        if (null !== $this->meanValue) {
            $res['MeanValue'] = $this->meanValue;
        }
        if (null !== $this->minorAxis) {
            $res['MinorAxis'] = $this->minorAxis;
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
                $model->majorAxis = $map['MajorAxis'];
            }
        }
        if (isset($map['MeanValue'])) {
            $model->meanValue = $map['MeanValue'];
        }
        if (isset($map['MinorAxis'])) {
            if (!empty($map['MinorAxis'])) {
                $model->minorAxis = $map['MinorAxis'];
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
