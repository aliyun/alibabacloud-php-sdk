<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AssociateEipAddressBatchRequest extends Model
{
    /**
     * @description The ID of the instance to be associated with EIPs.
     *
     * The instance can be a NAT gateway or a secondary ENI.
     * @example ngw-hp3akk9irtd69jad****
     *
     * @var string
     */
    public $bindedInstanceId;

    /**
     * @description The type of instance with which you want to associate the EIPs. Valid values:
     *
     *   **Nat**: a NAT gateway
     *   **NetworkInterface**: a secondary ENI
     *
     * @example Nat
     *
     * @var string
     */
    public $bindedInstanceType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among all requests. The token can only contain ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses **RequestId** as **ClientToken**. **RequestId** might be different for each API request.
     * @example 02fb3da4-130e-11e9-8e44-0016e04115b
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The association mode. Set the value to **MULTI_BINDED**, which specifies the Multi-EIP-to-ENI mode.
     *
     * This parameter is required only if **InstanceType** is set to **NetworkInterface**.
     * @example MULTI_BINDED
     *
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region to which the EIPs belong.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to obtain the region ID.
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
        'bindedInstanceId'     => 'BindedInstanceId',
        'bindedInstanceType'   => 'BindedInstanceType',
        'clientToken'          => 'ClientToken',
        'instanceIds'          => 'InstanceIds',
        'mode'                 => 'Mode',
        'ownerId'              => 'OwnerId',
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
        if (null !== $this->bindedInstanceId) {
            $res['BindedInstanceId'] = $this->bindedInstanceId;
        }
        if (null !== $this->bindedInstanceType) {
            $res['BindedInstanceType'] = $this->bindedInstanceType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateEipAddressBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindedInstanceId'])) {
            $model->bindedInstanceId = $map['BindedInstanceId'];
        }
        if (isset($map['BindedInstanceType'])) {
            $model->bindedInstanceType = $map['BindedInstanceType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
