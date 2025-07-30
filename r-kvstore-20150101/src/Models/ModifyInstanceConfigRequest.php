<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceConfigRequest extends Model
{
    /**
     * @description 需修改的实例参数，格式为JSON，修改后的值会覆盖原来的值。例如您只希望修改**maxmemory-policy**参数为**noeviction**，您可以传入`{"maxmemory-policy":"noeviction"}`。
     * > 关于各参数的详细说明，请参见[参数说明](https://help.aliyun.com/document_detail/259681.html)。
     *
     * @example {"maxmemory-policy":"volatile-lru","zset-max-ziplist-entries":128,"zset-max-ziplist-value":64,"hash-max-ziplist-entries":512,"set-max-intset-entries":512}
     *
     * @var string
     */
    public $config;

    /**
     * @description 实例ID。
     *
     * This parameter is required.
     *
     * @example r-bp1zxszhcgatnx****
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
     * @description 哨兵兼容模式，适用于非集群实例。取值说明：
     * **no**（默认）：未开启
     * **yes**：开启
     * > 更多信息请参见[Sentinel兼容模式](https://help.aliyun.com/document_detail/178911.html)。
     *
     * @example yes
     *
     * @var string
     */
    public $paramNoLooseSentinelEnabled;

    /**
     * @description 开启哨兵模式时，是否允许免密执行Sentinel相关命令，取值说明：
     * **no**（默认）：关闭。
     * **yes**：开启。开启后，可以在任意连接上免密执行Sentinel命令以及使用SENTINEL命令监听+switch-master通道。
     *
     * @example ****
     *
     * @var string
     */
    public $paramNoLooseSentinelPasswordFreeAccess;

    /**
     * @description 启用哨兵模式及ParamNoLooseSentinelPasswordFreeAccess参数后，可通过本参数添加额外的免密命令列表（默认为空）。
     * > * 设置后可在任意连接上无需密码执行对应命令，请谨慎操作。
     * > * 命令需使用小写字母，多个命令以英文逗号(,)分隔。
     *
     * @example ****
     *
     * @var string
     */
    public $paramNoLooseSentinelPasswordFreeCommands;

    /**
     * @description 同步模式：
     * **async**（默认）：异步
     * **semisync**：半同步
     *
     * @example async
     *
     * @var string
     */
    public $paramReplMode;

    /**
     * @description 半同步模式的降级阈值。仅半同步支持配置该参数，单位为ms，取值范围为10~60000，默认为500。
     * > * 当同步延迟超出该阈值时，同步模式会自动转为异步，当同步延迟消除后，同步模式会自动转换为半同步。
     * > * 仅Tair企业版实例支持，该功能公测中。
     *
     * @example 500
     *
     * @var string
     */
    public $paramSemisyncReplTimeout;

    /**
     * @description 哨兵兼容模式，适用于集群架构代理连接模式或读写分离架构的实例，取值说明：
     * **0**（默认）：未开启
     * **1**：开启
     * > 更多信息请参见[Sentinel兼容模式](https://help.aliyun.com/document_detail/178911.html)。
     *
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyInstanceConfigRequest
     */
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
