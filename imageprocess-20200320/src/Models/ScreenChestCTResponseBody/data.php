<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\analyzeChestVessel;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\CACS;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\calcBMD;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\covid;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectAD;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectLiverSteatosis;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectLymph;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectPdac;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectRibFracture;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\lungNodule;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\muscleFat;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\predictCVD;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenBC;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenCRC;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenEc;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenGC;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenLC;

class data extends Model
{
    /**
     * @var analyzeChestVessel
     */
    public $analyzeChestVessel;

    /**
     * @var CACS
     */
    public $CACS;

    /**
     * @var calcBMD
     */
    public $calcBMD;

    /**
     * @var covid
     */
    public $covid;

    /**
     * @var detectAD
     */
    public $detectAD;

    /**
     * @var detectLiverSteatosis
     */
    public $detectLiverSteatosis;

    /**
     * @var detectLymph
     */
    public $detectLymph;

    /**
     * @var detectPdac
     */
    public $detectPdac;

    /**
     * @var detectRibFracture
     */
    public $detectRibFracture;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var lungNodule
     */
    public $lungNodule;

    /**
     * @var muscleFat
     */
    public $muscleFat;

    /**
     * @var mixed[]
     */
    public $nestedUrlList;

    /**
     * @var predictCVD
     */
    public $predictCVD;

    /**
     * @var screenBC
     */
    public $screenBC;

    /**
     * @var screenCRC
     */
    public $screenCRC;

    /**
     * @var screenEc
     */
    public $screenEc;

    /**
     * @var screenGC
     */
    public $screenGC;

    /**
     * @var screenLC
     */
    public $screenLC;

    /**
     * @var mixed[]
     */
    public $URLList;
    protected $_name = [
        'analyzeChestVessel' => 'AnalyzeChestVessel',
        'CACS' => 'CACS',
        'calcBMD' => 'CalcBMD',
        'covid' => 'Covid',
        'detectAD' => 'DetectAD',
        'detectLiverSteatosis' => 'DetectLiverSteatosis',
        'detectLymph' => 'DetectLymph',
        'detectPdac' => 'DetectPdac',
        'detectRibFracture' => 'DetectRibFracture',
        'errorMessage' => 'ErrorMessage',
        'lungNodule' => 'LungNodule',
        'muscleFat' => 'MuscleFat',
        'nestedUrlList' => 'NestedUrlList',
        'predictCVD' => 'PredictCVD',
        'screenBC' => 'ScreenBC',
        'screenCRC' => 'ScreenCRC',
        'screenEc' => 'ScreenEc',
        'screenGC' => 'ScreenGC',
        'screenLC' => 'ScreenLC',
        'URLList' => 'URLList',
    ];

