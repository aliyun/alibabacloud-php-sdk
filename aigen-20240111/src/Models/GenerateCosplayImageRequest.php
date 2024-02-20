<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aigen\V20240111\Models;

use AlibabaCloud\Tea\Model;

class GenerateCosplayImageRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx01.png
     *
     * @var string
     */
    public $faceImageUrl;

    /**
     * @example 0
     *
     * @var int
     */
    public $style;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx02.png
     *
     * @var string
     */
    public $templateImageUrl;
    protected $_name = [
        'faceImageUrl'     => 'FaceImageUrl',
        'style'            => 'Style',
        'templateImageUrl' => 'TemplateImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceImageUrl) {
            $res['FaceImageUrl'] = $this->faceImageUrl;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->templateImageUrl) {
            $res['TemplateImageUrl'] = $this->templateImageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateCosplayImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceImageUrl'])) {
            $model->faceImageUrl = $map['FaceImageUrl'];
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['TemplateImageUrl'])) {
            $model->templateImageUrl = $map['TemplateImageUrl'];
        }

        return $model;
    }
}
