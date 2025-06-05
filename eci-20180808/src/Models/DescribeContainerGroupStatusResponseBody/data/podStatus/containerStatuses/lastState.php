<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\lastState\running;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\lastState\terminated;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus\containerStatuses\lastState\waiting;

class lastState extends Model
{
    /**
     * @var running
     */
    public $running;

    /**
     * @var terminated
     */
    public $terminated;

    /**
     * @var waiting
     */
    public $waiting;
    protected $_name = [
        'running' => 'Running',
        'terminated' => 'Terminated',
        'waiting' => 'Waiting',
    ];

    public function validate()
    {
        if (null !== $this->running) {
            $this->running->validate();
        }
        if (null !== $this->terminated) {
            $this->terminated->validate();
        }
        if (null !== $this->waiting) {
            $this->waiting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->running) {
            $res['Running'] = null !== $this->running ? $this->running->toArray($noStream) : $this->running;
        }

        if (null !== $this->terminated) {
            $res['Terminated'] = null !== $this->terminated ? $this->terminated->toArray($noStream) : $this->terminated;
        }

        if (null !== $this->waiting) {
            $res['Waiting'] = null !== $this->waiting ? $this->waiting->toArray($noStream) : $this->waiting;
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
