<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyReadWriteSplittingConnectionRequest extends Model
{
    /**
     * @description The prefix of the read/write splitting endpoint. The prefix must be unique. It can be up to 30 characters in length and can contain lowercase letters and hyphens (-). It must start with a lowercase letter.
     *
     * > The default prefix consists of the name of the primary instance followed by the letters rw.
     * @example rm-m5xxxxxxxxrw.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The ID of the primary instance. You can call the [DescribeDBInstances](~~610396~~) operation to query the ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The method that is used to assign read weights. Valid values:
     *
     *   **Standard**: The system automatically assigns read weights to the primary and read-only instances based on the specifications of these instances.
     *   **Custom**: You must manually assign a read weight to each instance.
     *
     * > You must specify at least one of **MaxDelayTime** and **DistributionType**.
     * @example Standard
     *
     * @var string
     */
    public $distributionType;

    /**
     * @description The latency threshold that is allowed by the read/write splitting link. Unit: seconds. If the latency on a read-only instance exceeds the specified threshold, the system no longer routes read requests to the read-only instance. If you do not specify this parameter, the default value of this parameter is retained.
     *
     * >
     *
     *   If the primary instance runs SQL Server 2017 on RDS Cluster Edition, the **MaxDelayTime** parameter is not supported.
     *
     *   You must specify at least one of **MaxDelayTime** and **DistributionType**.
     *
     * @example 12
     *
     * @var string
     */
    public $maxDelayTime;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The port that is associated with the read/write splitting endpoint.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The read weights of the primary instance and its read-only instances. A read weight must be a multiple of 100 and cannot exceed 10,000.
     *
     *   For ApsaraDB RDS instances, the value of this parameter is in the following format: `{"<ID of the read-only instance >":<Weight>,"master":<Weight>,"slave":<Weight>}`.
     *   For ApsaraDB MyBase instances, the value of this parameter is in the following format: `[{"instanceName":"<ID of the primary instance>","weight":<Weight>,"role":"master"},{"instanceName":"<ID of the primary instance>","weight":<Weight>,"role":"slave"},{"instanceName":"<ID of the read-only instance>","weight":<Weight>,"role":"master"}]`
     *
     * >
     *
     *   This parameter must be specified when **DistributionType** is set to **Custom**.
     *
     *   If **DistributionType** is set to **Standard**, this parameter is invalid.
     *
     * @example {"rm-bp1**********":800,"master":400,"slave":400}
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'DBInstanceId'           => 'DBInstanceId',
        'distributionType'       => 'DistributionType',
        'maxDelayTime'           => 'MaxDelayTime',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'port'                   => 'Port',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'weight'                 => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->distributionType) {
            $res['DistributionType'] = $this->distributionType;
        }
        if (null !== $this->maxDelayTime) {
            $res['MaxDelayTime'] = $this->maxDelayTime;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyReadWriteSplittingConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DistributionType'])) {
            $model->distributionType = $map['DistributionType'];
        }
        if (isset($map['MaxDelayTime'])) {
            $model->maxDelayTime = $map['MaxDelayTime'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
