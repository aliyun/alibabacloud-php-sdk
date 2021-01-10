<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories\category\persons\person\faces;

use AlibabaCloud\Tea\Model;

class face extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $faceId;
    protected $_name = [
        'imageUrl' => 'ImageUrl',
        'faceId'   => 'FaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return face
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }

        return $model;
    }
}
