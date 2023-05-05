<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DocumentAutoml\V20221229\Models;

use AlibabaCloud\Tea\Model;

class PredictClassifierModelRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoPrediction;

    /**
     * @var bool
     */
    public $binaryToText;

    /**
     * @example data:image/png;base64,xxxxx
     *
     * @var string
     */
    public $body;

    /**
     * @var int
     */
    public $classifierId;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'autoPrediction' => 'AutoPrediction',
        'binaryToText'   => 'BinaryToText',
        'body'           => 'Body',
        'classifierId'   => 'ClassifierId',
        'content'        => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPrediction) {
            $res['AutoPrediction'] = $this->autoPrediction;
        }
        if (null !== $this->binaryToText) {
            $res['BinaryToText'] = $this->binaryToText;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->classifierId) {
            $res['ClassifierId'] = $this->classifierId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PredictClassifierModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPrediction'])) {
            $model->autoPrediction = $map['AutoPrediction'];
        }
        if (isset($map['BinaryToText'])) {
            $model->binaryToText = $map['BinaryToText'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['ClassifierId'])) {
            $model->classifierId = $map['ClassifierId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
