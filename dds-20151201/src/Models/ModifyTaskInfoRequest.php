<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyTaskInfoRequest extends Model
{
    /**
     * @description The action-related parameters. Such parameters can be added based on your business requirements. The ActionParams parameter value varies based on the taskAction parameter value.
     *
     * @example {\"recoverMode\":\"immediate\"}
     *
     * @var string
     */
    public $actionParams;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~61933~~) operation to query the region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The name of the step visible to the user.
     *
     * @example exec_task
     *
     * @var string
     */
    public $stepName;

    /**
     * @description The name of the action to perform. Specify the value of this parameter as the action name corresponding to the current state of the task. The action name can be obtained from the actionInfo parameter returned by the [DescribeHistoryTasks](~~2639186~~) operation.
     *
     * @example modifySwitchTime
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The task ID. Separate multiple IDs with commas (,). You can specify up to 10 task IDs.
     *
     * @example t-83br18hlpdrw3uxxxx
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'actionParams'         => 'ActionParams',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'stepName'             => 'StepName',
        'taskAction'           => 'TaskAction',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionParams) {
            $res['ActionParams'] = $this->actionParams;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTaskInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionParams'])) {
            $model->actionParams = $map['ActionParams'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
