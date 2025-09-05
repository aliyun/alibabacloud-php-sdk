<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponseBody\data\qualities;

class data extends Model
{
    /**
     * @var int
     */
    public $faceCount;

    /**
     * @var float[]
     */
    public $faceProbabilityList;

    /**
     * @var int[]
     */
    public $faceRectangles;

    /**
     * @var int
     */
    public $landmarkCount;

    /**
     * @var float[]
     */
    public $landmarkScore;

    /**
     * @var float[]
     */
    public $landmarks;

    /**
     * @var float[]
     */
    public $poseList;

    /**
     * @var float[]
     */
    public $pupils;

    /**
     * @var qualities
     */
    public $qualities;
    protected $_name = [
        'faceCount' => 'FaceCount',
        'faceProbabilityList' => 'FaceProbabilityList',
        'faceRectangles' => 'FaceRectangles',
        'landmarkCount' => 'LandmarkCount',
        'landmarkScore' => 'LandmarkScore',
        'landmarks' => 'Landmarks',
        'poseList' => 'PoseList',
        'pupils' => 'Pupils',
        'qualities' => 'Qualities',
    ];

    public function validate()
    {
        if (\is_array($this->faceProbabilityList)) {
            Model::validateArray($this->faceProbabilityList);
        }
        if (\is_array($this->faceRectangles)) {
            Model::validateArray($this->faceRectangles);
        }
        if (\is_array($this->landmarkScore)) {
            Model::validateArray($this->landmarkScore);
        }
        if (\is_array($this->landmarks)) {
            Model::validateArray($this->landmarks);
        }
        if (\is_array($this->poseList)) {
            Model::validateArray($this->poseList);
        }
        if (\is_array($this->pupils)) {
            Model::validateArray($this->pupils);
        }
        if (null !== $this->qualities) {
            $this->qualities->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }

        if (null !== $this->faceProbabilityList) {
            if (\is_array($this->faceProbabilityList)) {
                $res['FaceProbabilityList'] = [];
                $n1 = 0;
                foreach ($this->faceProbabilityList as $item1) {
                    $res['FaceProbabilityList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->faceRectangles) {
            if (\is_array($this->faceRectangles)) {
                $res['FaceRectangles'] = [];
                $n1 = 0;
                foreach ($this->faceRectangles as $item1) {
                    $res['FaceRectangles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->landmarkCount) {
            $res['LandmarkCount'] = $this->landmarkCount;
        }

        if (null !== $this->landmarkScore) {
            if (\is_array($this->landmarkScore)) {
                $res['LandmarkScore'] = [];
                $n1 = 0;
                foreach ($this->landmarkScore as $item1) {
                    $res['LandmarkScore'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->landmarks) {
            if (\is_array($this->landmarks)) {
                $res['Landmarks'] = [];
                $n1 = 0;
                foreach ($this->landmarks as $item1) {
                    $res['Landmarks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->poseList) {
            if (\is_array($this->poseList)) {
                $res['PoseList'] = [];
                $n1 = 0;
                foreach ($this->poseList as $item1) {
                    $res['PoseList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pupils) {
            if (\is_array($this->pupils)) {
                $res['Pupils'] = [];
                $n1 = 0;
                foreach ($this->pupils as $item1) {
                    $res['Pupils'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->qualities) {
            $res['Qualities'] = null !== $this->qualities ? $this->qualities->toArray($noStream) : $this->qualities;
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
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }

        if (isset($map['FaceProbabilityList'])) {
            if (!empty($map['FaceProbabilityList'])) {
                $model->faceProbabilityList = [];
                $n1 = 0;
                foreach ($map['FaceProbabilityList'] as $item1) {
                    $model->faceProbabilityList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FaceRectangles'])) {
            if (!empty($map['FaceRectangles'])) {
                $model->faceRectangles = [];
                $n1 = 0;
                foreach ($map['FaceRectangles'] as $item1) {
                    $model->faceRectangles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LandmarkCount'])) {
            $model->landmarkCount = $map['LandmarkCount'];
        }

        if (isset($map['LandmarkScore'])) {
            if (!empty($map['LandmarkScore'])) {
                $model->landmarkScore = [];
                $n1 = 0;
                foreach ($map['LandmarkScore'] as $item1) {
                    $model->landmarkScore[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Landmarks'])) {
            if (!empty($map['Landmarks'])) {
                $model->landmarks = [];
                $n1 = 0;
                foreach ($map['Landmarks'] as $item1) {
                    $model->landmarks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PoseList'])) {
            if (!empty($map['PoseList'])) {
                $model->poseList = [];
                $n1 = 0;
                foreach ($map['PoseList'] as $item1) {
                    $model->poseList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Pupils'])) {
            if (!empty($map['Pupils'])) {
                $model->pupils = [];
                $n1 = 0;
                foreach ($map['Pupils'] as $item1) {
                    $model->pupils[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Qualities'])) {
            $model->qualities = qualities::fromMap($map['Qualities']);
        }

        return $model;
    }
}
