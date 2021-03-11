<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifyAuditLogConfigRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

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
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $auditLogSwitchSource;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var string
     */
    public $proxyAudit;

    /**
     * @var bool
     */
    public $dbAudit;

    /**
     * @var string
     */
    public $auditCommand;
    protected $_name = [
        'securityToken'        => 'SecurityToken',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'instanceId'           => 'InstanceId',
        'auditLogSwitchSource' => 'AuditLogSwitchSource',
        'serviceType'          => 'ServiceType',
        'retention'            => 'Retention',
        'proxyAudit'           => 'ProxyAudit',
        'dbAudit'              => 'DbAudit',
        'auditCommand'         => 'AuditCommand',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->auditLogSwitchSource) {
            $res['AuditLogSwitchSource'] = $this->auditLogSwitchSource;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->proxyAudit) {
            $res['ProxyAudit'] = $this->proxyAudit;
        }
        if (null !== $this->dbAudit) {
            $res['DbAudit'] = $this->dbAudit;
        }
        if (null !== $this->auditCommand) {
            $res['AuditCommand'] = $this->auditCommand;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAuditLogConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AuditLogSwitchSource'])) {
            $model->auditLogSwitchSource = $map['AuditLogSwitchSource'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['ProxyAudit'])) {
            $model->proxyAudit = $map['ProxyAudit'];
        }
        if (isset($map['DbAudit'])) {
            $model->dbAudit = $map['DbAudit'];
        }
        if (isset($map['AuditCommand'])) {
            $model->auditCommand = $map['AuditCommand'];
        }

        return $model;
    }
}
