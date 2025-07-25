<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class UpdateIpamRequest extends Model
{
    /**
     * @description The effective region that you want to add.
     *
     * @var string[]
     */
    public $addOperatingRegion;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the DryRunOperation error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The description of the IPAM.
     *
     * It must be 2 to 256 characters in length and must start with a letter. It cannot start with `http://` or `https://`. The default value is empty.
     *
     * @example test description
     *
     * @var string
     */
    public $ipamDescription;

    /**
     * @description The ID of the IPAM.
     *
     * This parameter is required.
     *
     * @example ipam-ccxbnsbhew0d6t****
     *
     * @var string
     */
    public $ipamId;

    /**
     * @description The name of the IPAM.
     *
     * It must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     *
     * @example test
     *
     * @var string
     */
    public $ipamName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the IPAM instance is hosted. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The effective region that you want to remove.
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
        'ipamDescription' => 'IpamDescription',
        'ipamId' => 'IpamId',
        'ipamName' => 'IpamName',
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
        if (null !== $this->ipamDescription) {
            $res['IpamDescription'] = $this->ipamDescription;
        }
        if (null !== $this->ipamId) {
            $res['IpamId'] = $this->ipamId;
        }
        if (null !== $this->ipamName) {
            $res['IpamName'] = $this->ipamName;
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
     * @return UpdateIpamRequest
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
        if (isset($map['IpamDescription'])) {
            $model->ipamDescription = $map['IpamDescription'];
        }
        if (isset($map['IpamId'])) {
            $model->ipamId = $map['IpamId'];
        }
        if (isset($map['IpamName'])) {
            $model->ipamName = $map['IpamName'];
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
