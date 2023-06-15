<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByExpireTimeResponseBody\items;

use AlibabaCloud\Tea\Model;

class DBInstanceExpireTime extends Model
{
    /**
     * @description The description of the instance.
     *
     * @example Test database
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The status of the instance. For more information, see [Instance state table](~~26315~~).
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The expiration date and time of the instance. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * > Pay-as-you-go instances never expire.
     * @example 2019-03-27T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The lock mode of the instance. Valid values:
     *
     *   **Unlock**: The instance is not locked.
     *   **ManualLock**: The instance is manually locked.
     *   **LockByExpiration**: The instance is automatically locked after it expires.
     *   **LockByRestoration**: The instance is automatically locked before it is rolled back.
     *   **LockByDiskQuota**: The instance is automatically locked after its storage capacity is exhausted.
     *   **LockReadInstanceByDiskQuota**: The instance is a read-only instance and is automatically locked after its storage capacity is exhausted.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;
    protected $_name = [
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'expireTime'            => 'ExpireTime',
        'lockMode'              => 'LockMode',
        'payType'               => 'PayType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceExpireTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        return $model;
    }
}
