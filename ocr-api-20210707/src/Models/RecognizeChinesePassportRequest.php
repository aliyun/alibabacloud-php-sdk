<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeChinesePassportRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $outputFigure;

    /**
     * @example https://img.alicdn.com/imgextra/i2/O1CN01yaQKCT1PrUsTWqgSK_!!6000000001894-0-tps-271-186.jpg
     *
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'outputFigure' => 'OutputFigure',
        'url'          => 'Url',
        'body'         => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputFigure) {
            $res['OutputFigure'] = $this->outputFigure;
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
     * @return RecognizeChinesePassportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputFigure'])) {
            $model->outputFigure = $map['OutputFigure'];
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
