<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewayAttributeRequest\logDelivery;

class ModifyNatGatewayAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eipBindMode;

    /**
     * @var bool
     */
    public $enableSessionLog;

    /**
     * @var bool
     */
    public $icmpReplyEnabled;

    /**
     * @var logDelivery
     */
    public $logDelivery;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $natGatewayId;

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
    protected $_name = [
        'description' => 'Description',
        'eipBindMode' => 'EipBindMode',
        'enableSessionLog' => 'EnableSessionLog',
        'icmpReplyEnabled' => 'IcmpReplyEnabled',
        'logDelivery' => 'LogDelivery',
        'name' => 'Name',
        'natGatewayId' => 'NatGatewayId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (null !== $this->logDelivery) {
            $this->logDelivery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eipBindMode) {
            $res['EipBindMode'] = $this->eipBindMode;
        }

        if (null !== $this->enableSessionLog) {
            $res['EnableSessionLog'] = $this->enableSessionLog;
        }

        if (null !== $this->icmpReplyEnabled) {
            $res['IcmpReplyEnabled'] = $this->icmpReplyEnabled;
        }

        if (null !== $this->logDelivery) {
            $res['LogDelivery'] = null !== $this->logDelivery ? $this->logDelivery->toArray($noStream) : $this->logDelivery;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EipBindMode'])) {
            $model->eipBindMode = $map['EipBindMode'];
        }

        if (isset($map['EnableSessionLog'])) {
            $model->enableSessionLog = $map['EnableSessionLog'];
        }

        if (isset($map['IcmpReplyEnabled'])) {
            $model->icmpReplyEnabled = $map['IcmpReplyEnabled'];
        }

        if (isset($map['LogDelivery'])) {
            $model->logDelivery = logDelivery::fromMap($map['LogDelivery']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
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

        return $model;
    }
}
