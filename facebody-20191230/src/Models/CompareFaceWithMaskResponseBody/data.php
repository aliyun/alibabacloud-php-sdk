<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceWithMaskResponseBody;

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
     * @example 0
     *
     * @var int
     */
    public $isMaskA;

    /**
     * @example 1
     *
     * @var int
     */
    public $isMaskB;

    /**
     * @var int[]
     */
    public $landmarksAList;

    /**
     * @var int[]
     */
    public $landmarksBList;

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
     * @example 96.01641082763672
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
     * @var int[]
     */
    public $thresholds;
    protected $_name = [
        'confidence'     => 'Confidence',
        'isMaskA'        => 'IsMaskA',
        'isMaskB'        => 'IsMaskB',
        'landmarksAList' => 'LandmarksAList',
        'landmarksBList' => 'LandmarksBList',
        'messageTips'    => 'MessageTips',
        'qualityScoreA'  => 'QualityScoreA',
        'qualityScoreB'  => 'QualityScoreB',
        'rectAList'      => 'RectAList',
        'rectBList'      => 'RectBList',
        'thresholds'     => 'Thresholds',
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
        if (null !== $this->isMaskA) {
            $res['IsMaskA'] = $this->isMaskA;
        }
        if (null !== $this->isMaskB) {
            $res['IsMaskB'] = $this->isMaskB;
        }
        if (null !== $this->landmarksAList) {
            $res['LandmarksAList'] = $this->landmarksAList;
        }
        if (null !== $this->landmarksBList) {
            $res['LandmarksBList'] = $this->landmarksBList;
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
        if (isset($map['IsMaskA'])) {
            $model->isMaskA = $map['IsMaskA'];
        }
        if (isset($map['IsMaskB'])) {
            $model->isMaskB = $map['IsMaskB'];
        }
        if (isset($map['LandmarksAList'])) {
            if (!empty($map['LandmarksAList'])) {
                $model->landmarksAList = $map['LandmarksAList'];
            }
        }
        if (isset($map['LandmarksBList'])) {
            if (!empty($map['LandmarksBList'])) {
                $model->landmarksBList = $map['LandmarksBList'];
            }
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
