<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponseBody\data\qualities;
use AlibabaCloud\Tea\Model;

class data extends Model
{
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
     * @example 105
     *
     * @var int
     */
    public $landmarkCount;

    /**
     * @var float[]
     */
    public $landmarkScore;

    /**
     * @description 1
     *
     * @var float[]
     */
    public $landmarks;

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
        'faceCount'           => 'FaceCount',
        'faceProbabilityList' => 'FaceProbabilityList',
        'faceRectangles'      => 'FaceRectangles',
        'landmarkCount'       => 'LandmarkCount',
        'landmarkScore'       => 'LandmarkScore',
        'landmarks'           => 'Landmarks',
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
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->faceProbabilityList) {
            $res['FaceProbabilityList'] = $this->faceProbabilityList;
        }
        if (null !== $this->faceRectangles) {
            $res['FaceRectangles'] = $this->faceRectangles;
        }
        if (null !== $this->landmarkCount) {
            $res['LandmarkCount'] = $this->landmarkCount;
        }
        if (null !== $this->landmarkScore) {
            $res['LandmarkScore'] = $this->landmarkScore;
        }
        if (null !== $this->landmarks) {
            $res['Landmarks'] = $this->landmarks;
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
        if (isset($map['LandmarkCount'])) {
            $model->landmarkCount = $map['LandmarkCount'];
        }
        if (isset($map['LandmarkScore'])) {
            if (!empty($map['LandmarkScore'])) {
                $model->landmarkScore = $map['LandmarkScore'];
            }
        }
        if (isset($map['Landmarks'])) {
            if (!empty($map['Landmarks'])) {
                $model->landmarks = $map['Landmarks'];
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
