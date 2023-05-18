<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeIdcardRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $outputFigure;

    /**
     * @example false
     *
     * @var bool
     */
    public $outputQualityInfo;

    /**
     * @example https://img.alicdn.com/tfs/TB1q5IeXAvoK1RjSZFNXXcxMVXa-483-307.jpg
     *
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'outputFigure'      => 'OutputFigure',
        'outputQualityInfo' => 'OutputQualityInfo',
        'url'               => 'Url',
        'body'              => 'body',
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
        if (null !== $this->outputQualityInfo) {
            $res['OutputQualityInfo'] = $this->outputQualityInfo;
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
     * @return RecognizeIdcardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputFigure'])) {
            $model->outputFigure = $map['OutputFigure'];
        }
        if (isset($map['OutputQualityInfo'])) {
            $model->outputQualityInfo = $map['OutputQualityInfo'];
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
