<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CuaChatCompletionStreamRequest\messages;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CuaChatCompletionStreamRequest\metadata;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CuaChatCompletionStreamRequest\streamOptions;

class CuaChatCompletionStreamRequest extends Model
{
    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var string
     */
    public $model;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var streamOptions
     */
    public $streamOptions;

    /**
     * @var mixed[][]
     */
    public $tools;
    protected $_name = [
        'messages' => 'messages',
        'metadata' => 'metadata',
        'model' => 'model',
        'stream' => 'stream',
        'streamOptions' => 'streamOptions',
        'tools' => 'tools',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        if (null !== $this->streamOptions) {
            $this->streamOptions->validate();
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->streamOptions) {
            $res['streamOptions'] = null !== $this->streamOptions ? $this->streamOptions->toArray($noStream) : $this->streamOptions;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    if (\is_array($item1)) {
                        $res['tools'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['tools'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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
        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['metadata'])) {
            $model->metadata = metadata::fromMap($map['metadata']);
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['streamOptions'])) {
            $model->streamOptions = streamOptions::fromMap($map['streamOptions']);
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    if (!empty($item1)) {
                        $model->tools[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->tools[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
