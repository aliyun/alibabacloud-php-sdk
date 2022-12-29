<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyAuditPolicyRequest extends Model
{
    /**
     * @description The request source for the audit log feature. Set the value to **Console**.
     *
     * @example Console
     *
     * @var string
     */
    public $auditLogSwitchSource;

    /**
     * @description Specifies whether the audit log feature is enabled. Valid values:
     *
     *   **enable**
     *   **disabled**
     *
     * @example enable
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description The ID of the instance.
     *
     * @example dds-bp1785659e3f****
     *
     * @var string
     */
    public $DBInstanceId;

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
     * @var string
     */
    public $securityToken;

    /**
     * @description The type of the audit log feature. Valid values:
     *
     *   **Trail**: the free trial edition
     *   **Standard**: the official edition
     *
     * >  Default value: **Trial**. Starting from January 6, 2022, the official edition of the audit log feature has been launched in all regions, and new applications for the free trial edition have ended. We recommend that you set this parameter to **Standard**.
     * @example Standard
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The log retention period. Valid values: 1 to 365 days. Default value: 30 days.
     *
     * @example 30
     *
     * @var int
     */
    public $storagePeriod;
    protected $_name = [
        'auditLogSwitchSource' => 'AuditLogSwitchSource',
        'auditStatus'          => 'AuditStatus',
        'DBInstanceId'         => 'DBInstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'serviceType'          => 'ServiceType',
        'storagePeriod'        => 'StoragePeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditLogSwitchSource) {
            $res['AuditLogSwitchSource'] = $this->auditLogSwitchSource;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->storagePeriod) {
            $res['StoragePeriod'] = $this->storagePeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAuditPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditLogSwitchSource'])) {
            $model->auditLogSwitchSource = $map['AuditLogSwitchSource'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['StoragePeriod'])) {
            $model->storagePeriod = $map['StoragePeriod'];
        }

        return $model;
    }
}
