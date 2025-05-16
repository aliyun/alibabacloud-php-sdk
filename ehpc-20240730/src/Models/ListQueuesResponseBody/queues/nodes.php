<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListQueuesResponseBody\queues;

use AlibabaCloud\Dara\Model;

class nodes extends Model
{
    /**
     * @var int
     */
    public $creatingCounts;

    /**
     * @var int
     */
    public $exceptionCounts;

    /**
     * @var int
     */
    public $runningCounts;
    protected $_name = [
        'creatingCounts' => 'CreatingCounts',
        'exceptionCounts' => 'ExceptionCounts',
        'runningCounts' => 'RunningCounts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
