<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceActiveOpsTask) {
            $res['InstanceActiveOpsTask'] = null !== $this->instanceActiveOpsTask ? $this->instanceActiveOpsTask->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceActiveOpsTaskResponseBody
     */
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
