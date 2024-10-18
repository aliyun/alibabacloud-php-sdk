<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListQueuesResponseBody\queues;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The number of compute nodes that are not ready.
     *
     * @example 2
     *
     * @var int
     */
    public $creatingCounts;

    /**
     * @description The number of malfunctioning compute nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $exceptionCounts;

    /**
     * @description The number of running compute nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $runningCounts;
    protected $_name = [
        'creatingCounts'  => 'CreatingCounts',
        'exceptionCounts' => 'ExceptionCounts',
        'runningCounts'   => 'RunningCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatingCounts) {
            $res['CreatingCounts'] = $this->creatingCounts;
        }
        if (null !== $this->exceptionCounts) {
            $res['ExceptionCounts'] = $this->exceptionCounts;
        }
        if (null !== $this->runningCounts) {
            $res['RunningCounts'] = $this->runningCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatingCounts'])) {
            $model->creatingCounts = $map['CreatingCounts'];
        }
        if (isset($map['ExceptionCounts'])) {
            $model->exceptionCounts = $map['ExceptionCounts'];
        }
        if (isset($map['RunningCounts'])) {
            $model->runningCounts = $map['RunningCounts'];
        }

        return $model;
    }
}
