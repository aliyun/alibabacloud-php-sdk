<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeTableOcrRequest extends Model
{
    /**
     * @description 是否无线条
     *
     * @var bool
     */
    public $lineLess;

    /**
     * @description 是否需要自动旋转功能，默认需要
     *
     * @var bool
     */
    public $needRotate;

    /**
     * @description 是否跳过表格识别，如果没有检测到表格，可以设置"skip_detection":true
     *
     * @var bool
     */
    public $skipDetection;

    /**
     * @description 图片链接（长度不超 2048，不支持 base64）
     *
     * @var string
     */
    public $url;

    /**
     * @description 图片二进制字节流，最大10MB
     *
     * @var Stream
     */
    public $body;
    protected $_name = [
        'lineLess'      => 'LineLess',
        'needRotate'    => 'NeedRotate',
        'skipDetection' => 'SkipDetection',
        'url'           => 'Url',
        'body'          => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineLess) {
            $res['LineLess'] = $this->lineLess;
        }
        if (null !== $this->needRotate) {
            $res['NeedRotate'] = $this->needRotate;
        }
        if (null !== $this->skipDetection) {
            $res['SkipDetection'] = $this->skipDetection;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeTableOcrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineLess'])) {
            $model->lineLess = $map['LineLess'];
        }
        if (isset($map['NeedRotate'])) {
            $model->needRotate = $map['NeedRotate'];
        }
        if (isset($map['SkipDetection'])) {
            $model->skipDetection = $map['SkipDetection'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
