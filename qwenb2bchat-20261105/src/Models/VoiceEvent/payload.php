<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceEvent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceEvent\payload\output;

class payload extends Model
{
    /**
     * @var string
     */
    public $stage;

    /**
     * @var bool
     */
    public $retryable;

    /**
     * @var output
     */
    public $output;
    protected $_name = [
        'stage' => 'stage',
        'retryable' => 'retryable',
        'output' => 'output',
    ];

    public function validate()
    {
        if (null !== $this->output) {
            $this->output->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }

        if (null !== $this->retryable) {
            $res['retryable'] = $this->retryable;
        }

        if (null !== $this->output) {
            $res['output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
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

        if (isset($map['retryable'])) {
            $model->retryable = $map['retryable'];
        }

        if (isset($map['output'])) {
            $model->output = output::fromMap($map['output']);
        }

        return $model;
    }
}
