<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\lastState\running;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\lastState\terminated;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\lastState\waiting;
use AlibabaCloud\Tea\Model;

class lastState extends Model
{
    /**
     * @description The container is created and running.
     *
     * @var running
     */
    public $running;

    /**
     * @description The container is terminated and exits after a successful or failed run.
     *
     * @var terminated
     */
    public $terminated;

    /**
     * @description The container is waiting for being created.
     *
     * @var waiting
     */
    public $waiting;
    protected $_name = [
        'running'    => 'Running',
        'terminated' => 'Terminated',
        'waiting'    => 'Waiting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->running) {
            $res['Running'] = null !== $this->running ? $this->running->toMap() : null;
        }
        if (null !== $this->terminated) {
            $res['Terminated'] = null !== $this->terminated ? $this->terminated->toMap() : null;
        }
        if (null !== $this->waiting) {
            $res['Waiting'] = null !== $this->waiting ? $this->waiting->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lastState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Running'])) {
            $model->running = running::fromMap($map['Running']);
        }
        if (isset($map['Terminated'])) {
            $model->terminated = terminated::fromMap($map['Terminated']);
        }
        if (isset($map['Waiting'])) {
            $model->waiting = waiting::fromMap($map['Waiting']);
        }

        return $model;
    }
}
