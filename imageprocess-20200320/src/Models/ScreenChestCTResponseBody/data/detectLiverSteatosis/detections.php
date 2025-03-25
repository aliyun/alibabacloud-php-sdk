<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectLiverSteatosis;

use AlibabaCloud\Dara\Model;

class detections extends Model
{
    /**
     * @var float
     */
    public $fatFract;

    /**
     * @var float
     */
    public $liverHU;

    /**
     * @var float
     */
    public $liverROI1;

    /**
     * @var float
     */
    public $liverROI2;

    /**
     * @var float
     */
    public $liverROI3;

    /**
     * @var float
     */
    public $liverSlice;

    /**
     * @var float
     */
    public $liverSpleenDifference;

    /**
     * @var float
     */
    public $liverSpleenRatio;

    /**
     * @var float
     */
    public $liverVolume;

    /**
     * @var float
     */
    public $maossScore;

    /**
     * @var string
     */
    public $prediction;

    /**
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
     * @var int
     */
    public $radius;

    /**
     * @var int[]
     */
    public $spleenCenter;

    /**
     * @var float
     */
    public $spleenHU;

    /**
     * @var float
     */
    public $spleenROI;

    /**
     * @var float
     */
    public $spleenSlice;

    /**
     * @var float
     */
    public $spleenVolume;
    protected $_name = [
        'fatFract' => 'FatFract',
        'liverHU' => 'LiverHU',
        'liverROI1' => 'LiverROI1',
        'liverROI2' => 'LiverROI2',
        'liverROI3' => 'LiverROI3',
        'liverSlice' => 'LiverSlice',
        'liverSpleenDifference' => 'LiverSpleenDifference',
        'liverSpleenRatio' => 'LiverSpleenRatio',
        'liverVolume' => 'LiverVolume',
        'maossScore' => 'MaossScore',
        'prediction' => 'Prediction',
        'probability' => 'Probability',
        'ROI1Center' => 'ROI1Center',
        'ROI2Center' => 'ROI2Center',
        'ROI3Center' => 'ROI3Center',
        'radius' => 'Radius',
        'spleenCenter' => 'SpleenCenter',
        'spleenHU' => 'SpleenHU',
        'spleenROI' => 'SpleenROI',
        'spleenSlice' => 'SpleenSlice',
        'spleenVolume' => 'SpleenVolume',
    ];

    public function validate()
    {
        if (\is_array($this->ROI1Center)) {
            Model::validateArray($this->ROI1Center);
        }
        if (\is_array($this->ROI2Center)) {
            Model::validateArray($this->ROI2Center);
        }
        if (\is_array($this->ROI3Center)) {
            Model::validateArray($this->ROI3Center);
        }
        if (\is_array($this->spleenCenter)) {
            Model::validateArray($this->spleenCenter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fatFract) {
            $res['FatFract'] = $this->fatFract;
        }

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

        if (null !== $this->maossScore) {
            $res['MaossScore'] = $this->maossScore;
        }

        if (null !== $this->prediction) {
            $res['Prediction'] = $this->prediction;
        }

        if (null !== $this->probability) {
            $res['Probability'] = $this->probability;
        }

        if (null !== $this->ROI1Center) {
            if (\is_array($this->ROI1Center)) {
                $res['ROI1Center'] = [];
                $n1 = 0;
                foreach ($this->ROI1Center as $item1) {
                    $res['ROI1Center'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ROI2Center) {
            if (\is_array($this->ROI2Center)) {
                $res['ROI2Center'] = [];
                $n1 = 0;
                foreach ($this->ROI2Center as $item1) {
                    $res['ROI2Center'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ROI3Center) {
            if (\is_array($this->ROI3Center)) {
                $res['ROI3Center'] = [];
                $n1 = 0;
                foreach ($this->ROI3Center as $item1) {
                    $res['ROI3Center'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->radius) {
            $res['Radius'] = $this->radius;
        }

        if (null !== $this->spleenCenter) {
            if (\is_array($this->spleenCenter)) {
                $res['SpleenCenter'] = [];
                $n1 = 0;
                foreach ($this->spleenCenter as $item1) {
                    $res['SpleenCenter'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FatFract'])) {
            $model->fatFract = $map['FatFract'];
        }

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

        if (isset($map['MaossScore'])) {
            $model->maossScore = $map['MaossScore'];
        }

        if (isset($map['Prediction'])) {
            $model->prediction = $map['Prediction'];
        }

        if (isset($map['Probability'])) {
            $model->probability = $map['Probability'];
        }

        if (isset($map['ROI1Center'])) {
            if (!empty($map['ROI1Center'])) {
                $model->ROI1Center = [];
                $n1 = 0;
                foreach ($map['ROI1Center'] as $item1) {
                    $model->ROI1Center[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ROI2Center'])) {
            if (!empty($map['ROI2Center'])) {
                $model->ROI2Center = [];
                $n1 = 0;
                foreach ($map['ROI2Center'] as $item1) {
                    $model->ROI2Center[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ROI3Center'])) {
            if (!empty($map['ROI3Center'])) {
                $model->ROI3Center = [];
                $n1 = 0;
                foreach ($map['ROI3Center'] as $item1) {
                    $model->ROI3Center[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Radius'])) {
            $model->radius = $map['Radius'];
        }

        if (isset($map['SpleenCenter'])) {
            if (!empty($map['SpleenCenter'])) {
                $model->spleenCenter = [];
                $n1 = 0;
                foreach ($map['SpleenCenter'] as $item1) {
                    $model->spleenCenter[$n1++] = $item1;
                }
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
