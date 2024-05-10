<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateDhcpOptionsSetRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDhcpOptionsSetRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the DHCP options set.
     *
     * The description must be 1 to 256 characters in length. It must start with a letter and cannot start with `http://` or `https://`.
     * @example description
     *
     * @var string
     */
    public $dhcpOptionsSetDescription;

    /**
     * @description The name of the DHCP options set.
     *
     * The name must be 1 to 128 characters in length and can contain letters, digits, underscores (_), and hyphens (-). It must start with a letter.
     * @example name
     *
     * @var string
     */
    public $dhcpOptionsSetName;

    /**
     * @description The root domain. For example, you can set the value to example.com.
     *
     * After a DHCP options set is associated with a virtual private cloud (VPC), the root domain in the DHCP options set is automatically synchronized with the ECS instances in the VPC.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The IP address of the DNS server. You can enter at most four DNS server IP addresses. Separate IP addresses with commas (,).
     *
     * >  If no IP address is specified, the Elastic Compute Service (ECS) instance uses the IP addresses 100.100.2.136 and 100.100.2.138, which are provided by Alibaba Cloud by default.
     * @example 192.XX.XX.123
     *
     * @var string
     */
    public $domainNameServers;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request.
     *
     **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *
     **false** (default): performs a dry run and sends the request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The lease time of the IPv6 addresses for the DHCP options set.
     *
     *   If you use hours as the unit, valid values are **24h to 1176h** and **87600h to 175200h**. Default value: **87600h**.
     *   If you use days as the unit, valid values are **1d to 49d** and **3650d to 7300d**. Default value: **3650d**.
     *
     * >  When you enter a value, you must also specify the unit.
     * @example 3650d
     *
     * @var string
     */
    public $ipv6LeaseTime;

    /**
     * @description The lease time of the IPv4 addresses for the DHCP options set.
     *
     *   If you use hours as the unit, valid values are **24h to 1176h** and **87600h to 175200h**. Default value: **87600h**.
     *   If you use days as the unit, valid values are **1d to 49d** and **3650d to 7300d**. Default value: **3650d**.
     *
     * >  When you enter a value, you must also specify the unit.
     * @example 3650d
     *
     * @var string
     */
    public $leaseTime;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region to which the DHCP options set belongs.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the DHCP options set belongs.
     *
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The tag of the resource.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken'               => 'ClientToken',
        'dhcpOptionsSetDescription' => 'DhcpOptionsSetDescription',
        'dhcpOptionsSetName'        => 'DhcpOptionsSetName',
        'domainName'                => 'DomainName',
        'domainNameServers'         => 'DomainNameServers',
        'dryRun'                    => 'DryRun',
        'ipv6LeaseTime'             => 'Ipv6LeaseTime',
        'leaseTime'                 => 'LeaseTime',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'tag'                       => 'Tag',
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
        if (null !== $this->dhcpOptionsSetDescription) {
            $res['DhcpOptionsSetDescription'] = $this->dhcpOptionsSetDescription;
        }
        if (null !== $this->dhcpOptionsSetName) {
            $res['DhcpOptionsSetName'] = $this->dhcpOptionsSetName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameServers) {
            $res['DomainNameServers'] = $this->domainNameServers;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ipv6LeaseTime) {
            $res['Ipv6LeaseTime'] = $this->ipv6LeaseTime;
        }
        if (null !== $this->leaseTime) {
            $res['LeaseTime'] = $this->leaseTime;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDhcpOptionsSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DhcpOptionsSetDescription'])) {
            $model->dhcpOptionsSetDescription = $map['DhcpOptionsSetDescription'];
        }
        if (isset($map['DhcpOptionsSetName'])) {
            $model->dhcpOptionsSetName = $map['DhcpOptionsSetName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainNameServers'])) {
            $model->domainNameServers = $map['DomainNameServers'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Ipv6LeaseTime'])) {
            $model->ipv6LeaseTime = $map['Ipv6LeaseTime'];
        }
        if (isset($map['LeaseTime'])) {
            $model->leaseTime = $map['LeaseTime'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        return $model;
    }
}
