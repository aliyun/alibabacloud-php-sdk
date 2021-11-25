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
    public $externalId;

    /**
     * @var faceBoundary
     */
    public $faceBoundary;

    /**
     * @var string
     */
    public $faceId;

    /**
     * @var int
     */
    public $imageHeight;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var int
     */
    public $imageWidth;
    protected $_name = [
        'externalId'   => 'ExternalId',
        'faceBoundary' => 'FaceBoundary',
        'faceId'       => 'FaceId',
        'imageHeight'  => 'ImageHeight',
        'imageUri'     => 'ImageUri',
        'imageWidth'   => 'ImageWidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->faceBoundary) {
            $res['FaceBoundary'] = null !== $this->faceBoundary ? $this->faceBoundary->toMap() : null;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->imageHeight) {
            $res['ImageHeight'] = $this->imageHeight;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
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
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['FaceBoundary'])) {
            $model->faceBoundary = faceBoundary::fromMap($map['FaceBoundary']);
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['ImageHeight'])) {
            $model->imageHeight = $map['ImageHeight'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }

        return $model;
    }
}
