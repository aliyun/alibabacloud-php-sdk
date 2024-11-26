<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunCommentGenerationShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $allowEmoji;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @example 20
     *
     * @deprecated
     *
     * @var string
     */
    public $length;

    /**
     * @var string
     */
    public $lengthRangeShrink;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @example 10
     *
     * @var string
     */
    public $numComments;

    /**
     * @var string
     */
    public $sentimentShrink;

    /**
     * @var string
     */
    public $sourceMaterial;

    /**
     * @deprecated
     *
     * @var string
     */
    public $style;

    /**
     * @var string
     */
    public $typeShrink;
    protected $_name = [
        'allowEmoji'        => 'allowEmoji',
        'extraInfo'         => 'extraInfo',
        'length'            => 'length',
        'lengthRangeShrink' => 'lengthRange',
        'modelId'           => 'modelId',
        'numComments'       => 'numComments',
        'sentimentShrink'   => 'sentiment',
        'sourceMaterial'    => 'sourceMaterial',
        'style'             => 'style',
        'typeShrink'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowEmoji) {
            $res['allowEmoji'] = $this->allowEmoji;
        }
        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }
        if (null !== $this->length) {
            $res['length'] = $this->length;
        }
        if (null !== $this->lengthRangeShrink) {
            $res['lengthRange'] = $this->lengthRangeShrink;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->numComments) {
            $res['numComments'] = $this->numComments;
        }
        if (null !== $this->sentimentShrink) {
            $res['sentiment'] = $this->sentimentShrink;
        }
        if (null !== $this->sourceMaterial) {
            $res['sourceMaterial'] = $this->sourceMaterial;
        }
        if (null !== $this->style) {
            $res['style'] = $this->style;
        }
        if (null !== $this->typeShrink) {
            $res['type'] = $this->typeShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCommentGenerationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowEmoji'])) {
            $model->allowEmoji = $map['allowEmoji'];
        }
        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }
        if (isset($map['length'])) {
            $model->length = $map['length'];
        }
        if (isset($map['lengthRange'])) {
            $model->lengthRangeShrink = $map['lengthRange'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['numComments'])) {
            $model->numComments = $map['numComments'];
        }
        if (isset($map['sentiment'])) {
            $model->sentimentShrink = $map['sentiment'];
        }
        if (isset($map['sourceMaterial'])) {
            $model->sourceMaterial = $map['sourceMaterial'];
        }
        if (isset($map['style'])) {
            $model->style = $map['style'];
        }
        if (isset($map['type'])) {
            $model->typeShrink = $map['type'];
        }

        return $model;
    }
}
