<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class RestoreInstanceRequest extends Model
{
    /**
     * @description The ID of the backup file. You can call the [DescribeBackups](https://help.aliyun.com/document_detail/61081.html) operation to query the IDs of backup files.
     *
     * @example 78241****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The key that you want to restore. You can specify multiple keys. Separate multiple keys with commas (,). Regular expressions are supported.
     *
     * >
     *
     *   In a regular expression, an asterisk (`*`) matches zero or more occurrences of a subexpression that occurs before. For example, if you set this parameter to `h.*llo`, strings such as `hllo` and `heeeello` are matched.
     *
     *   This parameter is available only if you set the **RestoreType** parameter to **1**.
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
     * @description The point in time to which you want to restore data. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * >
     *
     *   If the [data flashback](https://help.aliyun.com/document_detail/148479.html) feature is enabled for the instance, you can specify this parameter and the **FilterKey** parameter to restore the data of the specified key to the specified point in time that is accurate to the second. Other keys are not affected. This way, you can achieve more fine-grained data restoration.
     *
     *   This parameter is available only if you set the **RestoreType** parameter to **1**.
     *
     * @example 2021-07-06T07:25:57Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The restoration mode. Default value: 0. Valid values:
     *
     *   **0**: restores data from the specified backup set.
     *   **1**: restores data to a specified point in time. You can specify this value only if the [data flashback](https://help.aliyun.com/document_detail/148479.html) feature is enabled for the instance. If you specify this value, you must also specify the **RestoreTime** parameter.
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
     * @description The expiration offset time point of a key. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time must be in UTC. The key expires after the remaining validity period of the key elapses based on the expiration offset time point.
     *
     * > This time point must be between the specified flashback time point and the submission time of the data restoration task.
     * @example 2021-07-06T08:25:57Z
     *
     * @var string
     */
    public $timeShift;
    protected $_name = [
        'backupId'             => 'BackupId',
        'filterKey'            => 'FilterKey',
        'instanceId'           => 'InstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'restoreTime'          => 'RestoreTime',
        'restoreType'          => 'RestoreType',
        'securityToken'        => 'SecurityToken',
        'timeShift'            => 'TimeShift',
    ];

    public function validate()
    {
    }

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
