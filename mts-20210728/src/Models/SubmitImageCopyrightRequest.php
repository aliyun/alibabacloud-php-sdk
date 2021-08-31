<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models;

use AlibabaCloud\Tea\Model;

class SubmitImageCopyrightRequest extends Model
{
    /**
     * @description 需要加水印的图片oss地址(Input和url二选一)
     *
     * @var string
     */
    public $input;

    /**
     * @description 水印强度
     *
     * @var int
     */
    public $level;

    /**
     * @description 水印信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 水印图片输出oss地址
     *
     * @var string
     */
    public $output;

    /**
     * @description 外部url链接(Input和url二选一)
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'input'   => 'Input',
        'level'   => 'Level',
        'message' => 'Message',
        'output'  => 'Output',
        'url'     => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitImageCopyrightRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
