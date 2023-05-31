<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLiverSteatosisResponseBody\data;

use AlibabaCloud\Tea\Model;

class detections extends Model
{
    /**
     * @example 62.07644147383561
     *
     * @var float
     */
    public $liverHU;

    /**
     * @example 63.50222396850586
     *
     * @var float
     */
    public $liverROI1;

    /**
     * @example 62.23713684082031
     *
     * @var float
     */
    public $liverROI2;

    /**
     * @example 59.78181838989258
     *
     * @var float
     */
    public $liverROI3;

    /**
     * @example 12.0
     *
     * @var float
     */
    public $liverSlice;

    /**
     * @example 8.206502275265478
     *
     * @var float
     */
    public $liverSpleenDifference;

    /**
     * @example 1.15233917834983
     *
     * @var float
     */
    public $liverSpleenRatio;

    /**
     * @example 1059.4175610625439
     *
     * @var float
     */
    public $liverVolume;

    /**
     * @example Mod
     *
     * @var string
     */
    public $prediction;

    /**
     * @example 0.9457855224609375
     *
     * @var float
     */
    public $probability;

    /**
     * @var int[]
     */
    public $ROI1Center;

    /**
     * @var int[]
     */
    public $ROI2Center;

    /**
     * @var int[]
     */
    public $ROI3Center;

    /**
     * @example 1.0
     *
     * @var int
     */
    public $radius;

    /**
     * @var int[]
     */
    public $spleenCenter;

    /**
     * @example 53.86993919857013
     *
     * @var float
     */
    public $spleenHU;

    /**
     * @example 50.553409576416016
     *
     * @var float
     */
    public $spleenROI;

    /**
     * @example 9.0
     *
     * @var float
     */
    public $spleenSlice;

    /**
     * @example 156.01873229470647
     *
     * @var float
     */
    public $spleenVolume;
    protected $_name = [
        'liverHU'               => 'LiverHU',
        'liverROI1'             => 'LiverROI1',
        'liverROI2'             => 'LiverROI2',
        'liverROI3'             => 'LiverROI3',
        'liverSlice'            => 'LiverSlice',
        'liverSpleenDifference' => 'LiverSpleenDifference',
        'liverSpleenRatio'      => 'LiverSpleenRatio',
        'liverVolume'           => 'LiverVolume',
        'prediction'            => 'Prediction',
        'probability'           => 'Probability',
        'ROI1Center'            => 'ROI1Center',
        'ROI2Center'            => 'ROI2Center',
        'ROI3Center'            => 'ROI3Center',
        'radius'                => 'Radius',
        'spleenCenter'          => 'SpleenCenter',
        'spleenHU'              => 'SpleenHU',
        'spleenROI'             => 'SpleenROI',
        'spleenSlice'           => 'SpleenSlice',
        'spleenVolume'          => 'SpleenVolume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liverHU) {
            $res['LiverHU'] = $this->liverHU;
        }
        if (null !== $this->liverROI1) {
            $res['LiverROI1'] = $this->liverROI1;
        }
        if (null !== $this->liverROI2) {
            $res['LiverROI2'] = $this->liverROI2;
        }
        if (null !== $this->liverROI3) {
            $res['LiverROI3'] = $this->liverROI3;
        }
        if (null !== $this->liverSlice) {
            $res['LiverSlice'] = $this->liverSlice;
        }
        if (null !== $this->liverSpleenDifference) {
            $res['LiverSpleenDifference'] = $this->liverSpleenDifference;
        }
        if (null !== $this->liverSpleenRatio) {
            $res['LiverSpleenRatio'] = $this->liverSpleenRatio;
        }
        if (null !== $this->liverVolume) {
            $res['LiverVolume'] = $this->liverVolume;
        }
        if (null !== $this->prediction) {
            $res['Prediction'] = $this->prediction;
        }
        if (null !== $this->probability) {
            $res['Probability'] = $this->probability;
        }
        if (null !== $this->ROI1Center) {
            $res['ROI1Center'] = $this->ROI1Center;
        }
        if (null !== $this->ROI2Center) {
            $res['ROI2Center'] = $this->ROI2Center;
        }
        if (null !== $this->ROI3Center) {
            $res['ROI3Center'] = $this->ROI3Center;
        }
        if (null !== $this->radius) {
            $res['Radius'] = $this->radius;
        }
        if (null !== $this->spleenCenter) {
            $res['SpleenCenter'] = $this->spleenCenter;
        }
        if (null !== $this->spleenHU) {
            $res['SpleenHU'] = $this->spleenHU;
        }
        if (null !== $this->spleenROI) {
            $res['SpleenROI'] = $this->spleenROI;
        }
        if (null !== $this->spleenSlice) {
            $res['SpleenSlice'] = $this->spleenSlice;
        }
        if (null !== $this->spleenVolume) {
            $res['SpleenVolume'] = $this->spleenVolume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiverHU'])) {
            $model->liverHU = $map['LiverHU'];
        }
        if (isset($map['LiverROI1'])) {
            $model->liverROI1 = $map['LiverROI1'];
        }
        if (isset($map['LiverROI2'])) {
            $model->liverROI2 = $map['LiverROI2'];
        }
        if (isset($map['LiverROI3'])) {
            $model->liverROI3 = $map['LiverROI3'];
        }
        if (isset($map['LiverSlice'])) {
            $model->liverSlice = $map['LiverSlice'];
        }
        if (isset($map['LiverSpleenDifference'])) {
            $model->liverSpleenDifference = $map['LiverSpleenDifference'];
        }
        if (isset($map['LiverSpleenRatio'])) {
            $model->liverSpleenRatio = $map['LiverSpleenRatio'];
        }
        if (isset($map['LiverVolume'])) {
            $model->liverVolume = $map['LiverVolume'];
        }
        if (isset($map['Prediction'])) {
            $model->prediction = $map['Prediction'];
        }
        if (isset($map['Probability'])) {
            $model->probability = $map['Probability'];
        }
        if (isset($map['ROI1Center'])) {
            if (!empty($map['ROI1Center'])) {
                $model->ROI1Center = $map['ROI1Center'];
            }
        }
        if (isset($map['ROI2Center'])) {
            if (!empty($map['ROI2Center'])) {
                $model->ROI2Center = $map['ROI2Center'];
            }
        }
        if (isset($map['ROI3Center'])) {
            if (!empty($map['ROI3Center'])) {
                $model->ROI3Center = $map['ROI3Center'];
            }
        }
        if (isset($map['Radius'])) {
            $model->radius = $map['Radius'];
        }
        if (isset($map['SpleenCenter'])) {
            if (!empty($map['SpleenCenter'])) {
                $model->spleenCenter = $map['SpleenCenter'];
            }
        }
        if (isset($map['SpleenHU'])) {
            $model->spleenHU = $map['SpleenHU'];
        }
        if (isset($map['SpleenROI'])) {
            $model->spleenROI = $map['SpleenROI'];
        }
        if (isset($map['SpleenSlice'])) {
            $model->spleenSlice = $map['SpleenSlice'];
        }
        if (isset($map['SpleenVolume'])) {
            $model->spleenVolume = $map['SpleenVolume'];
        }

        return $model;
    }
}
