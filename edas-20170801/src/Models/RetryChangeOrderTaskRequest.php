<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class RetryChangeOrderTaskRequest extends Model
{
    /**
     * @var bool
     */
    public $retryStatus;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'retryStatus' => 'RetryStatus',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->retryStatus) {
            $res['RetryStatus'] = $this->retryStatus;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['RetryStatus'])) {
            $model->retryStatus = $map['RetryStatus'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
