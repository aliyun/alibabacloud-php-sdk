<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponseBody\data\qualities;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float[]
     */
    public $faceProbabilityList;

    /**
     * @var float[]
     */
    public $pupils;

    /**
     * @var int[]
     */
    public $faceRectangles;

    /**
     * @var int
     */
    public $faceCount;

    /**
     * @var float[]
     */
    public $poseList;

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
    protected $_name = [
        'faceProbabilityList' => 'FaceProbabilityList',
        'pupils'              => 'Pupils',
        'faceRectangles'      => 'FaceRectangles',
        'faceCount'           => 'FaceCount',
        'poseList'            => 'PoseList',
        'landmarks'           => 'Landmarks',
        'landmarkCount'       => 'LandmarkCount',
        'qualities'           => 'Qualities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceProbabilityList) {
            $res['FaceProbabilityList'] = $this->faceProbabilityList;
        }
        if (null !== $this->pupils) {
            $res['Pupils'] = $this->pupils;
        }
        if (null !== $this->faceRectangles) {
            $res['FaceRectangles'] = $this->faceRectangles;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->poseList) {
            $res['PoseList'] = $this->poseList;
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
        if (isset($map['FaceProbabilityList'])) {
            if (!empty($map['FaceProbabilityList'])) {
                $model->faceProbabilityList = $map['FaceProbabilityList'];
            }
        }
        if (isset($map['Pupils'])) {
            if (!empty($map['Pupils'])) {
                $model->pupils = $map['Pupils'];
            }
        }
        if (isset($map['FaceRectangles'])) {
            if (!empty($map['FaceRectangles'])) {
                $model->faceRectangles = $map['FaceRectangles'];
            }
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['PoseList'])) {
            if (!empty($map['PoseList'])) {
                $model->poseList = $map['PoseList'];
            }
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

        return $model;
    }
}
