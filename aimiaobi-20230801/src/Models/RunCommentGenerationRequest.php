<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunCommentGenerationRequest extends Model
{
    /**
     * @example true
     *
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
     * @var string
     */
    public $length;

    /**
     * @description This parameter is required.
     *
     * @example {"short":"50","long":“50”}
     *
     * @var mixed[]
     */
    public $lengthRange;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var string
     */
    public $numComments;

    /**
     * @description This parameter is required.
     *
     * @example {"positive":"50","negative":"50"}
     *
     * @var mixed[]
     */
    public $sentiment;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sourceMaterial;

    /**
     * @var string
     */
    public $style;

    /**
     * @description This parameter is required.
     *
     * @example {"emotion":"50","opinion":"50"}
     *
     * @var mixed[]
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @example llm-3kcs1w3lltrtbfkr
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'allowEmoji' => 'AllowEmoji',
        'extraInfo' => 'ExtraInfo',
        'length' => 'Length',
        'lengthRange' => 'LengthRange',
        'modelId' => 'ModelId',
        'numComments' => 'NumComments',
        'sentiment' => 'Sentiment',
        'sessionId' => 'SessionId',
        'sourceMaterial' => 'SourceMaterial',
        'style' => 'Style',
        'type' => 'Type',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->lengthRange) {
            $res['LengthRange'] = $this->lengthRange;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->numComments) {
            $res['NumComments'] = $this->numComments;
        }
        if (null !== $this->sentiment) {
            $res['Sentiment'] = $this->sentiment;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->sourceMaterial) {
            $res['SourceMaterial'] = $this->sourceMaterial;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCommentGenerationRequest
     */
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
            $model->lengthRange = $map['LengthRange'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['NumComments'])) {
            $model->numComments = $map['NumComments'];
        }
        if (isset($map['Sentiment'])) {
            $model->sentiment = $map['Sentiment'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SourceMaterial'])) {
            $model->sourceMaterial = $map['SourceMaterial'];
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
