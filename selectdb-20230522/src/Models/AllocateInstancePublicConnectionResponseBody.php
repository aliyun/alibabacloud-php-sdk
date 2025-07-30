<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class AllocateInstancePublicConnectionResponseBody extends Model
{
    /**
     * @description The name of the instance.
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The request ID.
     *
     * @example 5ED62C81-9948-5612-81E1-EA3853752306
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @example 498115273
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateInstancePublicConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
