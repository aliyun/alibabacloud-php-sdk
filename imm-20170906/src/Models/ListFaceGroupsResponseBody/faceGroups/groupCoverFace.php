<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListFaceGroupsResponseBody\faceGroups;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListFaceGroupsResponseBody\faceGroups\groupCoverFace\faceBoundary;
use AlibabaCloud\Tea\Model;

class groupCoverFace extends Model
{
    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $faceId;

    /**
     * @var faceBoundary
     */
    public $faceBoundary;
    protected $_name = [
        'imageUri'     => 'ImageUri',
        'faceId'       => 'FaceId',
        'faceBoundary' => 'FaceBoundary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->faceBoundary) {
            $res['FaceBoundary'] = null !== $this->faceBoundary ? $this->faceBoundary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupCoverFace
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['FaceBoundary'])) {
            $model->faceBoundary = faceBoundary::fromMap($map['FaceBoundary']);
        }

        return $model;
    }
}
