<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class StopInstanceRequest extends Model
{
    /**
     * @description >  This parameter will be removed in the future and is retained only to ensure compatibility. We recommend that you ignore this parameter.
     *
     * @example true
     *
     * @var bool
     */
    public $confirmStop;

    /**
     * @description Specifies whether to check the validity of the request without actually making the request. Valid values:
     *
     *   true: The validity of the request is checked, but the request is not made. Check items include the required parameters, service limits, available ECS resources, and the request format. If the check fails, the corresponding error message is returned. If the check succeeds, the `DryRunOperation` error code is returned.
     *   false: The validity of the request is checked, and the request is made if the check succeeds.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to forcibly stop the instance. Valid values:
     *
     *   true: forcibly stops the instance.
     *   false: normally stops the instance.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $forceStop;

    /**
     * @description >  This parameter is currently in invitational preview and unavailable for general users.
     *
     * @example hide
     *
     * @var bool
     */
    public $hibernate;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The stop mode of the pay-as-you-go instance. Valid values:
     *
     *   StopCharging: economical mode. For information about how `StopCharging` takes effect, see the "Prerequisites" section in [Economical mode](~~63353~~).
     *   KeepCharging: standard mode. After the instance is stopped in standard mode, you continue to be charged for it.
     *
     * Default value: If the prerequisites required for enabling economical mode are met and you have enabled this mode in the ECS console, the default value is [StopCharging](~~63353#default~~). For more information, see the "Enable economical mode" section in `Economical mode`. Otherwise, the default value is `KeepCharging`.
     * @example KeepCharging
     *
     * @var string
     */
    public $stoppedMode;
    protected $_name = [
        'confirmStop'          => 'ConfirmStop',
        'dryRun'               => 'DryRun',
        'forceStop'            => 'ForceStop',
        'hibernate'            => 'Hibernate',
        'instanceId'           => 'InstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'stoppedMode'          => 'StoppedMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confirmStop) {
            $res['ConfirmStop'] = $this->confirmStop;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->forceStop) {
            $res['ForceStop'] = $this->forceStop;
        }
        if (null !== $this->hibernate) {
            $res['Hibernate'] = $this->hibernate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfirmStop'])) {
            $model->confirmStop = $map['ConfirmStop'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ForceStop'])) {
            $model->forceStop = $map['ForceStop'];
        }
        if (isset($map['Hibernate'])) {
            $model->hibernate = $map['Hibernate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
        }

        return $model;
    }
}
