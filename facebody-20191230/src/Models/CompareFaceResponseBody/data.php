<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 89.88594055175781
     *
     * @var float
     */
    public $confidence;

    /**
     * @example imageB quality score less threshold
     *
     * @var string
     */
    public $messageTips;

    /**
     * @example 97.26718139648438
     *
     * @var float
     */
    public $qualityScoreA;

    /**
     * @example 96.01641845703125
     *
     * @var float
     */
    public $qualityScoreB;

    /**
     * @description 1
     *
     * @var int[]
     */
    public $rectAList;

    /**
     * @description 1
     *
     * @var int[]
     */
    public $rectBList;

    /**
     * @description 1
     *
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
