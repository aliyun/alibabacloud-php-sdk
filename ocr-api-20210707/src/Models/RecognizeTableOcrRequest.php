<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeTableOcrRequest extends Model
{
    /**
     * @example "false"
     *
     * @var string
     */
    public $isHandWriting;

    /**
     * @example false
     *
     * @var bool
     */
    public $lineLess;

    /**
     * @example true
     *
     * @var bool
     */
    public $needRotate;

    /**
     * @example false
     *
     * @var bool
     */
    public $skipDetection;

    /**
     * @example https://img.alicdn.com/tfs/TB1Wo7eXAvoK1RjSZFDXXXY3pXa-2512-3509.jpg
     *
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'isHandWriting' => 'IsHandWriting',
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
        if (null !== $this->isHandWriting) {
            $res['IsHandWriting'] = $this->isHandWriting;
        }
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
        if (isset($map['IsHandWriting'])) {
            $model->isHandWriting = $map['IsHandWriting'];
        }
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
