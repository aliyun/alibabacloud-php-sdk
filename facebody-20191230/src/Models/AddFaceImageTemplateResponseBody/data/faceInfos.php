<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceImageTemplateResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceImageTemplateResponseBody\data\faceInfos\faceRect;

class faceInfos extends Model
{
    /**
     * @var faceRect
     */
    public $faceRect;

    /**
     * @var string
     */
    public $templateFaceID;
    protected $_name = [
        'faceRect' => 'FaceRect',
        'templateFaceID' => 'TemplateFaceID',
    ];

    public function validate()
    {
        if (null !== $this->faceRect) {
            $this->faceRect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceRect) {
            $res['FaceRect'] = null !== $this->faceRect ? $this->faceRect->toArray($noStream) : $this->faceRect;
        }

        if (null !== $this->templateFaceID) {
            $res['TemplateFaceID'] = $this->templateFaceID;
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
        if (isset($map['FaceRect'])) {
            $model->faceRect = faceRect::fromMap($map['FaceRect']);
        }

        if (isset($map['TemplateFaceID'])) {
            $model->templateFaceID = $map['TemplateFaceID'];
        }

        return $model;
    }
}
