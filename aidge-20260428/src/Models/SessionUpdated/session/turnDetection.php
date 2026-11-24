<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session;

use AlibabaCloud\Dara\Model;

class turnDetection extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var int
     */
    public $silenceDurationMs;

    /**
     * @var int
     */
    public $prefixPaddingMs;

    /**
     * @var bool
     */
    public $createResponse;

    /**
     * @var bool
     */
    public $interruptResponse;
    protected $_name = [
        'type' => 'type',
        'threshold' => 'threshold',
        'silenceDurationMs' => 'silence_duration_ms',
        'prefixPaddingMs' => 'prefix_padding_ms',
        'createResponse' => 'create_response',
        'interruptResponse' => 'interrupt_response',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
        }

        if (null !== $this->silenceDurationMs) {
            $res['silence_duration_ms'] = $this->silenceDurationMs;
        }

        if (null !== $this->prefixPaddingMs) {
            $res['prefix_padding_ms'] = $this->prefixPaddingMs;
        }

        if (null !== $this->createResponse) {
            $res['create_response'] = $this->createResponse;
        }

        if (null !== $this->interruptResponse) {
            $res['interrupt_response'] = $this->interruptResponse;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        if (isset($map['silence_duration_ms'])) {
            $model->silenceDurationMs = $map['silence_duration_ms'];
        }

        if (isset($map['prefix_padding_ms'])) {
            $model->prefixPaddingMs = $map['prefix_padding_ms'];
        }

        if (isset($map['create_response'])) {
            $model->createResponse = $map['create_response'];
        }

        if (isset($map['interrupt_response'])) {
            $model->interruptResponse = $map['interrupt_response'];
        }

        return $model;
    }
}
