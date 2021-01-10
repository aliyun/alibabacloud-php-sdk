<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlResponseBody\data\data;

use AlibabaCloud\Tea\Model;

class faceRects extends Model
{
    /**
     * @var string[]
     */
    public $faceRectsData;
    protected $_name = [
        'faceRectsData' => 'FaceRectsData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceRectsData) {
            $res['FaceRectsData'] = $this->faceRectsData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceRects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceRectsData'])) {
            if (!empty($map['FaceRectsData'])) {
                $model->faceRectsData = $map['FaceRectsData'];
            }
        }

        return $model;
    }
}
