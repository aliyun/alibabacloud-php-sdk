<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class RestoreInstanceRequest extends Model
{
    /**
     * @description The ID of the backup file. You can call the [DescribeBackups](https://help.aliyun.com/document_detail/473823.html)operation to query the IDs of backup files.
     *
     * @example 78241****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The key that you want to restore. You can specify multiple keys. Separate multiple keys with commas (,). Regular expressions are supported.
     *
     *   If you do not specify this parameter, the entire instance is restored.
     *   If you specify this parameter, only the involved keys are restored. Only classic instances support this feature.
     *
     * >  In a regular expression, an asterisk (`*`) matches zero or more occurrences of a subexpression that occurs before. For example, if you set this parameter to `h.*llo`, strings such as `hllo` and `heeeello` are matched.
     *
     * @example key:00000007198*
     *
     * @var string
     */
    public $filterKey;

    /**
     * @description The ID of the instance.
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
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The point in time to which you want to restore data. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * >  The point in time cannot be earlier than the point in time when the data flashback feature is enabled.
     *
     * @example 2021-07-06T07:25:57Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The restoration mode. Valid values:
     *
     *   **0** (default): The parameter is invalid.
     *   **1**: restores data to a specified point in time. You can specify this value only if the [data flashback](https://help.aliyun.com/document_detail/148479.html) feature is enabled for the instance. If you specify this value, you also need to set the **RestoreTime** parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $restoreType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description When you restore a classic instance, regardless of whether you choose to restore all data or specific keys, you can apply an offset to the expiration time of the keys. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time must be in UTC. A key expires after the remaining validity period of the key elapses based on the expiration offset time point.
     *
     * >
     *
     *   This feature applies only to keys and does not work on elements in the self-developed data structures of Tair, such as fields in exHash and skeys in TairTS.
     *
     *   This time point must be between the specified flashback time point and the submission time of the data restoration task.
     *
     * @example 2021-07-06T08:25:57Z
     *
     * @var string
     */
    public $timeShift;
    protected $_name = [
        'backupId' => 'BackupId',
        'filterKey' => 'FilterKey',
        'instanceId' => 'InstanceId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'restoreTime' => 'RestoreTime',
        'restoreType' => 'RestoreType',
        'securityToken' => 'SecurityToken',
        'timeShift' => 'TimeShift',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
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
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->timeShift) {
            $res['TimeShift'] = $this->timeShift;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['FilterKey'])) {
            $model->filterKey = $map['FilterKey'];
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
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['TimeShift'])) {
            $model->timeShift = $map['TimeShift'];
        }

        return $model;
    }
}
