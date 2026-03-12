<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models\QueryBatchTaskListResponseBody\data;

use AlibabaCloud\Dara\Model;

class taskInfo extends Model
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
     * @var string
     */
    public $taskType;
    protected $_name = [
        'clientip' => 'Clientip',
        'createTime' => 'CreateTime',
        'taskNo' => 'TaskNo',
        'taskNum' => 'TaskNum',
        'taskStatus' => 'TaskStatus',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientip) {
            $res['Clientip'] = $this->clientip;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['Clientip'])) {
            $model->clientip = $map['Clientip'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
