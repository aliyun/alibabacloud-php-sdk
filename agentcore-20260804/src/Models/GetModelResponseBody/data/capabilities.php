<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetModelResponseBody\data;

use AlibabaCloud\Dara\Model;

class capabilities extends Model
{
    /**
     * @var bool
     */
    public $audio;

    /**
     * @var bool
     */
    public $document;

    /**
     * @var bool
     */
    public $multiToolCall;

    /**
     * @var bool
     */
    public $reasoning;

    /**
     * @var bool
     */
    public $streamToolCall;

    /**
     * @var bool
     */
    public $toolCall;

    /**
     * @var bool
     */
    public $video;

    /**
     * @var bool
     */
    public $vision;
    protected $_name = [
        'audio' => 'audio',
        'document' => 'document',
        'multiToolCall' => 'multiToolCall',
        'reasoning' => 'reasoning',
        'streamToolCall' => 'streamToolCall',
        'toolCall' => 'toolCall',
        'video' => 'video',
        'vision' => 'vision',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audio) {
            $res['audio'] = $this->audio;
        }

        if (null !== $this->document) {
            $res['document'] = $this->document;
        }

        if (null !== $this->multiToolCall) {
            $res['multiToolCall'] = $this->multiToolCall;
        }

        if (null !== $this->reasoning) {
            $res['reasoning'] = $this->reasoning;
        }

        if (null !== $this->streamToolCall) {
            $res['streamToolCall'] = $this->streamToolCall;
        }

        if (null !== $this->toolCall) {
            $res['toolCall'] = $this->toolCall;
        }

        if (null !== $this->video) {
            $res['video'] = $this->video;
        }

        if (null !== $this->vision) {
            $res['vision'] = $this->vision;
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
        if (isset($map['audio'])) {
            $model->audio = $map['audio'];
        }

        if (isset($map['document'])) {
            $model->document = $map['document'];
        }

        if (isset($map['multiToolCall'])) {
            $model->multiToolCall = $map['multiToolCall'];
        }

        if (isset($map['reasoning'])) {
            $model->reasoning = $map['reasoning'];
        }

        if (isset($map['streamToolCall'])) {
            $model->streamToolCall = $map['streamToolCall'];
        }

        if (isset($map['toolCall'])) {
            $model->toolCall = $map['toolCall'];
        }

        if (isset($map['video'])) {
            $model->video = $map['video'];
        }

        if (isset($map['vision'])) {
            $model->vision = $map['vision'];
        }

        return $model;
    }
}
