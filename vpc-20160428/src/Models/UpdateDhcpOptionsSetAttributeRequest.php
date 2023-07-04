<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class UpdateDhcpOptionsSetAttributeRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Enter a description for the DHCP options set.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter and cannot start with `http://` or `https://`. You can also leave the description empty.
     * @example description
     *
     * @var string
     */
    public $dhcpOptionsSetDescription;

    /**
     * @description The ID of the DHCP options set.
     *
     * @example dopt-o6w0df4epg9zo8isy****
     *
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @description The name of the DHCP options set.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter.
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
     * >  If you do not specify a DNS server IP address, Elastic Compute Service (ECS) instances use the IP addresses of the Alibaba Cloud DNS servers, which are 100.100.2.136 and 100.100.2.138.
     * @example 192.XX.XX.123
     *
     * @var string
     */
    public $domainNameServers;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     **true**: performs a dry run. The system checks the required parameters, request format, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
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
     * >  If you specify a value, you must also specify the unit.
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
     * >  If you specify a value, you must also specify the unit.
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
     * @description The region where the DHCP options set is deployed. You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     *
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
        'clientToken'               => 'ClientToken',
        'dhcpOptionsSetDescription' => 'DhcpOptionsSetDescription',
        'dhcpOptionsSetId'          => 'DhcpOptionsSetId',
        'dhcpOptionsSetName'        => 'DhcpOptionsSetName',
        'domainName'                => 'DomainName',
        'domainNameServers'         => 'DomainNameServers',
        'dryRun'                    => 'DryRun',
        'ipv6LeaseTime'             => 'Ipv6LeaseTime',
        'leaseTime'                 => 'LeaseTime',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'regionId'                  => 'RegionId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
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
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
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
     * @return UpdateDhcpOptionsSetAttributeRequest
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
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
