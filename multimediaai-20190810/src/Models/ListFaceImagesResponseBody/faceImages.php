<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFaceImagesResponseBody;

use AlibabaCloud\Tea\Model;

class faceImages extends Model
{
    /**
     * @var float[]
     */
    public $faceRectangle;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $faceImageId;
    protected $_name = [
        'faceRectangle' => 'FaceRectangle',
        'imageUrl'      => 'ImageUrl',
        'faceImageId'   => 'FaceImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceRectangle) {
            $res['FaceRectangle'] = $this->faceRectangle;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->faceImageId) {
            $res['FaceImageId'] = $this->faceImageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceRectangle'])) {
            if (!empty($map['FaceRectangle'])) {
                $model->faceRectangle = $map['FaceRectangle'];
            }
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['FaceImageId'])) {
            $model->faceImageId = $map['FaceImageId'];
        }

        return $model;
    }
}
