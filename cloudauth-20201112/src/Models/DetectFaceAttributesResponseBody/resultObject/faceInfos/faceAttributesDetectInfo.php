<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models\DetectFaceAttributesResponseBody\resultObject\faceInfos;

use AlibabaCloud\SDK\Cloudauth\V20201112\Models\DetectFaceAttributesResponseBody\resultObject\faceInfos\faceAttributesDetectInfo\faceAttributes;
use AlibabaCloud\SDK\Cloudauth\V20201112\Models\DetectFaceAttributesResponseBody\resultObject\faceInfos\faceAttributesDetectInfo\faceRect;
use AlibabaCloud\Tea\Model;

class faceAttributesDetectInfo extends Model
{
    /**
     * @var faceRect
     */
    public $faceRect;

    /**
     * @var faceAttributes
     */
    public $faceAttributes;
    protected $_name = [
        'faceRect'       => 'FaceRect',
        'faceAttributes' => 'FaceAttributes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceRect) {
            $res['FaceRect'] = null !== $this->faceRect ? $this->faceRect->toMap() : null;
        }
        if (null !== $this->faceAttributes) {
            $res['FaceAttributes'] = null !== $this->faceAttributes ? $this->faceAttributes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceAttributesDetectInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceRect'])) {
            $model->faceRect = faceRect::fromMap($map['FaceRect']);
        }
        if (isset($map['FaceAttributes'])) {
            $model->faceAttributes = faceAttributes::fromMap($map['FaceAttributes']);
        }

        return $model;
    }
}
