<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponseBody\data;

use AlibabaCloud\Tea\Model;

class qualities extends Model
{
    /**
     * @var float[]
     */
    public $scoreList;

    /**
     * @var float[]
     */
    public $blurList;

    /**
     * @var float[]
     */
    public $fnfList;

    /**
     * @var float[]
     */
    public $glassList;

    /**
     * @var float[]
     */
    public $illuList;

    /**
     * @var float[]
     */
    public $maskList;

    /**
     * @var float[]
     */
    public $noiseList;

    /**
     * @var float[]
     */
    public $poseList;
    protected $_name = [
        'scoreList' => 'ScoreList',
        'blurList'  => 'BlurList',
        'fnfList'   => 'FnfList',
        'glassList' => 'GlassList',
        'illuList'  => 'IlluList',
        'maskList'  => 'MaskList',
        'noiseList' => 'NoiseList',
        'poseList'  => 'PoseList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scoreList) {
            $res['ScoreList'] = $this->scoreList;
        }
        if (null !== $this->blurList) {
            $res['BlurList'] = $this->blurList;
        }
        if (null !== $this->fnfList) {
            $res['FnfList'] = $this->fnfList;
        }
        if (null !== $this->glassList) {
            $res['GlassList'] = $this->glassList;
        }
        if (null !== $this->illuList) {
            $res['IlluList'] = $this->illuList;
        }
        if (null !== $this->maskList) {
            $res['MaskList'] = $this->maskList;
        }
        if (null !== $this->noiseList) {
            $res['NoiseList'] = $this->noiseList;
        }
        if (null !== $this->poseList) {
            $res['PoseList'] = $this->poseList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScoreList'])) {
            if (!empty($map['ScoreList'])) {
                $model->scoreList = $map['ScoreList'];
            }
        }
        if (isset($map['BlurList'])) {
            if (!empty($map['BlurList'])) {
                $model->blurList = $map['BlurList'];
            }
        }
        if (isset($map['FnfList'])) {
            if (!empty($map['FnfList'])) {
                $model->fnfList = $map['FnfList'];
            }
        }
        if (isset($map['GlassList'])) {
            if (!empty($map['GlassList'])) {
                $model->glassList = $map['GlassList'];
            }
        }
        if (isset($map['IlluList'])) {
            if (!empty($map['IlluList'])) {
                $model->illuList = $map['IlluList'];
            }
        }
        if (isset($map['MaskList'])) {
            if (!empty($map['MaskList'])) {
                $model->maskList = $map['MaskList'];
            }
        }
        if (isset($map['NoiseList'])) {
            if (!empty($map['NoiseList'])) {
                $model->noiseList = $map['NoiseList'];
            }
        }
        if (isset($map['PoseList'])) {
            if (!empty($map['PoseList'])) {
                $model->poseList = $map['PoseList'];
            }
        }

        return $model;
    }
}
