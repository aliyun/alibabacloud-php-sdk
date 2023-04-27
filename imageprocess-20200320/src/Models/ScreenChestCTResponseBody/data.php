<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\analyzeChestVessel;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\CACS;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\calcBMD;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\covid;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectLiverSteatosis;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectLymph;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectPdac;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectRibFracture;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\lungNodule;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenEc;
use AlibabaCloud\Tea\Model;

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
     * @example Failed to execute [cacs,covid]
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @var lungNodule
     */
    public $lungNodule;

    /**
     * @example https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/coronacases_org_001/1.2.112.92121.1.1689.19.2.2020040219072764787101585825****.dcm
     *
     * @var mixed[]
     */
    public $nestedUrlList;

    /**
     * @var screenEc
     */
    public $screenEc;

    /**
     * @example https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/coronacases_org_001/1.2.112.92121.1.1689.19.2.2020040219072764787101585825****.dcm
     *
     * @var mixed[]
     */
    public $URLList;
    protected $_name = [
        'analyzeChestVessel'   => 'AnalyzeChestVessel',
        'CACS'                 => 'CACS',
        'calcBMD'              => 'CalcBMD',
        'covid'                => 'Covid',
        'detectLiverSteatosis' => 'DetectLiverSteatosis',
        'detectLymph'          => 'DetectLymph',
        'detectPdac'           => 'DetectPdac',
        'detectRibFracture'    => 'DetectRibFracture',
        'errorMessage'         => 'ErrorMessage',
        'lungNodule'           => 'LungNodule',
        'nestedUrlList'        => 'NestedUrlList',
        'screenEc'             => 'ScreenEc',
        'URLList'              => 'URLList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyzeChestVessel) {
            $res['AnalyzeChestVessel'] = null !== $this->analyzeChestVessel ? $this->analyzeChestVessel->toMap() : null;
        }
        if (null !== $this->CACS) {
            $res['CACS'] = null !== $this->CACS ? $this->CACS->toMap() : null;
        }
        if (null !== $this->calcBMD) {
            $res['CalcBMD'] = null !== $this->calcBMD ? $this->calcBMD->toMap() : null;
        }
        if (null !== $this->covid) {
            $res['Covid'] = null !== $this->covid ? $this->covid->toMap() : null;
        }
        if (null !== $this->detectLiverSteatosis) {
            $res['DetectLiverSteatosis'] = null !== $this->detectLiverSteatosis ? $this->detectLiverSteatosis->toMap() : null;
        }
        if (null !== $this->detectLymph) {
            $res['DetectLymph'] = null !== $this->detectLymph ? $this->detectLymph->toMap() : null;
        }
        if (null !== $this->detectPdac) {
            $res['DetectPdac'] = null !== $this->detectPdac ? $this->detectPdac->toMap() : null;
        }
        if (null !== $this->detectRibFracture) {
            $res['DetectRibFracture'] = null !== $this->detectRibFracture ? $this->detectRibFracture->toMap() : null;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->lungNodule) {
            $res['LungNodule'] = null !== $this->lungNodule ? $this->lungNodule->toMap() : null;
        }
        if (null !== $this->nestedUrlList) {
            $res['NestedUrlList'] = $this->nestedUrlList;
        }
        if (null !== $this->screenEc) {
            $res['ScreenEc'] = null !== $this->screenEc ? $this->screenEc->toMap() : null;
        }
        if (null !== $this->URLList) {
            $res['URLList'] = $this->URLList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
        if (isset($map['NestedUrlList'])) {
            $model->nestedUrlList = $map['NestedUrlList'];
        }
        if (isset($map['ScreenEc'])) {
            $model->screenEc = screenEc::fromMap($map['ScreenEc']);
        }
        if (isset($map['URLList'])) {
            $model->URLList = $map['URLList'];
        }

        return $model;
    }
}
