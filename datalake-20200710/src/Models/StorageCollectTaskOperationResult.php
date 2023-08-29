<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class StorageCollectTaskOperationResult extends Model
{
    /**
     * @var bool
     */
    public $dlfCreated;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'dlfCreated' => 'DlfCreated',
        'errCode'    => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'success'    => 'Success',
        'taskId'     => 'TaskId',
        'taskType'   => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dlfCreated) {
            $res['DlfCreated'] = $this->dlfCreated;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StorageCollectTaskOperationResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DlfCreated'])) {
            $model->dlfCreated = $map['DlfCreated'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
