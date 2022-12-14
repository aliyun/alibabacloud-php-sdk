<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 5
     *
     * @var string
     */
    public $faceId;

    /**
     * @example 99.79581
     *
     * @var float
     */
    public $qualitieScore;
    protected $_name = [
        'faceId'        => 'FaceId',
        'qualitieScore' => 'QualitieScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->qualitieScore) {
            $res['QualitieScore'] = $this->qualitieScore;
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
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['QualitieScore'])) {
            $model->qualitieScore = $map['QualitieScore'];
        }

        return $model;
    }
}
