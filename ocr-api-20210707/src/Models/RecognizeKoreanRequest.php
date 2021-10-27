<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeKoreanRequest extends Model
{
    /**
     * @description 是否需要自动旋转功能(结构化检测、混贴场景、教育相关场景会自动做旋转，无需设置)，返回角度信息
     *
     * @var bool
     */
    public $needRotate;

    /**
     * @description 是否输出单字识别结果
     *
     * @var bool
     */
    public $outputCharInfo;

    /**
     * @description 是否输出表格识别结果，包含单元格信息
     *
     * @var bool
     */
    public $outputTable;

    /**
     * @description 图片链接（长度不超 1014，不支持 base64）
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'needRotate'     => 'NeedRotate',
        'outputCharInfo' => 'OutputCharInfo',
        'outputTable'    => 'OutputTable',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needRotate) {
            $res['NeedRotate'] = $this->needRotate;
        }
        if (null !== $this->outputCharInfo) {
            $res['OutputCharInfo'] = $this->outputCharInfo;
        }
        if (null !== $this->outputTable) {
            $res['OutputTable'] = $this->outputTable;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeKoreanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedRotate'])) {
            $model->needRotate = $map['NeedRotate'];
        }
        if (isset($map['OutputCharInfo'])) {
            $model->outputCharInfo = $map['OutputCharInfo'];
        }
        if (isset($map['OutputTable'])) {
            $model->outputTable = $map['OutputTable'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
