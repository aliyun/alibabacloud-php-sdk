<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class MergeVideoModelFaceAdvanceRequest extends Model
{
    /**
     * @example https://invi-label.oss-cn-shanghai.aliyuncs.com/label/temp/faceswap/ref/ref.jpg
     *
     * @var Stream
     */
    public $faceImageURLObject;

    /**
     * @example 3bf2418c-7adf-4002-a9d6-2f7cf1889c0d
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'faceImageURLObject' => 'FaceImageURL',
        'templateId'         => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceImageURLObject) {
            $res['FaceImageURL'] = $this->faceImageURLObject;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeVideoModelFaceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceImageURL'])) {
            $model->faceImageURLObject = $map['FaceImageURL'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
