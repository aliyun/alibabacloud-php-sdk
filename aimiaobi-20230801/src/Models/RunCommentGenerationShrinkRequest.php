<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $style;
    /**
     * @var string
     */
    public $typeShrink;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'allowEmoji'        => 'AllowEmoji',
        'extraInfo'         => 'ExtraInfo',
        'length'            => 'Length',
        'lengthRangeShrink' => 'LengthRange',
        'numComments'       => 'NumComments',
        'sentimentShrink'   => 'Sentiment',
        'sourceMaterial'    => 'SourceMaterial',
        'style'             => 'Style',
        'typeShrink'        => 'Type',
        'workspaceId'       => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowEmoji) {
            $res['AllowEmoji'] = $this->allowEmoji;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->lengthRangeShrink) {
            $res['LengthRange'] = $this->lengthRangeShrink;
        }

        if (null !== $this->numComments) {
            $res['NumComments'] = $this->numComments;
        }

        if (null !== $this->sentimentShrink) {
            $res['Sentiment'] = $this->sentimentShrink;
        }

        if (null !== $this->sourceMaterial) {
            $res['SourceMaterial'] = $this->sourceMaterial;
        }

        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }

        if (null !== $this->typeShrink) {
            $res['Type'] = $this->typeShrink;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AllowEmoji'])) {
            $model->allowEmoji = $map['AllowEmoji'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['LengthRange'])) {
            $model->lengthRangeShrink = $map['LengthRange'];
        }

        if (isset($map['NumComments'])) {
            $model->numComments = $map['NumComments'];
        }

        if (isset($map['Sentiment'])) {
            $model->sentimentShrink = $map['Sentiment'];
        }

        if (isset($map['SourceMaterial'])) {
            $model->sourceMaterial = $map['SourceMaterial'];
        }

        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }

        if (isset($map['Type'])) {
            $model->typeShrink = $map['Type'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
