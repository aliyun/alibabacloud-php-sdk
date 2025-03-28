<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class PipelineStatus extends Model
{
    /**
     * @var TaskExecError
     */
    public $latestExecError;

    /**
     * @var string
     */
    public $phase;
    protected $_name = [
        'latestExecError' => 'latestExecError',
        'phase' => 'phase',
    ];

    public function validate()
    {
        if (null !== $this->latestExecError) {
            $this->latestExecError->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latestExecError) {
            $res['latestExecError'] = null !== $this->latestExecError ? $this->latestExecError->toArray($noStream) : $this->latestExecError;
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
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
        if (isset($map['latestExecError'])) {
            $model->latestExecError = TaskExecError::fromMap($map['latestExecError']);
        }

        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        return $model;
    }
}
