<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyNatIpAttributeRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF3898
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The operation that you want to perform. Set the value to **ModifyNatIpAttribute**.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example test
     *
     * @var string
     */
    public $natIpDescription;

    /**
     * @description The description of the NAT IP address that you want to modify.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     * @example vpcnatip-gw8e1n11f44wpg****
     *
     * @var string
     */
    public $natIpId;

    /**
     * @description Specifies whether only to precheck this request. Valid values:
     *
     *   **true**: sends the precheck request but does not modify the name or description of the NAT IP address. The system checks your AccessKey pair, the Resource Access Management (RAM) user permissions, and the required parameters. If the request fails the precheck, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the request. If the request passes the precheck, a 2xx HTTP status code is returned and the name and description of the NAT IP address are modified.
     *
     * @example newname
     *
     * @var string
     */
    public $natIpName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the NAT IP address that you want to modify.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). It must start with a letter. It cannot start with `http://` or `https://`.
     * @example eu-central-1
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
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'natIpDescription'     => 'NatIpDescription',
        'natIpId'              => 'NatIpId',
        'natIpName'            => 'NatIpName',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->natIpDescription) {
            $res['NatIpDescription'] = $this->natIpDescription;
        }
        if (null !== $this->natIpId) {
            $res['NatIpId'] = $this->natIpId;
        }
        if (null !== $this->natIpName) {
            $res['NatIpName'] = $this->natIpName;
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
     * @return ModifyNatIpAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['NatIpDescription'])) {
            $model->natIpDescription = $map['NatIpDescription'];
        }
        if (isset($map['NatIpId'])) {
            $model->natIpId = $map['NatIpId'];
        }
        if (isset($map['NatIpName'])) {
            $model->natIpName = $map['NatIpName'];
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
