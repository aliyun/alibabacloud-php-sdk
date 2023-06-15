<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceMajorVersionPrecheckRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * The instance must meet the following requirements:
     *
     *   The instance runs PostgreSQL 12, PostgreSQL 11, PostgreSQL 10, or PostgreSQL 9.4.
     *   The instance runs RDS High-availability Edition or RDS Basic Edition.
     *   The instance resides in a virtual private cloud (VPC). If the instance resides in the classic network, you must migrate the instance to a VPC before you call this operation. For more information about how to view or change the network type of an instance, see [Change the network type of an ApsaraDB RDS for PostgreSQL instance](~~96761~~).
     *   The instance cannot be a read-only instance and cannot be created in a dedicated cluster.
     *   The ID of the instance does not start with `pg-cn`.
     *
     * @example pgm-bp1c808s731l****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The new major engine version of the instance. The new major engine version must be later than the original major engine version.
     *
     * For example, if the original major engine version is PostgreSQL 9.4, the new major engine version can be PostgreSQL 10, PostgreSQL 11, PostgreSQL 12, or PostgreSQL 13.
     * @example 12.0
     *
     * @var string
     */
    public $targetMajorVersion;
    protected $_name = [
        'DBInstanceId'       => 'DBInstanceId',
        'resourceOwnerId'    => 'ResourceOwnerId',
        'targetMajorVersion' => 'TargetMajorVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->targetMajorVersion) {
            $res['TargetMajorVersion'] = $this->targetMajorVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceMajorVersionPrecheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TargetMajorVersion'])) {
            $model->targetMajorVersion = $map['TargetMajorVersion'];
        }

        return $model;
    }
}
