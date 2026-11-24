<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdate\session;

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
    protected $_name = [
        'type' => 'type',
        'threshold' => 'threshold',
        'silenceDurationMs' => 'silence_duration_ms',
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

        return $model;
    }
}
