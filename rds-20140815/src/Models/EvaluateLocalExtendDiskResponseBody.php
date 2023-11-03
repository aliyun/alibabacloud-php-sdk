<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class EvaluateLocalExtendDiskResponseBody extends Model
{
    /**
     * @description Specifies whether to query the virtual IP addresses of only healthy CDN POPs. Valid values:
     *
     *   **on**: healthy CDN edge nodes.
     *   **off**: all CDN edge nodes.
     *
     * @example True
     *
     * @var string
     */
    public $available;

    /**
     * @description The ID of the RDS instance.
     *
     * @example rm-bp1375i66nda3zn58
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The data migration method of the instance. This parameter is available only for instances that are created in dedicated clusters. Valid values:
     *
     *   **0** (default): The system preferentially upgrades or downgrades the instance without a migration. If the resources on the host on which the instance resides are insufficient, the system migrates the instance to another suitable host.
     *   **1**: The system upgrades or downgrades the instance without a migration. If the upgrade or downgrade is not supported, the system reports an error.
     *   **2**: The system migrates the data of the instance from the host on which the instance resides to another host. You must also specify **DedicatedHostGroupId**, **TargetDedicatedHostIdForMaster**, and **TargetDedicatedHostIdForSlave**. If you set DBInstanceTransType to 2, you cannot migrate the data of the instance to the host on which the instance resides. If you migrate the data of the instance to the host on which the instance resides, the migration fails.
     *
     * @example 0
     *
     * @var string
     */
    public $DBInstanceTransType;

    /**
     * @description Local Disk Restrictions.
     *
     * @example 100
     *
     * @var int
     */
    public $localUpgradeDiskLimit;

    /**
     * @description The ID of the request.
     *
     * @example A4C4D26F-E5CE-5A28-8C54-46A6FB318223
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'available'             => 'Available',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceTransType'   => 'DBInstanceTransType',
        'localUpgradeDiskLimit' => 'LocalUpgradeDiskLimit',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceTransType) {
            $res['DBInstanceTransType'] = $this->DBInstanceTransType;
        }
        if (null !== $this->localUpgradeDiskLimit) {
            $res['LocalUpgradeDiskLimit'] = $this->localUpgradeDiskLimit;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateLocalExtendDiskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceTransType'])) {
            $model->DBInstanceTransType = $map['DBInstanceTransType'];
        }
        if (isset($map['LocalUpgradeDiskLimit'])) {
            $model->localUpgradeDiskLimit = $map['LocalUpgradeDiskLimit'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
