<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\PredictCVDResponseBody\data\lesion;

use AlibabaCloud\Dara\Model;

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
    public $aortaMaxDiam;

    /**
     * @var float[]
     */
    public $aortaMaxDiamStd;

    /**
     * @var float[]
     */
    public $aorticHeightIndex;

    /**
     * @var float[]
     */
    public $aorticTortuosityIndex;

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
    public $chestWidth;

    /**
     * @var float[]
     */
    public $coronaryCalciumScore;

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
    public $heartLongDiam;

    /**
     * @var float[]
     */
    public $heartShortDiam;

    /**
     * @var float[]
     */
    public $heartWidth;

    /**
     * @var float[]
     */
    public $leftLungHighattRatio;

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
    public $rightLungHighattRatio;

    /**
     * @var float[]
     */
    public $rightLungLowattRatio;
    protected $_name = [
        'aortaCalciumScore' => 'AortaCalciumScore',
        'aortaCalciumVolume' => 'AortaCalciumVolume',
        'aortaMaxDiam' => 'AortaMaxDiam',
        'aortaMaxDiamStd' => 'AortaMaxDiamStd',
        'aorticHeightIndex' => 'AorticHeightIndex',
        'aorticTortuosityIndex' => 'AorticTortuosityIndex',
        'ascAoMaxDiam' => 'AscAoMaxDiam',
        'ascendAortaLength' => 'AscendAortaLength',
        'cardioThoracicRatio' => 'CardioThoracicRatio',
        'chestWidth' => 'ChestWidth',
        'coronaryCalciumScore' => 'CoronaryCalciumScore',
        'coronaryCalciumVol' => 'CoronaryCalciumVol',
        'deepFeature' => 'DeepFeature',
        'eatHUMean' => 'EatHUMean',
        'eatHUSTD' => 'EatHUSTD',
        'eatVolume' => 'EatVolume',
        'heartLongDiam' => 'HeartLongDiam',
        'heartShortDiam' => 'HeartShortDiam',
        'heartWidth' => 'HeartWidth',
        'leftLungHighattRatio' => 'LeftLungHighattRatio',
        'leftLungLowattRatio' => 'LeftLungLowattRatio',
        'myoEpiRatio' => 'MyoEpiRatio',
        'rightLungHighattRatio' => 'RightLungHighattRatio',
        'rightLungLowattRatio' => 'RightLungLowattRatio',
    ];

    public function validate()
    {
        if (\is_array($this->aortaCalciumScore)) {
            Model::validateArray($this->aortaCalciumScore);
        }
        if (\is_array($this->aortaCalciumVolume)) {
            Model::validateArray($this->aortaCalciumVolume);
        }
        if (\is_array($this->aortaMaxDiam)) {
            Model::validateArray($this->aortaMaxDiam);
        }
        if (\is_array($this->aortaMaxDiamStd)) {
            Model::validateArray($this->aortaMaxDiamStd);
        }
        if (\is_array($this->aorticHeightIndex)) {
            Model::validateArray($this->aorticHeightIndex);
        }
        if (\is_array($this->aorticTortuosityIndex)) {
            Model::validateArray($this->aorticTortuosityIndex);
        }
        if (\is_array($this->ascAoMaxDiam)) {
            Model::validateArray($this->ascAoMaxDiam);
        }
        if (\is_array($this->ascendAortaLength)) {
            Model::validateArray($this->ascendAortaLength);
        }
        if (\is_array($this->cardioThoracicRatio)) {
            Model::validateArray($this->cardioThoracicRatio);
        }
        if (\is_array($this->chestWidth)) {
            Model::validateArray($this->chestWidth);
        }
        if (\is_array($this->coronaryCalciumScore)) {
            Model::validateArray($this->coronaryCalciumScore);
        }
        if (\is_array($this->coronaryCalciumVol)) {
            Model::validateArray($this->coronaryCalciumVol);
        }
        if (\is_array($this->deepFeature)) {
            Model::validateArray($this->deepFeature);
        }
        if (\is_array($this->eatHUMean)) {
            Model::validateArray($this->eatHUMean);
        }
        if (\is_array($this->eatHUSTD)) {
            Model::validateArray($this->eatHUSTD);
        }
        if (\is_array($this->eatVolume)) {
            Model::validateArray($this->eatVolume);
        }
        if (\is_array($this->heartLongDiam)) {
            Model::validateArray($this->heartLongDiam);
        }
        if (\is_array($this->heartShortDiam)) {
            Model::validateArray($this->heartShortDiam);
        }
        if (\is_array($this->heartWidth)) {
            Model::validateArray($this->heartWidth);
        }
        if (\is_array($this->leftLungHighattRatio)) {
            Model::validateArray($this->leftLungHighattRatio);
        }
        if (\is_array($this->leftLungLowattRatio)) {
            Model::validateArray($this->leftLungLowattRatio);
        }
        if (\is_array($this->myoEpiRatio)) {
            Model::validateArray($this->myoEpiRatio);
        }
        if (\is_array($this->rightLungHighattRatio)) {
            Model::validateArray($this->rightLungHighattRatio);
        }
        if (\is_array($this->rightLungLowattRatio)) {
            Model::validateArray($this->rightLungLowattRatio);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aortaCalciumScore) {
            if (\is_array($this->aortaCalciumScore)) {
                $res['AortaCalciumScore'] = [];
                $n1 = 0;
                foreach ($this->aortaCalciumScore as $item1) {
                    $res['AortaCalciumScore'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->aortaCalciumVolume) {
            if (\is_array($this->aortaCalciumVolume)) {
                $res['AortaCalciumVolume'] = [];
                $n1 = 0;
                foreach ($this->aortaCalciumVolume as $item1) {
                    $res['AortaCalciumVolume'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->aortaMaxDiam) {
            if (\is_array($this->aortaMaxDiam)) {
                $res['AortaMaxDiam'] = [];
                $n1 = 0;
                foreach ($this->aortaMaxDiam as $item1) {
                    $res['AortaMaxDiam'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->aortaMaxDiamStd) {
            if (\is_array($this->aortaMaxDiamStd)) {
                $res['AortaMaxDiamStd'] = [];
                $n1 = 0;
                foreach ($this->aortaMaxDiamStd as $item1) {
                    $res['AortaMaxDiamStd'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->aorticHeightIndex) {
            if (\is_array($this->aorticHeightIndex)) {
                $res['AorticHeightIndex'] = [];
                $n1 = 0;
                foreach ($this->aorticHeightIndex as $item1) {
                    $res['AorticHeightIndex'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->aorticTortuosityIndex) {
            if (\is_array($this->aorticTortuosityIndex)) {
                $res['AorticTortuosityIndex'] = [];
                $n1 = 0;
                foreach ($this->aorticTortuosityIndex as $item1) {
                    $res['AorticTortuosityIndex'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ascAoMaxDiam) {
            if (\is_array($this->ascAoMaxDiam)) {
                $res['AscAoMaxDiam'] = [];
                $n1 = 0;
                foreach ($this->ascAoMaxDiam as $item1) {
                    $res['AscAoMaxDiam'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ascendAortaLength) {
            if (\is_array($this->ascendAortaLength)) {
                $res['AscendAortaLength'] = [];
                $n1 = 0;
                foreach ($this->ascendAortaLength as $item1) {
                    $res['AscendAortaLength'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cardioThoracicRatio) {
            if (\is_array($this->cardioThoracicRatio)) {
                $res['CardioThoracicRatio'] = [];
                $n1 = 0;
                foreach ($this->cardioThoracicRatio as $item1) {
                    $res['CardioThoracicRatio'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->chestWidth) {
            if (\is_array($this->chestWidth)) {
                $res['ChestWidth'] = [];
                $n1 = 0;
                foreach ($this->chestWidth as $item1) {
                    $res['ChestWidth'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->coronaryCalciumScore) {
            if (\is_array($this->coronaryCalciumScore)) {
                $res['CoronaryCalciumScore'] = [];
                $n1 = 0;
                foreach ($this->coronaryCalciumScore as $item1) {
                    $res['CoronaryCalciumScore'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->coronaryCalciumVol) {
            if (\is_array($this->coronaryCalciumVol)) {
                $res['CoronaryCalciumVol'] = [];
                $n1 = 0;
                foreach ($this->coronaryCalciumVol as $item1) {
                    $res['CoronaryCalciumVol'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->deepFeature) {
            if (\is_array($this->deepFeature)) {
                $res['DeepFeature'] = [];
                $n1 = 0;
                foreach ($this->deepFeature as $item1) {
                    $res['DeepFeature'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->eatHUMean) {
            if (\is_array($this->eatHUMean)) {
                $res['EatHUMean'] = [];
                $n1 = 0;
                foreach ($this->eatHUMean as $item1) {
                    $res['EatHUMean'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->eatHUSTD) {
            if (\is_array($this->eatHUSTD)) {
                $res['EatHUSTD'] = [];
                $n1 = 0;
                foreach ($this->eatHUSTD as $item1) {
                    $res['EatHUSTD'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->eatVolume) {
            if (\is_array($this->eatVolume)) {
                $res['EatVolume'] = [];
                $n1 = 0;
                foreach ($this->eatVolume as $item1) {
                    $res['EatVolume'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->heartLongDiam) {
            if (\is_array($this->heartLongDiam)) {
                $res['HeartLongDiam'] = [];
                $n1 = 0;
                foreach ($this->heartLongDiam as $item1) {
                    $res['HeartLongDiam'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->heartShortDiam) {
            if (\is_array($this->heartShortDiam)) {
                $res['HeartShortDiam'] = [];
                $n1 = 0;
                foreach ($this->heartShortDiam as $item1) {
                    $res['HeartShortDiam'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->heartWidth) {
            if (\is_array($this->heartWidth)) {
                $res['HeartWidth'] = [];
                $n1 = 0;
                foreach ($this->heartWidth as $item1) {
                    $res['HeartWidth'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->leftLungHighattRatio) {
            if (\is_array($this->leftLungHighattRatio)) {
                $res['LeftLungHighattRatio'] = [];
                $n1 = 0;
                foreach ($this->leftLungHighattRatio as $item1) {
                    $res['LeftLungHighattRatio'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->leftLungLowattRatio) {
            if (\is_array($this->leftLungLowattRatio)) {
                $res['LeftLungLowattRatio'] = [];
                $n1 = 0;
                foreach ($this->leftLungLowattRatio as $item1) {
                    $res['LeftLungLowattRatio'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->myoEpiRatio) {
            if (\is_array($this->myoEpiRatio)) {
                $res['MyoEpiRatio'] = [];
                $n1 = 0;
                foreach ($this->myoEpiRatio as $item1) {
                    $res['MyoEpiRatio'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->rightLungHighattRatio) {
            if (\is_array($this->rightLungHighattRatio)) {
                $res['RightLungHighattRatio'] = [];
                $n1 = 0;
                foreach ($this->rightLungHighattRatio as $item1) {
                    $res['RightLungHighattRatio'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->rightLungLowattRatio) {
            if (\is_array($this->rightLungLowattRatio)) {
                $res['RightLungLowattRatio'] = [];
                $n1 = 0;
                foreach ($this->rightLungLowattRatio as $item1) {
                    $res['RightLungLowattRatio'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AortaCalciumScore'])) {
            if (!empty($map['AortaCalciumScore'])) {
                $model->aortaCalciumScore = [];
                $n1 = 0;
                foreach ($map['AortaCalciumScore'] as $item1) {
                    $model->aortaCalciumScore[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AortaCalciumVolume'])) {
            if (!empty($map['AortaCalciumVolume'])) {
                $model->aortaCalciumVolume = [];
                $n1 = 0;
                foreach ($map['AortaCalciumVolume'] as $item1) {
                    $model->aortaCalciumVolume[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AortaMaxDiam'])) {
            if (!empty($map['AortaMaxDiam'])) {
                $model->aortaMaxDiam = [];
                $n1 = 0;
                foreach ($map['AortaMaxDiam'] as $item1) {
                    $model->aortaMaxDiam[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AortaMaxDiamStd'])) {
            if (!empty($map['AortaMaxDiamStd'])) {
                $model->aortaMaxDiamStd = [];
                $n1 = 0;
                foreach ($map['AortaMaxDiamStd'] as $item1) {
                    $model->aortaMaxDiamStd[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AorticHeightIndex'])) {
            if (!empty($map['AorticHeightIndex'])) {
                $model->aorticHeightIndex = [];
                $n1 = 0;
                foreach ($map['AorticHeightIndex'] as $item1) {
                    $model->aorticHeightIndex[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AorticTortuosityIndex'])) {
            if (!empty($map['AorticTortuosityIndex'])) {
                $model->aorticTortuosityIndex = [];
                $n1 = 0;
                foreach ($map['AorticTortuosityIndex'] as $item1) {
                    $model->aorticTortuosityIndex[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AscAoMaxDiam'])) {
            if (!empty($map['AscAoMaxDiam'])) {
                $model->ascAoMaxDiam = [];
                $n1 = 0;
                foreach ($map['AscAoMaxDiam'] as $item1) {
                    $model->ascAoMaxDiam[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AscendAortaLength'])) {
            if (!empty($map['AscendAortaLength'])) {
                $model->ascendAortaLength = [];
                $n1 = 0;
                foreach ($map['AscendAortaLength'] as $item1) {
                    $model->ascendAortaLength[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CardioThoracicRatio'])) {
            if (!empty($map['CardioThoracicRatio'])) {
                $model->cardioThoracicRatio = [];
                $n1 = 0;
                foreach ($map['CardioThoracicRatio'] as $item1) {
                    $model->cardioThoracicRatio[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ChestWidth'])) {
            if (!empty($map['ChestWidth'])) {
                $model->chestWidth = [];
                $n1 = 0;
                foreach ($map['ChestWidth'] as $item1) {
                    $model->chestWidth[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CoronaryCalciumScore'])) {
            if (!empty($map['CoronaryCalciumScore'])) {
                $model->coronaryCalciumScore = [];
                $n1 = 0;
                foreach ($map['CoronaryCalciumScore'] as $item1) {
                    $model->coronaryCalciumScore[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CoronaryCalciumVol'])) {
            if (!empty($map['CoronaryCalciumVol'])) {
                $model->coronaryCalciumVol = [];
                $n1 = 0;
                foreach ($map['CoronaryCalciumVol'] as $item1) {
                    $model->coronaryCalciumVol[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DeepFeature'])) {
            if (!empty($map['DeepFeature'])) {
                $model->deepFeature = [];
                $n1 = 0;
                foreach ($map['DeepFeature'] as $item1) {
                    $model->deepFeature[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EatHUMean'])) {
            if (!empty($map['EatHUMean'])) {
                $model->eatHUMean = [];
                $n1 = 0;
                foreach ($map['EatHUMean'] as $item1) {
                    $model->eatHUMean[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EatHUSTD'])) {
            if (!empty($map['EatHUSTD'])) {
                $model->eatHUSTD = [];
                $n1 = 0;
                foreach ($map['EatHUSTD'] as $item1) {
                    $model->eatHUSTD[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EatVolume'])) {
            if (!empty($map['EatVolume'])) {
                $model->eatVolume = [];
                $n1 = 0;
                foreach ($map['EatVolume'] as $item1) {
                    $model->eatVolume[$n1++] = $item1;
                }
            }
        }

        if (isset($map['HeartLongDiam'])) {
            if (!empty($map['HeartLongDiam'])) {
                $model->heartLongDiam = [];
                $n1 = 0;
                foreach ($map['HeartLongDiam'] as $item1) {
                    $model->heartLongDiam[$n1++] = $item1;
                }
            }
        }

        if (isset($map['HeartShortDiam'])) {
            if (!empty($map['HeartShortDiam'])) {
                $model->heartShortDiam = [];
                $n1 = 0;
                foreach ($map['HeartShortDiam'] as $item1) {
                    $model->heartShortDiam[$n1++] = $item1;
                }
            }
        }

        if (isset($map['HeartWidth'])) {
            if (!empty($map['HeartWidth'])) {
                $model->heartWidth = [];
                $n1 = 0;
                foreach ($map['HeartWidth'] as $item1) {
                    $model->heartWidth[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LeftLungHighattRatio'])) {
            if (!empty($map['LeftLungHighattRatio'])) {
                $model->leftLungHighattRatio = [];
                $n1 = 0;
                foreach ($map['LeftLungHighattRatio'] as $item1) {
                    $model->leftLungHighattRatio[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LeftLungLowattRatio'])) {
            if (!empty($map['LeftLungLowattRatio'])) {
                $model->leftLungLowattRatio = [];
                $n1 = 0;
                foreach ($map['LeftLungLowattRatio'] as $item1) {
                    $model->leftLungLowattRatio[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MyoEpiRatio'])) {
            if (!empty($map['MyoEpiRatio'])) {
                $model->myoEpiRatio = [];
                $n1 = 0;
                foreach ($map['MyoEpiRatio'] as $item1) {
                    $model->myoEpiRatio[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RightLungHighattRatio'])) {
            if (!empty($map['RightLungHighattRatio'])) {
                $model->rightLungHighattRatio = [];
                $n1 = 0;
                foreach ($map['RightLungHighattRatio'] as $item1) {
                    $model->rightLungHighattRatio[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RightLungLowattRatio'])) {
            if (!empty($map['RightLungLowattRatio'])) {
                $model->rightLungLowattRatio = [];
                $n1 = 0;
                foreach ($map['RightLungLowattRatio'] as $item1) {
                    $model->rightLungLowattRatio[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
