<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateInstanceActiveOpsTaskResponseBody extends Model
{
    /**
     * @var InstanceActiveOpsTask
     */
    public $instanceActiveOpsTask;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceActiveOpsTask' => 'InstanceActiveOpsTask',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceActiveOpsTask) {
            $this->instanceActiveOpsTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceActiveOpsTask) {
            $res['InstanceActiveOpsTask'] = null !== $this->instanceActiveOpsTask ? $this->instanceActiveOpsTask->toArray($noStream) : $this->instanceActiveOpsTask;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceActiveOpsTask'])) {
            $model->instanceActiveOpsTask = InstanceActiveOpsTask::fromMap($map['InstanceActiveOpsTask']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
