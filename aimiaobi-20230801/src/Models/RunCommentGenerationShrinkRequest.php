<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunCommentGenerationShrinkRequest extends Model
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
     * @var string
     */
    public $lengthRangeShrink;

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
     * @var string
     */
    public $sentimentShrink;

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
     * @var string
     */
    public $typeShrink;

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
        'lengthRangeShrink' => 'LengthRange',
        'numComments' => 'NumComments',
        'sentimentShrink' => 'Sentiment',
        'sessionId' => 'SessionId',
        'sourceMaterial' => 'SourceMaterial',
        'style' => 'Style',
        'typeShrink' => 'Type',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate(): void {}

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
        if (null !== $this->lengthRangeShrink) {
            $res['LengthRange'] = $this->lengthRangeShrink;
        }
        if (null !== $this->numComments) {
            $res['NumComments'] = $this->numComments;
        }
        if (null !== $this->sentimentShrink) {
            $res['Sentiment'] = $this->sentimentShrink;
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
        if (null !== $this->typeShrink) {
            $res['Type'] = $this->typeShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
            $model->typeShrink = $map['Type'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
