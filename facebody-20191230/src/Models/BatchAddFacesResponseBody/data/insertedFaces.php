<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesResponseBody\data;

use AlibabaCloud\Tea\Model;

class insertedFaces extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $faceId;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'faceId'   => 'FaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insertedFaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }

        return $model;
    }
}
