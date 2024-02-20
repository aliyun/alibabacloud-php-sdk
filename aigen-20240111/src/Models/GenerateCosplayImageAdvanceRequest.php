<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aigen\V20240111\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class GenerateCosplayImageAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx01.png
     *
     * @var Stream
     */
    public $faceImageUrlObject;

    /**
     * @example 0
     *
     * @var int
     */
    public $style;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx02.png
     *
     * @var Stream
     */
    public $templateImageUrlObject;
    protected $_name = [
        'faceImageUrlObject'     => 'FaceImageUrl',
        'style'                  => 'Style',
        'templateImageUrlObject' => 'TemplateImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceImageUrlObject) {
            $res['FaceImageUrl'] = $this->faceImageUrlObject;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->templateImageUrlObject) {
            $res['TemplateImageUrl'] = $this->templateImageUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateCosplayImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceImageUrl'])) {
            $model->faceImageUrlObject = $map['FaceImageUrl'];
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['TemplateImageUrl'])) {
            $model->templateImageUrlObject = $map['TemplateImageUrl'];
        }

        return $model;
    }
}
