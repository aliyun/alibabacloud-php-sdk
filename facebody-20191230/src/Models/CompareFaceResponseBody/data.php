<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @description 信息提示信息，纯文字描述，目前支持质量分的提示信息
     *
     * @var string
     */
    public $messageTips;

    /**
     * @description 输入图像A的质量分
     *
     * @var float
     */
    public $qualityScoreA;

    /**
     * @description 输入图像A的质量分
     *
     * @var float
     */
    public $qualityScoreB;

    /**
     * @var int[]
     */
    public $rectAList;

    /**
     * @var int[]
     */
    public $rectBList;

    /**
     * @var float[]
     */
    public $thresholds;
    protected $_name = [
        'confidence'    => 'Confidence',
        'messageTips'   => 'MessageTips',
        'qualityScoreA' => 'QualityScoreA',
        'qualityScoreB' => 'QualityScoreB',
        'rectAList'     => 'RectAList',
        'rectBList'     => 'RectBList',
        'thresholds'    => 'Thresholds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->messageTips) {
            $res['MessageTips'] = $this->messageTips;
        }
        if (null !== $this->qualityScoreA) {
            $res['QualityScoreA'] = $this->qualityScoreA;
        }
        if (null !== $this->qualityScoreB) {
            $res['QualityScoreB'] = $this->qualityScoreB;
        }
        if (null !== $this->rectAList) {
            $res['RectAList'] = $this->rectAList;
        }
        if (null !== $this->rectBList) {
            $res['RectBList'] = $this->rectBList;
        }
        if (null !== $this->thresholds) {
            $res['Thresholds'] = $this->thresholds;
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
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['MessageTips'])) {
            $model->messageTips = $map['MessageTips'];
        }
        if (isset($map['QualityScoreA'])) {
            $model->qualityScoreA = $map['QualityScoreA'];
        }
        if (isset($map['QualityScoreB'])) {
            $model->qualityScoreB = $map['QualityScoreB'];
        }
        if (isset($map['RectAList'])) {
            if (!empty($map['RectAList'])) {
                $model->rectAList = $map['RectAList'];
            }
        }
        if (isset($map['RectBList'])) {
            if (!empty($map['RectBList'])) {
                $model->rectBList = $map['RectBList'];
            }
        }
        if (isset($map['Thresholds'])) {
            if (!empty($map['Thresholds'])) {
                $model->thresholds = $map['Thresholds'];
            }
        }

        return $model;
    }
}
