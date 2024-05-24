<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class PipelineStatus extends Model
{
    /**
     * @var TaskExecError
     */
    public $latestExecError;

    /**
     * @example Success
     *
     * @var string
     */
    public $phase;
    protected $_name = [
        'latestExecError' => 'latestExecError',
        'phase'           => 'phase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latestExecError) {
            $res['latestExecError'] = null !== $this->latestExecError ? $this->latestExecError->toMap() : null;
        }
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PipelineStatus
     */
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
