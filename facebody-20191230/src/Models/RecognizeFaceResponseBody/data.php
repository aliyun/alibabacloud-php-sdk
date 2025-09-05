<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceResponseBody\data\qualities;

class data extends Model
{
    /**
     * @var int[]
     */
    public $ageList;

    /**
     * @var float[]
     */
    public $beautyList;

    /**
     * @var int
     */
    public $denseFeatureLength;

    /**
     * @var string[]
     */
    public $denseFeatures;

    /**
     * @var int[]
     */
    public $expressions;

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
     * @var int[]
     */
    public $genderList;

    /**
     * @var int[]
     */
    public $glasses;

    /**
     * @var int[]
     */
    public $hatList;

    /**
     * @var int
     */
    public $landmarkCount;

    /**
     * @var float[]
     */
    public $landmarks;

    /**
     * @var int[]
     */
    public $masks;

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
        'ageList' => 'AgeList',
        'beautyList' => 'BeautyList',
        'denseFeatureLength' => 'DenseFeatureLength',
        'denseFeatures' => 'DenseFeatures',
        'expressions' => 'Expressions',
        'faceCount' => 'FaceCount',
        'faceProbabilityList' => 'FaceProbabilityList',
        'faceRectangles' => 'FaceRectangles',
        'genderList' => 'GenderList',
        'glasses' => 'Glasses',
        'hatList' => 'HatList',
        'landmarkCount' => 'LandmarkCount',
        'landmarks' => 'Landmarks',
        'masks' => 'Masks',
        'poseList' => 'PoseList',
        'pupils' => 'Pupils',
        'qualities' => 'Qualities',
    ];

    public function validate()
    {
        if (\is_array($this->ageList)) {
            Model::validateArray($this->ageList);
        }
        if (\is_array($this->beautyList)) {
            Model::validateArray($this->beautyList);
        }
        if (\is_array($this->denseFeatures)) {
            Model::validateArray($this->denseFeatures);
        }
        if (\is_array($this->expressions)) {
            Model::validateArray($this->expressions);
        }
        if (\is_array($this->faceProbabilityList)) {
            Model::validateArray($this->faceProbabilityList);
        }
        if (\is_array($this->faceRectangles)) {
            Model::validateArray($this->faceRectangles);
        }
        if (\is_array($this->genderList)) {
            Model::validateArray($this->genderList);
        }
        if (\is_array($this->glasses)) {
            Model::validateArray($this->glasses);
        }
        if (\is_array($this->hatList)) {
            Model::validateArray($this->hatList);
        }
        if (\is_array($this->landmarks)) {
            Model::validateArray($this->landmarks);
        }
        if (\is_array($this->masks)) {
            Model::validateArray($this->masks);
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
        if (null !== $this->ageList) {
            if (\is_array($this->ageList)) {
                $res['AgeList'] = [];
                $n1 = 0;
                foreach ($this->ageList as $item1) {
                    $res['AgeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->beautyList) {
            if (\is_array($this->beautyList)) {
                $res['BeautyList'] = [];
                $n1 = 0;
                foreach ($this->beautyList as $item1) {
                    $res['BeautyList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->denseFeatureLength) {
            $res['DenseFeatureLength'] = $this->denseFeatureLength;
        }

        if (null !== $this->denseFeatures) {
            if (\is_array($this->denseFeatures)) {
                $res['DenseFeatures'] = [];
                $n1 = 0;
                foreach ($this->denseFeatures as $item1) {
                    $res['DenseFeatures'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expressions) {
            if (\is_array($this->expressions)) {
                $res['Expressions'] = [];
                $n1 = 0;
                foreach ($this->expressions as $item1) {
                    $res['Expressions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (null !== $this->genderList) {
            if (\is_array($this->genderList)) {
                $res['GenderList'] = [];
                $n1 = 0;
                foreach ($this->genderList as $item1) {
                    $res['GenderList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->glasses) {
            if (\is_array($this->glasses)) {
                $res['Glasses'] = [];
                $n1 = 0;
                foreach ($this->glasses as $item1) {
                    $res['Glasses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hatList) {
            if (\is_array($this->hatList)) {
                $res['HatList'] = [];
                $n1 = 0;
                foreach ($this->hatList as $item1) {
                    $res['HatList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->landmarkCount) {
            $res['LandmarkCount'] = $this->landmarkCount;
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

        if (null !== $this->masks) {
            if (\is_array($this->masks)) {
                $res['Masks'] = [];
                $n1 = 0;
                foreach ($this->masks as $item1) {
                    $res['Masks'][$n1] = $item1;
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
        if (isset($map['AgeList'])) {
            if (!empty($map['AgeList'])) {
                $model->ageList = [];
                $n1 = 0;
                foreach ($map['AgeList'] as $item1) {
                    $model->ageList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BeautyList'])) {
            if (!empty($map['BeautyList'])) {
                $model->beautyList = [];
                $n1 = 0;
                foreach ($map['BeautyList'] as $item1) {
                    $model->beautyList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DenseFeatureLength'])) {
            $model->denseFeatureLength = $map['DenseFeatureLength'];
        }

        if (isset($map['DenseFeatures'])) {
            if (!empty($map['DenseFeatures'])) {
                $model->denseFeatures = [];
                $n1 = 0;
                foreach ($map['DenseFeatures'] as $item1) {
                    $model->denseFeatures[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Expressions'])) {
            if (!empty($map['Expressions'])) {
                $model->expressions = [];
                $n1 = 0;
                foreach ($map['Expressions'] as $item1) {
                    $model->expressions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (isset($map['GenderList'])) {
            if (!empty($map['GenderList'])) {
                $model->genderList = [];
                $n1 = 0;
                foreach ($map['GenderList'] as $item1) {
                    $model->genderList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Glasses'])) {
            if (!empty($map['Glasses'])) {
                $model->glasses = [];
                $n1 = 0;
                foreach ($map['Glasses'] as $item1) {
                    $model->glasses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HatList'])) {
            if (!empty($map['HatList'])) {
                $model->hatList = [];
                $n1 = 0;
                foreach ($map['HatList'] as $item1) {
                    $model->hatList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LandmarkCount'])) {
            $model->landmarkCount = $map['LandmarkCount'];
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

        if (isset($map['Masks'])) {
            if (!empty($map['Masks'])) {
                $model->masks = [];
                $n1 = 0;
                foreach ($map['Masks'] as $item1) {
                    $model->masks[$n1] = $item1;
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
