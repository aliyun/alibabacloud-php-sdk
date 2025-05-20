<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models\PullTaskResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outTaskId;

    /**
     * @var string
     */
    public $principalKey;

    /**
     * @var string
     */
    public $taskData;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'bizCode' => 'BizCode',
        'orderId' => 'OrderId',
        'outTaskId' => 'OutTaskId',
        'principalKey' => 'PrincipalKey',
        'taskData' => 'TaskData',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->outTaskId) {
            $res['OutTaskId'] = $this->outTaskId;
        }

        if (null !== $this->principalKey) {
            $res['PrincipalKey'] = $this->principalKey;
        }

        if (null !== $this->taskData) {
            $res['TaskData'] = $this->taskData;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OutTaskId'])) {
            $model->outTaskId = $map['OutTaskId'];
        }

        if (isset($map['PrincipalKey'])) {
            $model->principalKey = $map['PrincipalKey'];
        }

        if (isset($map['TaskData'])) {
            $model->taskData = $map['TaskData'];
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
