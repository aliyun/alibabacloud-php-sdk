<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeIdcardRequest extends Model
{
    /**
     * @var bool
     */
    public $llmRec;

    /**
     * @var bool
     */
    public $outputFigure;

    /**
     * @var bool
     */
    public $outputQualityInfo;

    /**
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'llmRec' => 'Llm_rec',
        'outputFigure' => 'OutputFigure',
        'outputQualityInfo' => 'OutputQualityInfo',
        'url' => 'Url',
        'body' => 'body',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmRec) {
            $res['Llm_rec'] = $this->llmRec;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Llm_rec'])) {
            $model->llmRec = $map['Llm_rec'];
        }

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
