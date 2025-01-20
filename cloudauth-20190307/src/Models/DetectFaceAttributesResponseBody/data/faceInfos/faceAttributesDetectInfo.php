<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceAttributes;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponseBody\data\faceInfos\faceAttributesDetectInfo\faceRect;

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
        if (null !== $this->faceAttributes) {
            $this->faceAttributes->validate();
        }
        if (null !== $this->faceRect) {
            $this->faceRect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceAttributes) {
            $res['FaceAttributes'] = null !== $this->faceAttributes ? $this->faceAttributes->toArray($noStream) : $this->faceAttributes;
        }

        if (null !== $this->faceRect) {
            $res['FaceRect'] = null !== $this->faceRect ? $this->faceRect->toArray($noStream) : $this->faceRect;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
