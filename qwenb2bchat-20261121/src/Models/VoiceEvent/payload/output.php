<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceEvent\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceEvent\payload\output\response;
use AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceEvent\payload\output\sentence;

class output extends Model
{
    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $delta;

    /**
     * @var bool
     */
    public $final;

    /**
     * @var mixed[]
     */
    public $messages;

    /**
     * @var response
     */
    public $response;

    /**
     * @var sentence
     */
    public $sentence;
    protected $_name = [
        'stage' => 'stage',
        'type' => 'type',
        'event' => 'event',
        'text' => 'text',
        'delta' => 'delta',
        'final' => 'final',
        'messages' => 'messages',
        'response' => 'response',
        'sentence' => 'sentence',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (null !== $this->response) {
            $this->response->validate();
        }
        if (null !== $this->sentence) {
            $this->sentence->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->event) {
            $res['event'] = $this->event;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->delta) {
            $res['delta'] = $this->delta;
        }

        if (null !== $this->final) {
            $res['final'] = $this->final;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->response) {
            $res['response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
        }

        if (null !== $this->sentence) {
            $res['sentence'] = null !== $this->sentence ? $this->sentence->toArray($noStream) : $this->sentence;
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
        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['event'])) {
            $model->event = $map['event'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['delta'])) {
            $model->delta = $map['delta'];
        }

        if (isset($map['final'])) {
            $model->final = $map['final'];
        }

        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['response'])) {
            $model->response = response::fromMap($map['response']);
        }

        if (isset($map['sentence'])) {
            $model->sentence = sentence::fromMap($map['sentence']);
        }

        return $model;
    }
}
