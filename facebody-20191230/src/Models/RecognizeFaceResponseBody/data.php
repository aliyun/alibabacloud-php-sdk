<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceResponseBody\data\qualities;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 1
     *
     * @var int[]
     */
    public $ageList;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $beautyList;

    /**
     * @example 1024
     *
     * @var int
     */
    public $denseFeatureLength;

    /**
     * @description 1
     *
     * @var string[]
     */
    public $denseFeatures;

    /**
     * @description 1
     *
     * @var int[]
     */
    public $expressions;

    /**
     * @example 1
     *
     * @var int
     */
    public $faceCount;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $faceProbabilityList;

    /**
     * @description 1
     *
     * @var int[]
     */
    public $faceRectangles;

    /**
     * @description 1
     *
     * @var int[]
     */
    public $genderList;

    /**
     * @description 1
     *
     * @var int[]
     */
    public $glasses;

    /**
     * @description 1
     *
     * @var int[]
     */
    public $hatList;

    /**
     * @example 105
     *
     * @var int
     */
    public $landmarkCount;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $landmarks;

    /**
     * @description 1
     *
     * @var int[]
     */
    public $masks;

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
    public $pupils;

    /**
     * @var qualities
     */
    public $qualities;
    protected $_name = [
        'ageList'             => 'AgeList',
        'beautyList'          => 'BeautyList',
        'denseFeatureLength'  => 'DenseFeatureLength',
        'denseFeatures'       => 'DenseFeatures',
        'expressions'         => 'Expressions',
        'faceCount'           => 'FaceCount',
        'faceProbabilityList' => 'FaceProbabilityList',
        'faceRectangles'      => 'FaceRectangles',
        'genderList'          => 'GenderList',
        'glasses'             => 'Glasses',
        'hatList'             => 'HatList',
        'landmarkCount'       => 'LandmarkCount',
        'landmarks'           => 'Landmarks',
        'masks'               => 'Masks',
        'poseList'            => 'PoseList',
        'pupils'              => 'Pupils',
        'qualities'           => 'Qualities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ageList) {
            $res['AgeList'] = $this->ageList;
        }
        if (null !== $this->beautyList) {
            $res['BeautyList'] = $this->beautyList;
        }
        if (null !== $this->denseFeatureLength) {
            $res['DenseFeatureLength'] = $this->denseFeatureLength;
        }
        if (null !== $this->denseFeatures) {
            $res['DenseFeatures'] = $this->denseFeatures;
        }
        if (null !== $this->expressions) {
            $res['Expressions'] = $this->expressions;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->faceProbabilityList) {
            $res['FaceProbabilityList'] = $this->faceProbabilityList;
        }
        if (null !== $this->faceRectangles) {
            $res['FaceRectangles'] = $this->faceRectangles;
        }
        if (null !== $this->genderList) {
            $res['GenderList'] = $this->genderList;
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = $this->glasses;
        }
        if (null !== $this->hatList) {
            $res['HatList'] = $this->hatList;
        }
        if (null !== $this->landmarkCount) {
            $res['LandmarkCount'] = $this->landmarkCount;
        }
        if (null !== $this->landmarks) {
            $res['Landmarks'] = $this->landmarks;
        }
        if (null !== $this->masks) {
            $res['Masks'] = $this->masks;
        }
        if (null !== $this->poseList) {
            $res['PoseList'] = $this->poseList;
        }
        if (null !== $this->pupils) {
            $res['Pupils'] = $this->pupils;
        }
        if (null !== $this->qualities) {
            $res['Qualities'] = null !== $this->qualities ? $this->qualities->toMap() : null;
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
        if (isset($map['AgeList'])) {
            if (!empty($map['AgeList'])) {
                $model->ageList = $map['AgeList'];
            }
        }
        if (isset($map['BeautyList'])) {
            if (!empty($map['BeautyList'])) {
                $model->beautyList = $map['BeautyList'];
            }
        }
        if (isset($map['DenseFeatureLength'])) {
            $model->denseFeatureLength = $map['DenseFeatureLength'];
        }
        if (isset($map['DenseFeatures'])) {
            if (!empty($map['DenseFeatures'])) {
                $model->denseFeatures = $map['DenseFeatures'];
            }
        }
        if (isset($map['Expressions'])) {
            if (!empty($map['Expressions'])) {
                $model->expressions = $map['Expressions'];
            }
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['FaceProbabilityList'])) {
            if (!empty($map['FaceProbabilityList'])) {
                $model->faceProbabilityList = $map['FaceProbabilityList'];
            }
        }
        if (isset($map['FaceRectangles'])) {
            if (!empty($map['FaceRectangles'])) {
                $model->faceRectangles = $map['FaceRectangles'];
            }
        }
        if (isset($map['GenderList'])) {
            if (!empty($map['GenderList'])) {
                $model->genderList = $map['GenderList'];
            }
        }
        if (isset($map['Glasses'])) {
            if (!empty($map['Glasses'])) {
                $model->glasses = $map['Glasses'];
            }
        }
        if (isset($map['HatList'])) {
            if (!empty($map['HatList'])) {
                $model->hatList = $map['HatList'];
            }
        }
        if (isset($map['LandmarkCount'])) {
            $model->landmarkCount = $map['LandmarkCount'];
        }
        if (isset($map['Landmarks'])) {
            if (!empty($map['Landmarks'])) {
                $model->landmarks = $map['Landmarks'];
            }
        }
        if (isset($map['Masks'])) {
            if (!empty($map['Masks'])) {
                $model->masks = $map['Masks'];
            }
        }
        if (isset($map['PoseList'])) {
            if (!empty($map['PoseList'])) {
                $model->poseList = $map['PoseList'];
            }
        }
        if (isset($map['Pupils'])) {
            if (!empty($map['Pupils'])) {
                $model->pupils = $map['Pupils'];
            }
        }
        if (isset($map['Qualities'])) {
            $model->qualities = qualities::fromMap($map['Qualities']);
        }

        return $model;
    }
}
