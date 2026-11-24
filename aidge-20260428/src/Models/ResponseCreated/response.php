<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ResponseCreated;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ResponseCreated\response\output;

class response extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $modalities;

    /**
     * @var string
     */
    public $voice;

    /**
     * @var string
     */
    public $outputAudioFormat;

    /**
     * @var output[]
     */
    public $output;
    protected $_name = [
        'id' => 'id',
        'object' => 'object',
        'conversationId' => 'conversation_id',
        'status' => 'status',
        'modalities' => 'modalities',
        'voice' => 'voice',
        'outputAudioFormat' => 'output_audio_format',
        'output' => 'output',
    ];

    public function validate()
    {
        if (\is_array($this->modalities)) {
            Model::validateArray($this->modalities);
        }
        if (\is_array($this->output)) {
            Model::validateArray($this->output);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->object) {
            $res['object'] = $this->object;
        }

        if (null !== $this->conversationId) {
            $res['conversation_id'] = $this->conversationId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->modalities) {
            if (\is_array($this->modalities)) {
                $res['modalities'] = [];
                $n1 = 0;
                foreach ($this->modalities as $item1) {
                    $res['modalities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->voice) {
            $res['voice'] = $this->voice;
        }

        if (null !== $this->outputAudioFormat) {
            $res['output_audio_format'] = $this->outputAudioFormat;
        }

        if (null !== $this->output) {
            if (\is_array($this->output)) {
                $res['output'] = [];
                $n1 = 0;
                foreach ($this->output as $item1) {
                    $res['output'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['object'])) {
            $model->object = $map['object'];
        }

        if (isset($map['conversation_id'])) {
            $model->conversationId = $map['conversation_id'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['modalities'])) {
            if (!empty($map['modalities'])) {
                $model->modalities = [];
                $n1 = 0;
                foreach ($map['modalities'] as $item1) {
                    $model->modalities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['voice'])) {
            $model->voice = $map['voice'];
        }

        if (isset($map['output_audio_format'])) {
            $model->outputAudioFormat = $map['output_audio_format'];
        }

        if (isset($map['output'])) {
            if (!empty($map['output'])) {
                $model->output = [];
                $n1 = 0;
                foreach ($map['output'] as $item1) {
                    $model->output[$n1] = output::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
