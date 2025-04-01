<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
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
    public $paramNoLooseSentinelEnabled;

    /**
     * @var string
     */
    public $paramNoLooseSentinelPasswordFreeAccess;

    /**
     * @var string
     */
    public $paramNoLooseSentinelPasswordFreeCommands;

    /**
     * @var string
     */
    public $paramReplMode;

    /**
     * @var string
     */
    public $paramSemisyncReplTimeout;

    /**
     * @var string
     */
    public $paramSentinelCompatEnable;

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
    protected $_name = [
        'config' => 'Config',
        'instanceId' => 'InstanceId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'paramNoLooseSentinelEnabled' => 'ParamNoLooseSentinelEnabled',
        'paramNoLooseSentinelPasswordFreeAccess' => 'ParamNoLooseSentinelPasswordFreeAccess',
        'paramNoLooseSentinelPasswordFreeCommands' => 'ParamNoLooseSentinelPasswordFreeCommands',
        'paramReplMode' => 'ParamReplMode',
        'paramSemisyncReplTimeout' => 'ParamSemisyncReplTimeout',
        'paramSentinelCompatEnable' => 'ParamSentinelCompatEnable',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
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

        if (null !== $this->paramNoLooseSentinelEnabled) {
            $res['ParamNoLooseSentinelEnabled'] = $this->paramNoLooseSentinelEnabled;
        }

        if (null !== $this->paramNoLooseSentinelPasswordFreeAccess) {
            $res['ParamNoLooseSentinelPasswordFreeAccess'] = $this->paramNoLooseSentinelPasswordFreeAccess;
        }

        if (null !== $this->paramNoLooseSentinelPasswordFreeCommands) {
            $res['ParamNoLooseSentinelPasswordFreeCommands'] = $this->paramNoLooseSentinelPasswordFreeCommands;
        }

        if (null !== $this->paramReplMode) {
            $res['ParamReplMode'] = $this->paramReplMode;
        }

        if (null !== $this->paramSemisyncReplTimeout) {
            $res['ParamSemisyncReplTimeout'] = $this->paramSemisyncReplTimeout;
        }

        if (null !== $this->paramSentinelCompatEnable) {
            $res['ParamSentinelCompatEnable'] = $this->paramSentinelCompatEnable;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
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

        if (isset($map['ParamNoLooseSentinelEnabled'])) {
            $model->paramNoLooseSentinelEnabled = $map['ParamNoLooseSentinelEnabled'];
        }

        if (isset($map['ParamNoLooseSentinelPasswordFreeAccess'])) {
            $model->paramNoLooseSentinelPasswordFreeAccess = $map['ParamNoLooseSentinelPasswordFreeAccess'];
        }

        if (isset($map['ParamNoLooseSentinelPasswordFreeCommands'])) {
            $model->paramNoLooseSentinelPasswordFreeCommands = $map['ParamNoLooseSentinelPasswordFreeCommands'];
        }

        if (isset($map['ParamReplMode'])) {
            $model->paramReplMode = $map['ParamReplMode'];
        }

        if (isset($map['ParamSemisyncReplTimeout'])) {
            $model->paramSemisyncReplTimeout = $map['ParamSemisyncReplTimeout'];
        }

        if (isset($map['ParamSentinelCompatEnable'])) {
            $model->paramSentinelCompatEnable = $map['ParamSentinelCompatEnable'];
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

        return $model;
    }
}
