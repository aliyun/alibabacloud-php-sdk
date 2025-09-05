<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceWithMaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var int
     */
    public $isMaskA;

    /**
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
     * @var string
     */
    public $messageTips;

    /**
     * @var float
     */
    public $qualityScoreA;

    /**
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
        'confidence' => 'Confidence',
        'isMaskA' => 'IsMaskA',
        'isMaskB' => 'IsMaskB',
        'landmarksAList' => 'LandmarksAList',
        'landmarksBList' => 'LandmarksBList',
        'messageTips' => 'MessageTips',
        'qualityScoreA' => 'QualityScoreA',
        'qualityScoreB' => 'QualityScoreB',
        'rectAList' => 'RectAList',
        'rectBList' => 'RectBList',
        'thresholds' => 'Thresholds',
    ];

    public function validate()
    {
        if (\is_array($this->landmarksAList)) {
            Model::validateArray($this->landmarksAList);
        }
        if (\is_array($this->landmarksBList)) {
            Model::validateArray($this->landmarksBList);
        }
        if (\is_array($this->rectAList)) {
            Model::validateArray($this->rectAList);
        }
        if (\is_array($this->rectBList)) {
            Model::validateArray($this->rectBList);
        }
        if (\is_array($this->thresholds)) {
            Model::validateArray($this->thresholds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->landmarksAList)) {
                $res['LandmarksAList'] = [];
                $n1 = 0;
                foreach ($this->landmarksAList as $item1) {
                    $res['LandmarksAList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->landmarksBList) {
            if (\is_array($this->landmarksBList)) {
                $res['LandmarksBList'] = [];
                $n1 = 0;
                foreach ($this->landmarksBList as $item1) {
                    $res['LandmarksBList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->rectAList)) {
                $res['RectAList'] = [];
                $n1 = 0;
                foreach ($this->rectAList as $item1) {
                    $res['RectAList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rectBList) {
            if (\is_array($this->rectBList)) {
                $res['RectBList'] = [];
                $n1 = 0;
                foreach ($this->rectBList as $item1) {
                    $res['RectBList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->thresholds) {
            if (\is_array($this->thresholds)) {
                $res['Thresholds'] = [];
                $n1 = 0;
                foreach ($this->thresholds as $item1) {
                    $res['Thresholds'][$n1] = $item1;
                    ++$n1;
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
                $model->landmarksAList = [];
                $n1 = 0;
                foreach ($map['LandmarksAList'] as $item1) {
                    $model->landmarksAList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LandmarksBList'])) {
            if (!empty($map['LandmarksBList'])) {
                $model->landmarksBList = [];
                $n1 = 0;
                foreach ($map['LandmarksBList'] as $item1) {
                    $model->landmarksBList[$n1] = $item1;
                    ++$n1;
                }
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
                $model->rectAList = [];
                $n1 = 0;
                foreach ($map['RectAList'] as $item1) {
                    $model->rectAList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RectBList'])) {
            if (!empty($map['RectBList'])) {
                $model->rectBList = [];
                $n1 = 0;
                foreach ($map['RectBList'] as $item1) {
                    $model->rectBList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Thresholds'])) {
            if (!empty($map['Thresholds'])) {
                $model->thresholds = [];
                $n1 = 0;
                foreach ($map['Thresholds'] as $item1) {
                    $model->thresholds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
