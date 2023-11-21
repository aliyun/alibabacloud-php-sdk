<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVSwitchCidrReservationRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateVSwitchCidrReservationRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run, without performing the actual request. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The IP version of the reserved CIDR block. Valid values:
     *
     *   **IPv4** (default)
     *   **IPv6**
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the vSwitch is deployed.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
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

    /**
     * @description Resource tags
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The reserved CIDR block of the vSwitch.
     *
     *   When **IpVersion** is set to **IPv4**, the reserved CIDR block must be a proper subset of the IPv4 CIDR block of the vSwitch and the subnet mask length of the reserved CIDR block cannot be greater than 28.
     *   When **IpVersion** is set to **IPv6**, the reserved CIDR block must be a proper subset of the IPv6 CIDR block of the vSwitch and the subnet mask length of the reserved CIDR block cannot be greater than 80.
     *
     * >  You must specify one of **VSwitchCidrReservationMask** and **VSwitchCidrReservationCidr**.
     * @example 192.168.1.64/28
     *
     * @var string
     */
    public $vSwitchCidrReservationCidr;

    /**
     * @description The description of the reserved CIDR block. This parameter is empty by default.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter and cannot start with `http://` or `https://`.
     * @example ReservationDescription
     *
     * @var string
     */
    public $vSwitchCidrReservationDescription;

    /**
     * @description The subnet mask of the reserved CIDR block.
     *
     *   When **IpVersion** is set to **IPv4**, the subnet mask length of the CIDR block must be greater than the IPv4 subnet mask length of the vSwitch and cannot be greater than 28.
     *   When **IpVersion** is set to **IPv6**, the subnet mask length of the CIDR block must be greater than the IPv6 subnet mask length of the vSwitch and cannot be greater than 80.
     *
     * >  You must specify one of **VSwitchCidrReservationMask** and **VSwitchCidrReservationCidr**.
     * @example 28
     *
     * @var string
     */
    public $vSwitchCidrReservationMask;

    /**
     * @description The name of the reserved CIDR block.
     *
     * The name must be 2 to 128 characters in length and can contain digits, underscores (\_), and hyphens (-). It must start with a letter.
     * @example ReservationName
     *
     * @var string
     */
    public $vSwitchCidrReservationName;

    /**
     * @description The type of reserved CIDR block. Set the value to **prefix**.
     *
     * >  When a user or a cloud service allocates a CIDR block to an elastic network interface (ENI), the CIDR block must be allocated from the reserved CIDR block. If the reserved CIDR block is exhausted, an error is returned.
     * @example prefix
     *
     * @var string
     */
    public $vSwitchCidrReservationType;

    /**
     * @description The ID of the vSwitch to which the reserved CIDR block belongs.
     *
     * @example vsw-25navfgbue4g****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'clientToken'                       => 'ClientToken',
        'dryRun'                            => 'DryRun',
        'ipVersion'                         => 'IpVersion',
        'ownerAccount'                      => 'OwnerAccount',
        'ownerId'                           => 'OwnerId',
        'regionId'                          => 'RegionId',
        'resourceOwnerAccount'              => 'ResourceOwnerAccount',
        'resourceOwnerId'                   => 'ResourceOwnerId',
        'tag'                               => 'Tag',
        'vSwitchCidrReservationCidr'        => 'VSwitchCidrReservationCidr',
        'vSwitchCidrReservationDescription' => 'VSwitchCidrReservationDescription',
        'vSwitchCidrReservationMask'        => 'VSwitchCidrReservationMask',
        'vSwitchCidrReservationName'        => 'VSwitchCidrReservationName',
        'vSwitchCidrReservationType'        => 'VSwitchCidrReservationType',
        'vSwitchId'                         => 'VSwitchId',
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
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchCidrReservationCidr) {
            $res['VSwitchCidrReservationCidr'] = $this->vSwitchCidrReservationCidr;
        }
        if (null !== $this->vSwitchCidrReservationDescription) {
            $res['VSwitchCidrReservationDescription'] = $this->vSwitchCidrReservationDescription;
        }
        if (null !== $this->vSwitchCidrReservationMask) {
            $res['VSwitchCidrReservationMask'] = $this->vSwitchCidrReservationMask;
        }
        if (null !== $this->vSwitchCidrReservationName) {
            $res['VSwitchCidrReservationName'] = $this->vSwitchCidrReservationName;
        }
        if (null !== $this->vSwitchCidrReservationType) {
            $res['VSwitchCidrReservationType'] = $this->vSwitchCidrReservationType;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVSwitchCidrReservationRequest
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
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchCidrReservationCidr'])) {
            $model->vSwitchCidrReservationCidr = $map['VSwitchCidrReservationCidr'];
        }
        if (isset($map['VSwitchCidrReservationDescription'])) {
            $model->vSwitchCidrReservationDescription = $map['VSwitchCidrReservationDescription'];
        }
        if (isset($map['VSwitchCidrReservationMask'])) {
            $model->vSwitchCidrReservationMask = $map['VSwitchCidrReservationMask'];
        }
        if (isset($map['VSwitchCidrReservationName'])) {
            $model->vSwitchCidrReservationName = $map['VSwitchCidrReservationName'];
        }
        if (isset($map['VSwitchCidrReservationType'])) {
            $model->vSwitchCidrReservationType = $map['VSwitchCidrReservationType'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
