<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckResponseBody\operationTaskInstanceDetails;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckResponseBody\operationTaskInstanceDetails\repair\repairConfigs;
use AlibabaCloud\Tea\Model;

class repair extends Model
{
    /**
     * @description Timestamp for processing the risk. Unit: milliseconds.
     *
     * @example 1719923175000
     *
     * @var int
     */
    public $operateTime;

    /**
     * @description Fix the corresponding configuration information.
     *
     * @var repairConfigs[]
     */
    public $repairConfigs;

    /**
     * @description Status of the corresponding task.
     *
     * @example REPAIR_SUCCESS_VERIFIED
     *
     * @var string
     */
    public $status;

    /**
     * @description Display name of the repair task status.
     *
     * @example repair success verified
     *
     * @var string
     */
    public $statusShowName;

    /**
     * @description TaskId of the operation task.
     *
     * @example 6a829841e335b0fb6e0014463284****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'operateTime' => 'OperateTime',
        'repairConfigs' => 'RepairConfigs',
        'status' => 'Status',
        'statusShowName' => 'StatusShowName',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->repairConfigs) {
            $res['RepairConfigs'] = [];
            if (null !== $this->repairConfigs && \is_array($this->repairConfigs)) {
                $n = 0;
                foreach ($this->repairConfigs as $item) {
                    $res['RepairConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return repair
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['RepairConfigs'])) {
            if (!empty($map['RepairConfigs'])) {
                $model->repairConfigs = [];
                $n = 0;
                foreach ($map['RepairConfigs'] as $item) {
                    $model->repairConfigs[$n++] = null !== $item ? repairConfigs::fromMap($item) : $item;
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
