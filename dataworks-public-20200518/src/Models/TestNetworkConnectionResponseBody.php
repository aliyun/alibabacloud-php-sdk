<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestNetworkConnectionResponseBody\taskList;

class TestNetworkConnectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var taskList
     */
    public $taskList;
    protected $_name = [
        'requestId' => 'RequestId',
        'success' => 'Success',
        'taskList' => 'TaskList',
    ];

    public function validate()
    {
        if (null !== $this->taskList) {
            $this->taskList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->taskList) {
            $res['TaskList'] = null !== $this->taskList ? $this->taskList->toArray($noStream) : $this->taskList;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TaskList'])) {
            $model->taskList = taskList::fromMap($map['TaskList']);
        }

        return $model;
    }
}
