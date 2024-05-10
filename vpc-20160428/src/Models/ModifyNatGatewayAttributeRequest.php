<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewayAttributeRequest\logDelivery;
use AlibabaCloud\Tea\Model;

class ModifyNatGatewayAttributeRequest extends Model
{
    /**
     * @description The description of the NAT gateway.
     *
     * The description must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The mode in which the NAT gateway is associated with an elastic IP address (EIP). You can leave this parameter empty. If you want to specify a value for this parameter, set the value to **NAT**, which indicates that the NAT gateway is associated with the EIP in NAT mode.
     *
     **
     *
     **Description**
     *
     *   If EipBindMode is set to MULTI_BINDED when the NAT gateway is created, you can change the value of this parameter from **MULTI_BINDED** to **NAT**. If EipBindMode is set to NAT when the NAT gateway is created, you cannot change the value of this parameter from **NAT** to **MULTI_BINDED**. For more information about **MULTI_BINDED**, see [CreateNatGateway](https://help.aliyun.com/document_detail/120219.html).
     *
     *   When the mode in which the NAT gateway is associated with an EIP is being changed, a transient connection that lasts a few seconds may occur. If the number of EIPs with which the NAT gateway is associated increases, the transient connection lasts longer. You can change the mode only for a NAT gateway that is associated with up to five EIPs. We recommend that you change the mode during off-peak hours.
     *   After the mode is changed to **NAT**, the Internet NAT gateway is compatible with the IPv4 gateway. However, if you associate an EIP with the NAT gateway, the EIP occupies one private IP address on the vSwitch of the NAT gateway. Make sure that the vSwitch has sufficient private IP addresses. Otherwise, the EIP fails to be associated with the NAT gateway.
     *
     * @example NAT
     *
     * @var string
     */
    public $eipBindMode;

    /**
     * @var bool
     */
    public $enableSessionLog;

    /**
     * @description Specifies whether to enable the Internet Control Message Protocol (ICMP) non-retrieval feature. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * @example false
     *
     * @var bool
     */
    public $icmpReplyEnabled;

    /**
     * @var logDelivery
     */
    public $logDelivery;

    /**
     * @description The name of the NAT gateway.
     *
     * The name must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example nat123
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the NAT gateway.
     *
     * This parameter is required.
     * @example ngw-2ze0dcn4mq31qx2jc****
     *
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
     * @description The region ID of the NAT gateway.
     *
     * This parameter is required.
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
        'description'          => 'Description',
        'eipBindMode'          => 'EipBindMode',
        'enableSessionLog'     => 'EnableSessionLog',
        'icmpReplyEnabled'     => 'IcmpReplyEnabled',
        'logDelivery'          => 'LogDelivery',
        'name'                 => 'Name',
        'natGatewayId'         => 'NatGatewayId',
        'ownerAccount'         => 'OwnerAccount',
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
            $res['LogDelivery'] = null !== $this->logDelivery ? $this->logDelivery->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return ModifyNatGatewayAttributeRequest
     */
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
