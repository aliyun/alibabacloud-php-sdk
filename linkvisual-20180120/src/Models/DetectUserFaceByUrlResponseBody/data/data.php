<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlResponseBody\data;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlResponseBody\data\data\faceRects;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlResponseBody\data\data\landmarks;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $gender;

    /**
     * @var faceRects
     */
    public $faceRects;

    /**
     * @var int
     */
    public $age;

    /**
     * @var landmarks
     */
    public $landmarks;

    /**
     * @var float
     */
    public $faceProbability;
    protected $_name = [
        'gender'          => 'Gender',
        'faceRects'       => 'FaceRects',
        'age'             => 'Age',
        'landmarks'       => 'Landmarks',
        'faceProbability' => 'FaceProbability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->faceRects) {
            $res['FaceRects'] = null !== $this->faceRects ? $this->faceRects->toMap() : null;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->landmarks) {
            $res['Landmarks'] = null !== $this->landmarks ? $this->landmarks->toMap() : null;
        }
        if (null !== $this->faceProbability) {
            $res['FaceProbability'] = $this->faceProbability;
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
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['FaceRects'])) {
            $model->faceRects = faceRects::fromMap($map['FaceRects']);
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Landmarks'])) {
            $model->landmarks = landmarks::fromMap($map['Landmarks']);
        }
        if (isset($map['FaceProbability'])) {
            $model->faceProbability = $map['FaceProbability'];
        }

        return $model;
    }
}
