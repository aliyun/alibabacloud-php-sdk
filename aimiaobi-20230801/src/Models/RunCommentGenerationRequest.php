<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunCommentGenerationRequest extends Model
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
     * @var mixed[]
     */
    public $lengthRange;

    /**
     * @var string
     */
    public $numComments;

    /**
     * @var mixed[]
     */
    public $sentiment;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sourceMaterial;

    /**
     * @var string
     */
    public $style;

    /**
     * @var mixed[]
     */
    public $type;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'allowEmoji' => 'AllowEmoji',
        'extraInfo' => 'ExtraInfo',
        'length' => 'Length',
        'lengthRange' => 'LengthRange',
        'numComments' => 'NumComments',
        'sentiment' => 'Sentiment',
        'sessionId' => 'SessionId',
        'sourceMaterial' => 'SourceMaterial',
        'style' => 'Style',
        'type' => 'Type',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->lengthRange)) {
            Model::validateArray($this->lengthRange);
        }
        if (\is_array($this->sentiment)) {
            Model::validateArray($this->sentiment);
        }
        if (\is_array($this->type)) {
            Model::validateArray($this->type);
        }
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

        if (null !== $this->lengthRange) {
            if (\is_array($this->lengthRange)) {
                $res['LengthRange'] = [];
                foreach ($this->lengthRange as $key1 => $value1) {
                    $res['LengthRange'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->numComments) {
            $res['NumComments'] = $this->numComments;
        }

        if (null !== $this->sentiment) {
            if (\is_array($this->sentiment)) {
                $res['Sentiment'] = [];
                foreach ($this->sentiment as $key1 => $value1) {
                    $res['Sentiment'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->type)) {
                $res['Type'] = [];
                foreach ($this->type as $key1 => $value1) {
                    $res['Type'][$key1] = $value1;
                }
            }
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
            if (!empty($map['LengthRange'])) {
                $model->lengthRange = [];
                foreach ($map['LengthRange'] as $key1 => $value1) {
                    $model->lengthRange[$key1] = $value1;
                }
            }
        }

        if (isset($map['NumComments'])) {
            $model->numComments = $map['NumComments'];
        }

        if (isset($map['Sentiment'])) {
            if (!empty($map['Sentiment'])) {
                $model->sentiment = [];
                foreach ($map['Sentiment'] as $key1 => $value1) {
                    $model->sentiment[$key1] = $value1;
                }
            }
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
            if (!empty($map['Type'])) {
                $model->type = [];
                foreach ($map['Type'] as $key1 => $value1) {
                    $model->type[$key1] = $value1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
