<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class AttachInstanceRamRoleRequest extends Model
{
    /**
     * @description The IDs of instances. The value can be a JSON array that consists of up to 100 instance IDs. Separate the IDs with commas (,).
     *
     * @example [“i-bp14ss25xca5ex1u****”, “i-bp154z5o1qjalfse****”, “i-bp10ws62o04ubhvi****”…]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The policy. The policy must be 1 to 1,024 characters in length. When you attach an instance RAM role to one or more instances, you can specify an additional policy to further restrict the permissions of the role. For more information, see [Policy overview](~~93732~~).
     *
     * @example {"Statement": [{"Action": ["*"],"Effect": "Allow","Resource": ["*"]}],"Version":"1"}
     *
     * @var string
     */
    public $policy;

    /**
     * @description The name of the instance RAM role. You can call the [ListRoles](~~28713~~) operation provided by RAM to query the instance RAM roles that you created.
     *
     * @example testRamRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent list of regions.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'instanceIds'          => 'InstanceIds',
        'ownerId'              => 'OwnerId',
        'policy'               => 'Policy',
        'ramRoleName'          => 'RamRoleName',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachInstanceRamRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
