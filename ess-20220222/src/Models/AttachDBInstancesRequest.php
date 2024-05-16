<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class AttachDBInstancesRequest extends Model
{
    /**
     * @description The mode in which you want to attach the ApsaraDB RDS instance to the scaling group. Valid values:
     *
     *   SecurityIp: the SecurityIp mode. Auto Scaling automatically adds the private IP addresses of the scaled out instances to the IP address whitelist of the ApsaraDB RDS instance. You can select this mode only when you attach an ApsaraDB RDS instance to a scaling group.
     *   SecurityGroup: the security group mode. Auto Scaling adds the security group of the scaling configuration to the security group whitelist for registration and association.
     *
     * @example SecurityIp
     *
     * @var string
     */
    public $attachMode;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that the value is unique among different requests.
     *
     * The token can only contain ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure the idempotence of a request](https://help.aliyun.com/document_detail/25965.html).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the ApsaraDB RDS instance.
     *
     * This parameter is required.
     * @var string[]
     */
    public $DBInstances;

    /**
     * @description Specifies whether to add the private IP addresses of all instances in the scaling group to the IP address whitelist of the ApsaraDB RDS instance. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $forceAttach;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the scaling group.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The ID of the scaling group.
     *
     * This parameter is required.
     * @example asg-bp1avr6ensitts3w****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The type of the database that you want to attach to the scaling group. Valid values:
     *
     *   ApsaraDB RDS
     *   ApsaraDB for Redis
     *   ApsaraDB for MongoDB
     *
     * Default value: RDS.
     * @example RDS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'attachMode'           => 'AttachMode',
        'clientToken'          => 'ClientToken',
        'DBInstances'          => 'DBInstances',
        'forceAttach'          => 'ForceAttach',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId'       => 'ScalingGroupId',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachMode) {
            $res['AttachMode'] = $this->attachMode;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstances) {
            $res['DBInstances'] = $this->DBInstances;
        }
        if (null !== $this->forceAttach) {
            $res['ForceAttach'] = $this->forceAttach;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachDBInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachMode'])) {
            $model->attachMode = $map['AttachMode'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = $map['DBInstances'];
            }
        }
        if (isset($map['ForceAttach'])) {
            $model->forceAttach = $map['ForceAttach'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
