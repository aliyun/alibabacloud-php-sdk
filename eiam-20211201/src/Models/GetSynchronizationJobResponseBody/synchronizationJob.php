<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result;
use AlibabaCloud\Tea\Model;

class synchronizationJob extends Model
{
    /**
     * @description 同步任务方向
     *
     * @example ingress
     *
     * @var string
     */
    public $direction;

    /**
     * @description 同步结束时间
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 同步任务结果
     *
     * @var result
     */
    public $result;

    /**
     * @description 同步开始时间
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 同步任务状态
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description 同步任务ID
     *
     * @example sync_0000347vjovtcf41li0fgsd98gn24q9nj9xxxxx
     *
     * @var string
     */
    public $synchronizationJobId;

    /**
     * @description 同步目标ID
     *
     * @example idp_my664lwkhpicbyzirog3nxxxxx
     *
     * @var string
     */
    public $targetId;

    /**
     * @description 同步目标类型
     *
     * @example identity_provider
     *
     * @var string
     */
    public $targetType;

    /**
     * @description 同步触发类型
     *
     * @example auto
     *
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'direction' => 'Direction',
        'endTime' => 'EndTime',
        'result' => 'Result',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'synchronizationJobId' => 'SynchronizationJobId',
        'targetId' => 'TargetId',
        'targetType' => 'TargetType',
        'triggerType' => 'TriggerType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return synchronizationJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
