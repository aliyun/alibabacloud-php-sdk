<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class UpgradeMinorVersionRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example cc-bp108z124a8o7****
     *
     * @var string
     */
    public $DBClusterId;

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
     * @description Specifies whether to update the minor engine version of the ApsaraDB for ClickHouse cluster immediately. Valid values:
     *
     *   **true**: updates the minor engine version of the ApsaraDB for ClickHouse cluster immediately.
     *   **false**: updates the minor engine version of the ApsaraDB for ClickHouse cluster at the specified time or within the specified maintenance window.
     *
     * >  If you want to update the minor engine version of the ApsaraDB for ClickHouse cluster at the specified time, **UpgradeTime** is required.
     * @example false
     *
     * @var bool
     */
    public $upgradeImmediately;

    /**
     * @description The update time. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time must be in Coordinated Universal Time (UTC).
     *
     * >  If you do not set this parameter, the minor engine version of an ApsaraDB for ClickHouse cluster is updated within the specified maintenance window.
     * @example 2022-08-07T16:38Z
     *
     * @var string
     */
    public $upgradeTime;

    /**
     * @description The minor engine version to which you want to update.
     *
     * >  By default, UpgradeVersion is not set and the minor engine version of the ApsaraDB for ClickHouse cluster is updated to the latest version.
     * @example 1.37.0
     *
     * @var string
     */
    public $upgradeVersion;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'upgradeImmediately'   => 'UpgradeImmediately',
        'upgradeTime'          => 'UpgradeTime',
        'upgradeVersion'       => 'UpgradeVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (null !== $this->upgradeImmediately) {
            $res['UpgradeImmediately'] = $this->upgradeImmediately;
        }
        if (null !== $this->upgradeTime) {
            $res['UpgradeTime'] = $this->upgradeTime;
        }
        if (null !== $this->upgradeVersion) {
            $res['UpgradeVersion'] = $this->upgradeVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeMinorVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
        if (isset($map['UpgradeImmediately'])) {
            $model->upgradeImmediately = $map['UpgradeImmediately'];
        }
        if (isset($map['UpgradeTime'])) {
            $model->upgradeTime = $map['UpgradeTime'];
        }
        if (isset($map['UpgradeVersion'])) {
            $model->upgradeVersion = $map['UpgradeVersion'];
        }

        return $model;
    }
}
