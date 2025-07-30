<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifyTaskInfoRequest extends Model
{
    /**
     * @description The JSON-formatted parameters related to the action. Set this parameter to `{"recoverMode": "xxx", "recoverTime": "xxx"}` if the **TaskAction** parameter is set to **modifySwitchTime**.
     *
     *   **recoverMode**: specifies the restoration mode for the task. Valid values:
     *
     *   **timePoint**: performs the task at the specified point in time.
     *   **immediate**: performs the task immediately.
     *   **maintainTime**: performs the task within the maintenance window.
     *
     *   **recoverTime**: specifies the point in time for restoration. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. This parameter is required if the **recoverMode** parameter is set to **timePoint**.
     *
     * @example {\\"recoverMode\\":\\"immediate\\"}
     *
     * @var string
     */
    public $actionParams;

    /**
     * @description The ID of the region where the instance is deployed.
     *
     * This parameter is required.
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
     * @var string
     */
    public $securityToken;

    /**
     * @description The name of the current step.
     *
     * @example exec_task
     *
     * @var string
     */
    public $stepName;

    /**
     * @description The action name. Set the value to **modifySwitchTime**. The value specifies that you want to change the switching time or restoration time.
     *
     * @example modifySwitchTime
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The task ID. Separate multiple task IDs with commas (,). You can specify up to 30 task IDs.
     *
     * This parameter is required.
     *
     * @example t-0mq3kfhn8i1nlt****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'actionParams' => 'ActionParams',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
        'stepName' => 'StepName',
        'taskAction' => 'TaskAction',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
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
