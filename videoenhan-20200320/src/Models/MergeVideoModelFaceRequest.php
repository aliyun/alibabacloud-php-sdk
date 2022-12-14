<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class MergeVideoModelFaceRequest extends Model
{
    /**
     * @example https://invi-label.oss-cn-shanghai.aliyuncs.com/label/temp/faceswap/ref/ref.jpg
     *
     * @var string
     */
    public $faceImageURL;

    /**
     * @example 3bf2418c-7adf-4002-a9d6-2f7cf1889c0d
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'faceImageURL' => 'FaceImageURL',
        'templateId'   => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceImageURL) {
            $res['FaceImageURL'] = $this->faceImageURL;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeVideoModelFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceImageURL'])) {
            $model->faceImageURL = $map['FaceImageURL'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
