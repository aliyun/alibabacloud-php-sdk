<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceAttributes;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceRect;
use AlibabaCloud\Tea\Model;

class faceAttributesDetectInfo extends Model
{
    /**
     * @var faceAttributes
     */
    public $faceAttributes;

    /**
     * @var faceRect
     */
    public $faceRect;
    protected $_name = [
        'faceAttributes' => 'FaceAttributes',
        'faceRect'       => 'FaceRect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceAttributes) {
            $res['FaceAttributes'] = null !== $this->faceAttributes ? $this->faceAttributes->toMap() : null;
        }
        if (null !== $this->faceRect) {
            $res['FaceRect'] = null !== $this->faceRect ? $this->faceRect->toMap() : null;
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
        if (isset($map['FaceAttributes'])) {
            $model->faceAttributes = faceAttributes::fromMap($map['FaceAttributes']);
        }
        if (isset($map['FaceRect'])) {
            $model->faceRect = faceRect::fromMap($map['FaceRect']);
        }

        return $model;
    }
}
