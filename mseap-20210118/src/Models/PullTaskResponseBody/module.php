<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models\PullTaskResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @example 1649470201045
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 1
     *
     * @var string
     */
    public $outTaskId;

    /**
     * @var string
     */
    public $principalKey;

    /**
     * @example {\\"result\\":\\"SUCCESS\\",\\"message\\":\\"null\\",\\"taskId\\":\\"d8800bab-88b6-4c60-9e4f-ed38dbbdd9b3\\"}
     *
     * @var string
     */
    public $taskData;

    /**
     * @example 704614
     *
     * @var string
     */
    public $taskId;

    /**
     * @example PATENT_QUERY
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return module
     */
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
