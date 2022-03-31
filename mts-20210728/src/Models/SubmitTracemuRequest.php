<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models;

use AlibabaCloud\Tea\Model;

class SubmitTracemuRequest extends Model
{
    /**
     * @description 密钥服务器uri
     *
     * @var string
     */
    public $keyUri;

    /**
     * @description ab流处理后的媒体id
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description m3u8文件输出oss地址
     *
     * @var string
     */
    public $output;

    /**
     * @description 溯源水印信息
     *
     * @var string
     */
    public $trace;
    protected $_name = [
        'keyUri'  => 'KeyUri',
        'mediaId' => 'MediaId',
        'output'  => 'Output',
        'trace'   => 'Trace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyUri) {
            $res['KeyUri'] = $this->keyUri;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->trace) {
            $res['Trace'] = $this->trace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTracemuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyUri'])) {
            $model->keyUri = $map['KeyUri'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Trace'])) {
            $model->trace = $map['Trace'];
        }

        return $model;
    }
}
