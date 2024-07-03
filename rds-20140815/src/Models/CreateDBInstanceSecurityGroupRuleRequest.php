<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceSecurityGroupRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example rm-bp15i4hn07r******
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example zht_test
     *
     * @var string
     */
    public $description;

    /**
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example 1/200
     *
     * @var string
     */
    public $portRange;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example 192.XX.XX.100
     *
     * @var string
     */
    public $sourceCidrIp;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'description'          => 'Description',
        'ipProtocol'           => 'IpProtocol',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'portRange'            => 'PortRange',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sourceCidrIp'         => 'SourceCidrIp',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBInstanceSecurityGroupRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }

        return $model;
    }
}
