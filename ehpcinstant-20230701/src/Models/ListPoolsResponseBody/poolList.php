<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListPoolsResponseBody;

use AlibabaCloud\Dara\Model;

class poolList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $maxExecutorNum;

    /**
     * @var string
     */
    public $poolName;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $schedulingPolicyId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'isDefault' => 'IsDefault',
        'maxExecutorNum' => 'MaxExecutorNum',
        'poolName' => 'PoolName',
        'priority' => 'Priority',
        'schedulingPolicyId' => 'SchedulingPolicyId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->maxExecutorNum) {
            $res['MaxExecutorNum'] = $this->maxExecutorNum;
        }

        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->schedulingPolicyId) {
            $res['SchedulingPolicyId'] = $this->schedulingPolicyId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['MaxExecutorNum'])) {
            $model->maxExecutorNum = $map['MaxExecutorNum'];
        }

        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['SchedulingPolicyId'])) {
            $model->schedulingPolicyId = $map['SchedulingPolicyId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
