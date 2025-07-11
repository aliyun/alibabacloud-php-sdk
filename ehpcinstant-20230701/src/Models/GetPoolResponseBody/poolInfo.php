<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetPoolResponseBody;

use AlibabaCloud\Tea\Model;

class poolInfo extends Model
{
    /**
     * @example 2024-12-01 20:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $exectorUsage;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example 2000
     *
     * @var int
     */
    public $maxExectorNum;

    /**
     * @example PoolTest
     *
     * @var string
     */
    public $poolName;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example Fails to *** pool: ***.
     *
     * @var string
     */
    public $reason;

    /**
     * @example Working
     *
     * @var string
     */
    public $status;

    /**
     * @example 2024-12-01 20:00:00
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'exectorUsage' => 'ExectorUsage',
        'isDefault' => 'IsDefault',
        'maxExectorNum' => 'MaxExectorNum',
        'poolName' => 'PoolName',
        'priority' => 'Priority',
        'reason' => 'Reason',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->exectorUsage) {
            $res['ExectorUsage'] = $this->exectorUsage;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->maxExectorNum) {
            $res['MaxExectorNum'] = $this->maxExectorNum;
        }
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return poolInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExectorUsage'])) {
            $model->exectorUsage = $map['ExectorUsage'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['MaxExectorNum'])) {
            $model->maxExectorNum = $map['MaxExectorNum'];
        }
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
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
