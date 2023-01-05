<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlResponseBody\data;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlResponseBody\data\data\faceRects;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlResponseBody\data\data\landmarks;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $age;

    /**
     * @example 0.795382022857666
     *
     * @var float
     */
    public $blurScore;

    /**
     * @example 0.9999769926071167
     *
     * @var float
     */
    public $faceProbability;

    /**
     * @var faceRects
     */
    public $faceRects;

    /**
     * @example 1
     *
     * @var int
     */
    public $gender;

    /**
     * @example true
     *
     * @var bool
     */
    public $goodForLibrary;

    /**
     * @example true
     *
     * @var bool
     */
    public $goodForRecognition;

    /**
     * @var landmarks
     */
    public $landmarks;

    /**
     * @example 0.9867380261421204
     *
     * @var float
     */
    public $occlusionScore;

    /**
     * @example 0.9167874261423875
     *
     * @var float
     */
    public $poseScore;
    protected $_name = [
        'age'                => 'Age',
        'blurScore'          => 'BlurScore',
        'faceProbability'    => 'FaceProbability',
        'faceRects'          => 'FaceRects',
        'gender'             => 'Gender',
        'goodForLibrary'     => 'GoodForLibrary',
        'goodForRecognition' => 'GoodForRecognition',
        'landmarks'          => 'Landmarks',
        'occlusionScore'     => 'OcclusionScore',
        'poseScore'          => 'PoseScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->blurScore) {
            $res['BlurScore'] = $this->blurScore;
        }
        if (null !== $this->faceProbability) {
            $res['FaceProbability'] = $this->faceProbability;
        }
        if (null !== $this->faceRects) {
            $res['FaceRects'] = null !== $this->faceRects ? $this->faceRects->toMap() : null;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->goodForLibrary) {
            $res['GoodForLibrary'] = $this->goodForLibrary;
        }
        if (null !== $this->goodForRecognition) {
            $res['GoodForRecognition'] = $this->goodForRecognition;
        }
        if (null !== $this->landmarks) {
            $res['Landmarks'] = null !== $this->landmarks ? $this->landmarks->toMap() : null;
        }
        if (null !== $this->occlusionScore) {
            $res['OcclusionScore'] = $this->occlusionScore;
        }
        if (null !== $this->poseScore) {
            $res['PoseScore'] = $this->poseScore;
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
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['BlurScore'])) {
            $model->blurScore = $map['BlurScore'];
        }
        if (isset($map['FaceProbability'])) {
            $model->faceProbability = $map['FaceProbability'];
        }
        if (isset($map['FaceRects'])) {
            $model->faceRects = faceRects::fromMap($map['FaceRects']);
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['GoodForLibrary'])) {
            $model->goodForLibrary = $map['GoodForLibrary'];
        }
        if (isset($map['GoodForRecognition'])) {
            $model->goodForRecognition = $map['GoodForRecognition'];
        }
        if (isset($map['Landmarks'])) {
            $model->landmarks = landmarks::fromMap($map['Landmarks']);
        }
        if (isset($map['OcclusionScore'])) {
            $model->occlusionScore = $map['OcclusionScore'];
        }
        if (isset($map['PoseScore'])) {
            $model->poseScore = $map['PoseScore'];
        }

        return $model;
    }
}
