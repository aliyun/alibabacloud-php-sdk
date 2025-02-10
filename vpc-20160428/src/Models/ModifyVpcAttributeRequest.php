<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class ModifyVpcAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $enableDnsHostname;
    /**
     * @var bool
     */
    public $enableIPv6;
    /**
     * @var string
     */
    public $ipv6CidrBlock;
    /**
     * @var string
     */
    public $ipv6Isp;
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
    public $regionId;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cidrBlock'            => 'CidrBlock',
        'description'          => 'Description',
        'enableDnsHostname'    => 'EnableDnsHostname',
        'enableIPv6'           => 'EnableIPv6',
        'ipv6CidrBlock'        => 'Ipv6CidrBlock',
        'ipv6Isp'              => 'Ipv6Isp',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'vpcId'                => 'VpcId',
        'vpcName'              => 'VpcName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableDnsHostname) {
            $res['EnableDnsHostname'] = $this->enableDnsHostname;
        }

        if (null !== $this->enableIPv6) {
            $res['EnableIPv6'] = $this->enableIPv6;
        }

        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }

        if (null !== $this->ipv6Isp) {
            $res['Ipv6Isp'] = $this->ipv6Isp;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableDnsHostname'])) {
            $model->enableDnsHostname = $map['EnableDnsHostname'];
        }

        if (isset($map['EnableIPv6'])) {
            $model->enableIPv6 = $map['EnableIPv6'];
        }

        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }

        if (isset($map['Ipv6Isp'])) {
            $model->ipv6Isp = $map['Ipv6Isp'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
