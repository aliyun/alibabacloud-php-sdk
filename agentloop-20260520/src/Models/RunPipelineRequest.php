<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\RunPipelineRequest\output;

class RunPipelineRequest extends Model
{
    /**
     * @var int
     */
    public $fromTime;

    /**
     * @var output
     */
    public $output;

    /**
     * @var int
     */
    public $toTime;
    protected $_name = [
        'fromTime' => 'fromTime',
        'output' => 'output',
        'toTime' => 'toTime',
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
        if (null !== $this->fromTime) {
            $res['fromTime'] = $this->fromTime;
        }

        if (null !== $this->output) {
            $res['output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
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
        if (isset($map['fromTime'])) {
            $model->fromTime = $map['fromTime'];
        }

        if (isset($map['output'])) {
            $model->output = output::fromMap($map['output']);
        }

        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        return $model;
    }
}
