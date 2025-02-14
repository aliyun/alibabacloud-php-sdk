<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckResponseBody\operationTaskInstanceDetails;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckResponseBody\operationTaskInstanceDetails\repair\repairConfigs;

class repair extends Model
{
    /**
     * @var int
     */
    public $operateTime;
    /**
     * @var repairConfigs[]
     */
    public $repairConfigs;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $statusShowName;
    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'operateTime'    => 'OperateTime',
        'repairConfigs'  => 'RepairConfigs',
        'status'         => 'Status',
        'statusShowName' => 'StatusShowName',
        'taskId'         => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->repairConfigs)) {
            Model::validateArray($this->repairConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }

        if (null !== $this->repairConfigs) {
            if (\is_array($this->repairConfigs)) {
                $res['RepairConfigs'] = [];
                $n1                   = 0;
                foreach ($this->repairConfigs as $item1) {
                    $res['RepairConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusShowName) {
            $res['StatusShowName'] = $this->statusShowName;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }

        if (isset($map['RepairConfigs'])) {
            if (!empty($map['RepairConfigs'])) {
                $model->repairConfigs = [];
                $n1                   = 0;
                foreach ($map['RepairConfigs'] as $item1) {
                    $model->repairConfigs[$n1++] = repairConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusShowName'])) {
            $model->statusShowName = $map['StatusShowName'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
