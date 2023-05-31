<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\predictCVD\lesion;

use AlibabaCloud\Tea\Model;

class featureScore extends Model
{
    /**
     * @var float[]
     */
    public $aortaCalciumScore;

    /**
     * @var float[]
     */
    public $aortaCalciumVolume;

    /**
     * @var float[]
     */
    public $ascAoMaxDiam;

    /**
     * @var float[]
     */
    public $ascendAortaLength;

    /**
     * @var float[]
     */
    public $cardioThoracicRatio;

    /**
     * @var float[]
     */
    public $coronaryCalciumVol;

    /**
     * @var float[]
     */
    public $deepFeature;

    /**
     * @var float[]
     */
    public $eatHUMean;

    /**
     * @var float[]
     */
    public $eatHUSTD;

    /**
     * @var float[]
     */
    public $eatVolume;

    /**
     * @var float[]
     */
    public $leftLungLowattRatio;

    /**
     * @var float[]
     */
    public $myoEpiRatio;

    /**
     * @var float[]
     */
    public $rightLungLowattRatio;
    protected $_name = [
        'aortaCalciumScore'    => 'AortaCalciumScore',
        'aortaCalciumVolume'   => 'AortaCalciumVolume',
        'ascAoMaxDiam'         => 'AscAoMaxDiam',
        'ascendAortaLength'    => 'AscendAortaLength',
        'cardioThoracicRatio'  => 'CardioThoracicRatio',
        'coronaryCalciumVol'   => 'CoronaryCalciumVol',
        'deepFeature'          => 'DeepFeature',
        'eatHUMean'            => 'EatHUMean',
        'eatHUSTD'             => 'EatHUSTD',
        'eatVolume'            => 'EatVolume',
        'leftLungLowattRatio'  => 'LeftLungLowattRatio',
        'myoEpiRatio'          => 'MyoEpiRatio',
        'rightLungLowattRatio' => 'RightLungLowattRatio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aortaCalciumScore) {
            $res['AortaCalciumScore'] = $this->aortaCalciumScore;
        }
        if (null !== $this->aortaCalciumVolume) {
            $res['AortaCalciumVolume'] = $this->aortaCalciumVolume;
        }
        if (null !== $this->ascAoMaxDiam) {
            $res['AscAoMaxDiam'] = $this->ascAoMaxDiam;
        }
        if (null !== $this->ascendAortaLength) {
            $res['AscendAortaLength'] = $this->ascendAortaLength;
        }
        if (null !== $this->cardioThoracicRatio) {
            $res['CardioThoracicRatio'] = $this->cardioThoracicRatio;
        }
        if (null !== $this->coronaryCalciumVol) {
            $res['CoronaryCalciumVol'] = $this->coronaryCalciumVol;
        }
        if (null !== $this->deepFeature) {
            $res['DeepFeature'] = $this->deepFeature;
        }
        if (null !== $this->eatHUMean) {
            $res['EatHUMean'] = $this->eatHUMean;
        }
        if (null !== $this->eatHUSTD) {
            $res['EatHUSTD'] = $this->eatHUSTD;
        }
        if (null !== $this->eatVolume) {
            $res['EatVolume'] = $this->eatVolume;
        }
        if (null !== $this->leftLungLowattRatio) {
            $res['LeftLungLowattRatio'] = $this->leftLungLowattRatio;
        }
        if (null !== $this->myoEpiRatio) {
            $res['MyoEpiRatio'] = $this->myoEpiRatio;
        }
        if (null !== $this->rightLungLowattRatio) {
            $res['RightLungLowattRatio'] = $this->rightLungLowattRatio;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return featureScore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AortaCalciumScore'])) {
            if (!empty($map['AortaCalciumScore'])) {
                $model->aortaCalciumScore = $map['AortaCalciumScore'];
            }
        }
        if (isset($map['AortaCalciumVolume'])) {
            if (!empty($map['AortaCalciumVolume'])) {
                $model->aortaCalciumVolume = $map['AortaCalciumVolume'];
            }
        }
        if (isset($map['AscAoMaxDiam'])) {
            if (!empty($map['AscAoMaxDiam'])) {
                $model->ascAoMaxDiam = $map['AscAoMaxDiam'];
            }
        }
        if (isset($map['AscendAortaLength'])) {
            if (!empty($map['AscendAortaLength'])) {
                $model->ascendAortaLength = $map['AscendAortaLength'];
            }
        }
        if (isset($map['CardioThoracicRatio'])) {
            if (!empty($map['CardioThoracicRatio'])) {
                $model->cardioThoracicRatio = $map['CardioThoracicRatio'];
            }
        }
        if (isset($map['CoronaryCalciumVol'])) {
            if (!empty($map['CoronaryCalciumVol'])) {
                $model->coronaryCalciumVol = $map['CoronaryCalciumVol'];
            }
        }
        if (isset($map['DeepFeature'])) {
            if (!empty($map['DeepFeature'])) {
                $model->deepFeature = $map['DeepFeature'];
            }
        }
        if (isset($map['EatHUMean'])) {
            if (!empty($map['EatHUMean'])) {
                $model->eatHUMean = $map['EatHUMean'];
            }
        }
        if (isset($map['EatHUSTD'])) {
            if (!empty($map['EatHUSTD'])) {
                $model->eatHUSTD = $map['EatHUSTD'];
            }
        }
        if (isset($map['EatVolume'])) {
            if (!empty($map['EatVolume'])) {
                $model->eatVolume = $map['EatVolume'];
            }
        }
        if (isset($map['LeftLungLowattRatio'])) {
            if (!empty($map['LeftLungLowattRatio'])) {
                $model->leftLungLowattRatio = $map['LeftLungLowattRatio'];
            }
        }
        if (isset($map['MyoEpiRatio'])) {
            if (!empty($map['MyoEpiRatio'])) {
                $model->myoEpiRatio = $map['MyoEpiRatio'];
            }
        }
        if (isset($map['RightLungLowattRatio'])) {
            if (!empty($map['RightLungLowattRatio'])) {
                $model->rightLungLowattRatio = $map['RightLungLowattRatio'];
            }
        }

        return $model;
    }
}
