<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class SetDeviceOtaTaskStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $operationStatus;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'operationStatus' => 'OperationStatus',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDeviceOtaTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
