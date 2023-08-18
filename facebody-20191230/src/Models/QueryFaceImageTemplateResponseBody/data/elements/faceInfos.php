<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\QueryFaceImageTemplateResponseBody\data\elements;

use AlibabaCloud\SDK\Facebody\V20191230\Models\QueryFaceImageTemplateResponseBody\data\elements\faceInfos\faceRect;
use AlibabaCloud\Tea\Model;

class faceInfos extends Model
{
    /**
     * @var faceRect
     */
    public $faceRect;

    /**
     * @example 6cd509ea-54fa-4730-8e9d-c94cadcda048
     *
     * @var string
     */
    public $templateFaceID;
    protected $_name = [
        'faceRect'       => 'FaceRect',
        'templateFaceID' => 'TemplateFaceID',
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
        if (null !== $this->templateFaceID) {
            $res['TemplateFaceID'] = $this->templateFaceID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceInfos
     */
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