    public function validate()
    {
        if (null !== $this->analyzeChestVessel) {
            $this->analyzeChestVessel->validate();
        }
        if (null !== $this->CACS) {
            $this->CACS->validate();
        }
        if (null !== $this->calcBMD) {
            $this->calcBMD->validate();
        }
        if (null !== $this->covid) {
            $this->covid->validate();
        }
        if (null !== $this->detectAD) {
            $this->detectAD->validate();
        }
        if (null !== $this->detectLiverSteatosis) {
            $this->detectLiverSteatosis->validate();
        }
        if (null !== $this->detectLymph) {
            $this->detectLymph->validate();
        }
        if (null !== $this->detectPdac) {
            $this->detectPdac->validate();
        }
        if (null !== $this->detectRibFracture) {
            $this->detectRibFracture->validate();
        }
        if (null !== $this->lungNodule) {
            $this->lungNodule->validate();
        }
        if (null !== $this->muscleFat) {
            $this->muscleFat->validate();
        }
        if (\is_array($this->nestedUrlList)) {
            Model::validateArray($this->nestedUrlList);
        }
        if (null !== $this->predictCVD) {
            $this->predictCVD->validate();
        }
        if (null !== $this->screenBC) {
            $this->screenBC->validate();
        }
        if (null !== $this->screenCRC) {
            $this->screenCRC->validate();
        }
        if (null !== $this->screenEc) {
            $this->screenEc->validate();
        }
        if (null !== $this->screenGC) {
            $this->screenGC->validate();
        }
        if (null !== $this->screenLC) {
            $this->screenLC->validate();
        }
        if (\is_array($this->URLList)) {
            Model::validateArray($this->URLList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analyzeChestVessel) {
            $res['AnalyzeChestVessel'] = null !== $this->analyzeChestVessel ? $this->analyzeChestVessel->toArray($noStream) : $this->analyzeChestVessel;
        }

        if (null !== $this->CACS) {
            $res['CACS'] = null !== $this->CACS ? $this->CACS->toArray($noStream) : $this->CACS;
        }

        if (null !== $this->calcBMD) {
            $res['CalcBMD'] = null !== $this->calcBMD ? $this->calcBMD->toArray($noStream) : $this->calcBMD;
        }

        if (null !== $this->covid) {
            $res['Covid'] = null !== $this->covid ? $this->covid->toArray($noStream) : $this->covid;
        }

        if (null !== $this->detectAD) {
            $res['DetectAD'] = null !== $this->detectAD ? $this->detectAD->toArray($noStream) : $this->detectAD;
        }

        if (null !== $this->detectLiverSteatosis) {
            $res['DetectLiverSteatosis'] = null !== $this->detectLiverSteatosis ? $this->detectLiverSteatosis->toArray($noStream) : $this->detectLiverSteatosis;
        }

        if (null !== $this->detectLymph) {
            $res['DetectLymph'] = null !== $this->detectLymph ? $this->detectLymph->toArray($noStream) : $this->detectLymph;
        }

        if (null !== $this->detectPdac) {
            $res['DetectPdac'] = null !== $this->detectPdac ? $this->detectPdac->toArray($noStream) : $this->detectPdac;
        }

        if (null !== $this->detectRibFracture) {
            $res['DetectRibFracture'] = null !== $this->detectRibFracture ? $this->detectRibFracture->toArray($noStream) : $this->detectRibFracture;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->lungNodule) {
            $res['LungNodule'] = null !== $this->lungNodule ? $this->lungNodule->toArray($noStream) : $this->lungNodule;
        }

        if (null !== $this->muscleFat) {
            $res['MuscleFat'] = null !== $this->muscleFat ? $this->muscleFat->toArray($noStream) : $this->muscleFat;
        }

        if (null !== $this->nestedUrlList) {
            if (\is_array($this->nestedUrlList)) {
                $res['NestedUrlList'] = [];
                foreach ($this->nestedUrlList as $key1 => $value1) {
                    $res['NestedUrlList'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->predictCVD) {
            $res['PredictCVD'] = null !== $this->predictCVD ? $this->predictCVD->toArray($noStream) : $this->predictCVD;
        }

        if (null !== $this->screenBC) {
            $res['ScreenBC'] = null !== $this->screenBC ? $this->screenBC->toArray($noStream) : $this->screenBC;
        }

        if (null !== $this->screenCRC) {
            $res['ScreenCRC'] = null !== $this->screenCRC ? $this->screenCRC->toArray($noStream) : $this->screenCRC;
        }

        if (null !== $this->screenEc) {
            $res['ScreenEc'] = null !== $this->screenEc ? $this->screenEc->toArray($noStream) : $this->screenEc;
        }

        if (null !== $this->screenGC) {
            $res['ScreenGC'] = null !== $this->screenGC ? $this->screenGC->toArray($noStream) : $this->screenGC;
        }

        if (null !== $this->screenLC) {
            $res['ScreenLC'] = null !== $this->screenLC ? $this->screenLC->toArray($noStream) : $this->screenLC;
        }

        if (null !== $this->URLList) {
            if (\is_array($this->URLList)) {
                $res['URLList'] = [];
                foreach ($this->URLList as $key1 => $value1) {
                    $res['URLList'][$key1] = $value1;
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
        if (isset($map['AnalyzeChestVessel'])) {
            $model->analyzeChestVessel = analyzeChestVessel::fromMap($map['AnalyzeChestVessel']);
        }

        if (isset($map['CACS'])) {
            $model->CACS = CACS::fromMap($map['CACS']);
        }

        if (isset($map['CalcBMD'])) {
            $model->calcBMD = calcBMD::fromMap($map['CalcBMD']);
        }

        if (isset($map['Covid'])) {
            $model->covid = covid::fromMap($map['Covid']);
        }

        if (isset($map['DetectAD'])) {
            $model->detectAD = detectAD::fromMap($map['DetectAD']);
        }

        if (isset($map['DetectLiverSteatosis'])) {
            $model->detectLiverSteatosis = detectLiverSteatosis::fromMap($map['DetectLiverSteatosis']);
        }

        if (isset($map['DetectLymph'])) {
            $model->detectLymph = detectLymph::fromMap($map['DetectLymph']);
        }

        if (isset($map['DetectPdac'])) {
            $model->detectPdac = detectPdac::fromMap($map['DetectPdac']);
        }

        if (isset($map['DetectRibFracture'])) {
            $model->detectRibFracture = detectRibFracture::fromMap($map['DetectRibFracture']);
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['LungNodule'])) {
            $model->lungNodule = lungNodule::fromMap($map['LungNodule']);
        }

        if (isset($map['MuscleFat'])) {
            $model->muscleFat = muscleFat::fromMap($map['MuscleFat']);
        }

        if (isset($map['NestedUrlList'])) {
            if (!empty($map['NestedUrlList'])) {
                $model->nestedUrlList = [];
                foreach ($map['NestedUrlList'] as $key1 => $value1) {
                    $model->nestedUrlList[$key1] = $value1;
                }
            }
        }

        if (isset($map['PredictCVD'])) {
            $model->predictCVD = predictCVD::fromMap($map['PredictCVD']);
        }

        if (isset($map['ScreenBC'])) {
            $model->screenBC = screenBC::fromMap($map['ScreenBC']);
        }

        if (isset($map['ScreenCRC'])) {
            $model->screenCRC = screenCRC::fromMap($map['ScreenCRC']);
        }

        if (isset($map['ScreenEc'])) {
            $model->screenEc = screenEc::fromMap($map['ScreenEc']);
        }

        if (isset($map['ScreenGC'])) {
            $model->screenGC = screenGC::fromMap($map['ScreenGC']);
        }

        if (isset($map['ScreenLC'])) {
            $model->screenLC = screenLC::fromMap($map['ScreenLC']);
        }

        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                foreach ($map['URLList'] as $key1 => $value1) {
                    $model->URLList[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
