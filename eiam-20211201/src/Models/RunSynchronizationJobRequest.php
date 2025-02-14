<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\RunSynchronizationJobRequest\synchronizationScopeConfig;

class RunSynchronizationJobRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $passwordInitialization;
    /**
     * @var synchronizationScopeConfig
     */
    public $synchronizationScopeConfig;
    /**
     * @var string
     */
    public $targetId;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var string[]
     */
    public $userIdentityTypes;
    protected $_name = [
        'description'                => 'Description',
        'instanceId'                 => 'InstanceId',
        'passwordInitialization'     => 'PasswordInitialization',
        'synchronizationScopeConfig' => 'SynchronizationScopeConfig',
        'targetId'                   => 'TargetId',
        'targetType'                 => 'TargetType',
        'userIdentityTypes'          => 'UserIdentityTypes',
    ];

    public function validate()
    {
        if (null !== $this->synchronizationScopeConfig) {
            $this->synchronizationScopeConfig->validate();
        }
        if (\is_array($this->userIdentityTypes)) {
            Model::validateArray($this->userIdentityTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SynchronizationScopeConfig'] = null !== $this->synchronizationScopeConfig ? $this->synchronizationScopeConfig->toArray($noStream) : $this->synchronizationScopeConfig;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->userIdentityTypes) {
            if (\is_array($this->userIdentityTypes)) {
                $res['UserIdentityTypes'] = [];
                $n1                       = 0;
                foreach ($this->userIdentityTypes as $item1) {
                    $res['UserIdentityTypes'][$n1++] = $item1;
                }
            }
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
                $model->userIdentityTypes = [];
                $n1                       = 0;
                foreach ($map['UserIdentityTypes'] as $item1) {
                    $model->userIdentityTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
