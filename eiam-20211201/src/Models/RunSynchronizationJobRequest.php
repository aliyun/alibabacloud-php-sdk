<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\RunSynchronizationJobRequest\synchronizationScopeConfig;
use AlibabaCloud\Tea\Model;

class RunSynchronizationJobRequest extends Model
{
    /**
     * @description Synchronization task description
     *
     * @example 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Whether initialize password
     *
     * @example true
     *
     * @var bool
     */
    public $passwordInitialization;

    /**
     * @description Synchronization scope
     *
     * @var synchronizationScopeConfig
     */
    public $synchronizationScopeConfig;

    /**
     * @description The ID of the synchronization destination.
     *
     * This parameter is required.
     *
     * @example idp_my664lwkhpicbyzirog3ngxxxxx
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The type of the synchronization destination. Valid values:
     *
     *   identity_provider
     *   application
     *
     * This parameter is required.
     *
     * @example identity_provider
     *
     * @var string
     */
    public $targetType;

    /**
     * @description User identity types
     *
     * @var string[]
     */
    public $userIdentityTypes;
    protected $_name = [
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'passwordInitialization' => 'PasswordInitialization',
        'synchronizationScopeConfig' => 'SynchronizationScopeConfig',
        'targetId' => 'TargetId',
        'targetType' => 'TargetType',
        'userIdentityTypes' => 'UserIdentityTypes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->passwordInitialization) {
            $res['PasswordInitialization'] = $this->passwordInitialization;
        }
        if (null !== $this->synchronizationScopeConfig) {
            $res['SynchronizationScopeConfig'] = null !== $this->synchronizationScopeConfig ? $this->synchronizationScopeConfig->toMap() : null;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->userIdentityTypes) {
            $res['UserIdentityTypes'] = $this->userIdentityTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunSynchronizationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PasswordInitialization'])) {
            $model->passwordInitialization = $map['PasswordInitialization'];
        }
        if (isset($map['SynchronizationScopeConfig'])) {
            $model->synchronizationScopeConfig = synchronizationScopeConfig::fromMap($map['SynchronizationScopeConfig']);
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['UserIdentityTypes'])) {
            if (!empty($map['UserIdentityTypes'])) {
                $model->userIdentityTypes = $map['UserIdentityTypes'];
            }
        }

        return $model;
    }
}
