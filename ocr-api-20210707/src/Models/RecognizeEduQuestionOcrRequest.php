<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeEduQuestionOcrRequest extends Model
{
    /**
     * @description 图片链接（长度不超 1014，不支持 base64）
     *
     * @var string
     */
    public $url;

    /**
     * @description 是否需要自动旋转功能(结构化检测、混贴场景、教育相关场景会自动做旋转，无需设置)，返回角度信息
     *
     * @var bool
     */
    public $needRotate;
    protected $_name = [
        'url'        => 'Url',
        'needRotate' => 'NeedRotate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->needRotate) {
            $res['NeedRotate'] = $this->needRotate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeEduQuestionOcrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['NeedRotate'])) {
            $model->needRotate = $map['NeedRotate'];
        }

        return $model;
    }
}
