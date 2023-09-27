<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class JobStatusRunning extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $observedFlinkJobRestarts;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $observedFlinkJobStatus;
    protected $_name = [
        'observedFlinkJobRestarts' => 'observedFlinkJobRestarts',
        'observedFlinkJobStatus'   => 'observedFlinkJobStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->observedFlinkJobRestarts) {
            $res['observedFlinkJobRestarts'] = $this->observedFlinkJobRestarts;
        }
        if (null !== $this->observedFlinkJobStatus) {
            $res['observedFlinkJobStatus'] = $this->observedFlinkJobStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobStatusRunning
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['observedFlinkJobRestarts'])) {
            $model->observedFlinkJobRestarts = $map['observedFlinkJobRestarts'];
        }
        if (isset($map['observedFlinkJobStatus'])) {
            $model->observedFlinkJobStatus = $map['observedFlinkJobStatus'];
        }

        return $model;
    }
}
