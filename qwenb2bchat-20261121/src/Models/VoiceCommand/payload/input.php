<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceCommand\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceCommand\payload\input\context;
use AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceCommand\payload\input\history;

class input extends Model
{
    /**
     * @var context[]
     */
    public $context;

    /**
     * @var history[]
     */
    public $history;
    protected $_name = [
        'context' => 'context',
        'history' => 'history',
    ];

    public function validate()
    {
        if (\is_array($this->context)) {
            Model::validateArray($this->context);
        }
        if (\is_array($this->history)) {
            Model::validateArray($this->history);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            if (\is_array($this->context)) {
                $res['context'] = [];
                $n1 = 0;
                foreach ($this->context as $item1) {
                    $res['context'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->history) {
            if (\is_array($this->history)) {
                $res['history'] = [];
                $n1 = 0;
                foreach ($this->history as $item1) {
                    $res['history'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['context'])) {
            if (!empty($map['context'])) {
                $model->context = [];
                $n1 = 0;
                foreach ($map['context'] as $item1) {
                    $model->context[$n1] = context::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['history'])) {
            if (!empty($map['history'])) {
                $model->history = [];
                $n1 = 0;
                foreach ($map['history'] as $item1) {
                    $model->history[$n1] = history::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
