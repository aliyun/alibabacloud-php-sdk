<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class UpdateIpamResourceDiscoveryRequest extends Model
{
    /**
     * @description The list of effective regions to add.
     *
     * @var string[]
     */
    public $addOperatingRegion;

    /**
     * @description The client token used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform the dry run. Valid values:
     *
     *   **true**: Performs a dry run without modifying the resource discovery instance. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error code is returned. If the request passes the dry run, the DryRunOperation error code is returned.
     *   **false** (default): Performs a dry run and the actual request. If the request passes the check, an HTTP 2xx status code is returned and the resource discovery instance is modified.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The description of resource discovery.
     *
     * @example test description
     *
     * @var string
     */
    public $ipamResourceDiscoveryDescription;

    /**
     * @description The ID of resource discovery instance.
     *
     * This parameter is required.
     *
     * @example ipam-res-disco-jt5f2af2u6nk2z321****
     *
     * @var string
     */
    public $ipamResourceDiscoveryId;

    /**
     * @description The name of the resource discovery.
     *
     * @example test
     *
     * @var string
     */
    public $ipamResourceDiscoveryName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The request region.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The list of effective regions to remove.
     *
     * @var string[]
     */
    public $removeOperatingRegion;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'addOperatingRegion' => 'AddOperatingRegion',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ipamResourceDiscoveryDescription' => 'IpamResourceDiscoveryDescription',
        'ipamResourceDiscoveryId' => 'IpamResourceDiscoveryId',
        'ipamResourceDiscoveryName' => 'IpamResourceDiscoveryName',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'removeOperatingRegion' => 'RemoveOperatingRegion',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addOperatingRegion) {
            $res['AddOperatingRegion'] = $this->addOperatingRegion;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ipamResourceDiscoveryDescription) {
            $res['IpamResourceDiscoveryDescription'] = $this->ipamResourceDiscoveryDescription;
        }
        if (null !== $this->ipamResourceDiscoveryId) {
            $res['IpamResourceDiscoveryId'] = $this->ipamResourceDiscoveryId;
        }
        if (null !== $this->ipamResourceDiscoveryName) {
            $res['IpamResourceDiscoveryName'] = $this->ipamResourceDiscoveryName;
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
        if (null !== $this->removeOperatingRegion) {
            $res['RemoveOperatingRegion'] = $this->removeOperatingRegion;
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
     * @return UpdateIpamResourceDiscoveryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddOperatingRegion'])) {
            if (!empty($map['AddOperatingRegion'])) {
                $model->addOperatingRegion = $map['AddOperatingRegion'];
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IpamResourceDiscoveryDescription'])) {
            $model->ipamResourceDiscoveryDescription = $map['IpamResourceDiscoveryDescription'];
        }
        if (isset($map['IpamResourceDiscoveryId'])) {
            $model->ipamResourceDiscoveryId = $map['IpamResourceDiscoveryId'];
        }
        if (isset($map['IpamResourceDiscoveryName'])) {
            $model->ipamResourceDiscoveryName = $map['IpamResourceDiscoveryName'];
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
        if (isset($map['RemoveOperatingRegion'])) {
            if (!empty($map['RemoveOperatingRegion'])) {
                $model->removeOperatingRegion = $map['RemoveOperatingRegion'];
            }
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
