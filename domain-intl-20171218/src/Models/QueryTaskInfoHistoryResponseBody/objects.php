<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskInfoHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class objects extends Model
{
    /**
     * @var string
     */
    public $clientip;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimeLong;

    /**
     * @var string
     */
    public $taskNo;

    /**
     * @var int
     */
    public $taskNum;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $taskStatusCode;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskTypeDescription;
    protected $_name = [
        'clientip'            => 'Clientip',
        'createTime'          => 'CreateTime',
        'createTimeLong'      => 'CreateTimeLong',
        'taskNo'              => 'TaskNo',
        'taskNum'             => 'TaskNum',
        'taskStatus'          => 'TaskStatus',
        'taskStatusCode'      => 'TaskStatusCode',
        'taskType'            => 'TaskType',
        'taskTypeDescription' => 'TaskTypeDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientip) {
            $res['Clientip'] = $this->clientip;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimeLong) {
            $res['CreateTimeLong'] = $this->createTimeLong;
        }
        if (null !== $this->taskNo) {
            $res['TaskNo'] = $this->taskNo;
        }
        if (null !== $this->taskNum) {
            $res['TaskNum'] = $this->taskNum;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskStatusCode) {
            $res['TaskStatusCode'] = $this->taskStatusCode;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskTypeDescription) {
            $res['TaskTypeDescription'] = $this->taskTypeDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return objects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clientip'])) {
            $model->clientip = $map['Clientip'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimeLong'])) {
            $model->createTimeLong = $map['CreateTimeLong'];
        }
        if (isset($map['TaskNo'])) {
            $model->taskNo = $map['TaskNo'];
        }
        if (isset($map['TaskNum'])) {
            $model->taskNum = $map['TaskNum'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskStatusCode'])) {
            $model->taskStatusCode = $map['TaskStatusCode'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskTypeDescription'])) {
            $model->taskTypeDescription = $map['TaskTypeDescription'];
        }

        return $model;
    }
}
