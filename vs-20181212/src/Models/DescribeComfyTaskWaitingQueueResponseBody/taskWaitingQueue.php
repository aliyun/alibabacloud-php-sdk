<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeComfyTaskWaitingQueueResponseBody;

use AlibabaCloud\Dara\Model;

class taskWaitingQueue extends Model
{
    /**
     * @var int
     */
    public $waitingCount;
    protected $_name = [
        'waitingCount' => 'WaitingCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->waitingCount) {
            $res['WaitingCount'] = $this->waitingCount;
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
        if (isset($map['WaitingCount'])) {
            $model->waitingCount = $map['WaitingCount'];
        }

        return $model;
    }
}
