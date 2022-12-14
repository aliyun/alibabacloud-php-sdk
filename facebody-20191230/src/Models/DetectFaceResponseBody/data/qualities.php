<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponseBody\data;

use AlibabaCloud\Tea\Model;

class qualities extends Model
{
    /**
     * @description 1
     *
     * @var float[]
     */
    public $blurList;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $fnfList;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $glassList;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $illuList;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $maskList;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $noiseList;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $poseList;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $scoreList;
    protected $_name = [
        'blurList'  => 'BlurList',
        'fnfList'   => 'FnfList',
        'glassList' => 'GlassList',
        'illuList'  => 'IlluList',
        'maskList'  => 'MaskList',
        'noiseList' => 'NoiseList',
        'poseList'  => 'PoseList',
        'scoreList' => 'ScoreList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->scoreList) {
            $res['ScoreList'] = $this->scoreList;
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
        if (isset($map['ScoreList'])) {
            if (!empty($map['ScoreList'])) {
                $model->scoreList = $map['ScoreList'];
            }
        }

        return $model;
    }
}
