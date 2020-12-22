<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceResponseBody\data\qualities;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float[]
     */
    public $pupils;

    /**
     * @var int[]
     */
    public $genderList;

    /**
     * @var int[]
     */
    public $expressions;

    /**
     * @var string[]
     */
    public $denseFeatures;

    /**
     * @var int
     */
    public $faceCount;

    /**
     * @var float[]
     */
    public $landmarks;

    /**
     * @var int
     */
    public $landmarkCount;

    /**
     * @var qualities
     */
    public $qualities;

    /**
     * @var float[]
     */
    public $beuatyList;

    /**
     * @var int[]
     */
    public $hatList;

    /**
     * @var float[]
     */
    public $faceProbabilityList;

    /**
     * @var int[]
     */
    public $glasses;

    /**
     * @var int[]
     */
    public $faceRectangles;

    /**
     * @var float[]
     */
    public $poseList;

    /**
     * @var int[]
     */
    public $ageList;

    /**
     * @var int
     */
    public $denseFeatureLength;
    protected $_name = [
        'pupils'              => 'Pupils',
        'genderList'          => 'GenderList',
        'expressions'         => 'Expressions',
        'denseFeatures'       => 'DenseFeatures',
        'faceCount'           => 'FaceCount',
        'landmarks'           => 'Landmarks',
        'landmarkCount'       => 'LandmarkCount',
        'qualities'           => 'Qualities',
        'beuatyList'          => 'BeuatyList',
        'hatList'             => 'HatList',
        'faceProbabilityList' => 'FaceProbabilityList',
        'glasses'             => 'Glasses',
        'faceRectangles'      => 'FaceRectangles',
        'poseList'            => 'PoseList',
        'ageList'             => 'AgeList',
        'denseFeatureLength'  => 'DenseFeatureLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pupils) {
            $res['Pupils'] = $this->pupils;
        }
        if (null !== $this->genderList) {
            $res['GenderList'] = $this->genderList;
        }
        if (null !== $this->expressions) {
            $res['Expressions'] = $this->expressions;
        }
        if (null !== $this->denseFeatures) {
            $res['DenseFeatures'] = $this->denseFeatures;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->landmarks) {
            $res['Landmarks'] = $this->landmarks;
        }
        if (null !== $this->landmarkCount) {
            $res['LandmarkCount'] = $this->landmarkCount;
        }
        if (null !== $this->qualities) {
            $res['Qualities'] = null !== $this->qualities ? $this->qualities->toMap() : null;
        }
        if (null !== $this->beuatyList) {
            $res['BeuatyList'] = $this->beuatyList;
        }
        if (null !== $this->hatList) {
            $res['HatList'] = $this->hatList;
        }
        if (null !== $this->faceProbabilityList) {
            $res['FaceProbabilityList'] = $this->faceProbabilityList;
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = $this->glasses;
        }
        if (null !== $this->faceRectangles) {
            $res['FaceRectangles'] = $this->faceRectangles;
        }
        if (null !== $this->poseList) {
            $res['PoseList'] = $this->poseList;
        }
        if (null !== $this->ageList) {
            $res['AgeList'] = $this->ageList;
        }
        if (null !== $this->denseFeatureLength) {
            $res['DenseFeatureLength'] = $this->denseFeatureLength;
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
        if (isset($map['Pupils'])) {
            if (!empty($map['Pupils'])) {
                $model->pupils = $map['Pupils'];
            }
        }
        if (isset($map['GenderList'])) {
            if (!empty($map['GenderList'])) {
                $model->genderList = $map['GenderList'];
            }
        }
        if (isset($map['Expressions'])) {
            if (!empty($map['Expressions'])) {
                $model->expressions = $map['Expressions'];
            }
        }
        if (isset($map['DenseFeatures'])) {
            if (!empty($map['DenseFeatures'])) {
                $model->denseFeatures = $map['DenseFeatures'];
            }
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['Landmarks'])) {
            if (!empty($map['Landmarks'])) {
                $model->landmarks = $map['Landmarks'];
            }
        }
        if (isset($map['LandmarkCount'])) {
            $model->landmarkCount = $map['LandmarkCount'];
        }
        if (isset($map['Qualities'])) {
            $model->qualities = qualities::fromMap($map['Qualities']);
        }
        if (isset($map['BeuatyList'])) {
            if (!empty($map['BeuatyList'])) {
                $model->beuatyList = $map['BeuatyList'];
            }
        }
        if (isset($map['HatList'])) {
            if (!empty($map['HatList'])) {
                $model->hatList = $map['HatList'];
            }
        }
        if (isset($map['FaceProbabilityList'])) {
            if (!empty($map['FaceProbabilityList'])) {
                $model->faceProbabilityList = $map['FaceProbabilityList'];
            }
        }
        if (isset($map['Glasses'])) {
            if (!empty($map['Glasses'])) {
                $model->glasses = $map['Glasses'];
            }
        }
        if (isset($map['FaceRectangles'])) {
            if (!empty($map['FaceRectangles'])) {
                $model->faceRectangles = $map['FaceRectangles'];
            }
        }
        if (isset($map['PoseList'])) {
            if (!empty($map['PoseList'])) {
                $model->poseList = $map['PoseList'];
            }
        }
        if (isset($map['AgeList'])) {
            if (!empty($map['AgeList'])) {
                $model->ageList = $map['AgeList'];
            }
        }
        if (isset($map['DenseFeatureLength'])) {
            $model->denseFeatureLength = $map['DenseFeatureLength'];
        }

        return $model;
    }
}
