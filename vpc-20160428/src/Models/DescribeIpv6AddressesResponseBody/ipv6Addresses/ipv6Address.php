<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses\ipv6Address\ipv6InternetBandwidth;
use AlibabaCloud\Tea\Model;

class ipv6Address extends Model
{
    /**
     * @description The time when the IPv6 address was created.
     *
     * @example 2020-12-20T14:56:09Z
     *
     * @var string
     */
    public $allocationTime;

    /**
     * @description The ID of the instance that is assigned the IPv6 address.
     *
     * @example i-2ze72wuqj4y3jl4f****
     *
     * @var string
     */
    public $associatedInstanceId;

    /**
     * @description The type of the instance that is assigned the IPv6 address.
     *
     * @example EcsInstance
     *
     * @var string
     */
    public $associatedInstanceType;

    /**
     * @description The IPv6 address of the instance.
     *
     * @example 2408:XXXX:153:3921:851c:c435:7b12:1c5f
     *
     * @var string
     */
    public $ipv6Address;

    /**
     * @description The ID of the IPv6 address.
     *
     * @example ipv6-2zen5j4axcp5l5qyy****
     *
     * @var string
     */
    public $ipv6AddressId;

    /**
     * @description The name of the IPv6 address.
     *
     * @example test
     *
     * @var string
     */
    public $ipv6AddressName;

    /**
     * @description The ID of the IPv6 gateway to which the IPv6 address belongs.
     *
     * @example ipv6gw-2zewg0l66s73b4k2q****
     *
     * @var string
     */
    public $ipv6GatewayId;

    /**
     * @description The information about the Internet bandwidth of the IPv6 address.
     *
     * @var ipv6InternetBandwidth
     */
    public $ipv6InternetBandwidth;

    /**
     * @description The service provider of the IPv6 address. Valid values:
     *
     *   **BGP** (default)
     *   **ChinaMobile**
     *   **ChinaUnicom**
     *   **ChinaTelecom**
     *
     * @example BGP
     *
     * @var string
     */
    public $ipv6Isp;

    /**
     * @description The type of communication supported by the IPv6 address. Valid values:
     *
     *   **Private**
     *   **Public**
     *
     * @example Private
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The maximum bandwidth value of the IPv6 address.
     *
     *   If the IPv6 address is associated with an EIP bandwidth plan, the value of **RealBandwidth** is the maximum bandwidth value of the EIP bandwidth plan.
     *   If the IPv6 address is not associated with an EIP bandwidth plan, the value of **RealBandwidth** is the maximum bandwidth value of the Internet bandwidth of the IPv6 address.
     *   If the IPv6 address is not associated with an EIP bandwidth plan or an Internet bandwidth plan, the values of **RealBandwidth** and **Bandwidth** are both 0.
     *
     * @example 5
     *
     * @var int
     */
    public $realBandwidth;

    /**
     * @description The status of the IPv6 address. Valid values:
     *
     *   **Pending**
     *   **Available**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the vSwitch to which the IPv6 address belongs.
     *
     * @example vsw-25navfgbue4g****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC to which the IPv6 address belongs.
     *
     * @example vpc-bp15zckdt37pq72zv****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'allocationTime'         => 'AllocationTime',
        'associatedInstanceId'   => 'AssociatedInstanceId',
        'associatedInstanceType' => 'AssociatedInstanceType',
        'ipv6Address'            => 'Ipv6Address',
        'ipv6AddressId'          => 'Ipv6AddressId',
        'ipv6AddressName'        => 'Ipv6AddressName',
        'ipv6GatewayId'          => 'Ipv6GatewayId',
        'ipv6InternetBandwidth'  => 'Ipv6InternetBandwidth',
        'ipv6Isp'                => 'Ipv6Isp',
        'networkType'            => 'NetworkType',
        'realBandwidth'          => 'RealBandwidth',
        'status'                 => 'Status',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationTime) {
            $res['AllocationTime'] = $this->allocationTime;
        }
        if (null !== $this->associatedInstanceId) {
            $res['AssociatedInstanceId'] = $this->associatedInstanceId;
        }
        if (null !== $this->associatedInstanceType) {
            $res['AssociatedInstanceType'] = $this->associatedInstanceType;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->ipv6AddressId) {
            $res['Ipv6AddressId'] = $this->ipv6AddressId;
        }
        if (null !== $this->ipv6AddressName) {
            $res['Ipv6AddressName'] = $this->ipv6AddressName;
        }
        if (null !== $this->ipv6GatewayId) {
            $res['Ipv6GatewayId'] = $this->ipv6GatewayId;
        }
        if (null !== $this->ipv6InternetBandwidth) {
            $res['Ipv6InternetBandwidth'] = null !== $this->ipv6InternetBandwidth ? $this->ipv6InternetBandwidth->toMap() : null;
        }
        if (null !== $this->ipv6Isp) {
            $res['Ipv6Isp'] = $this->ipv6Isp;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->realBandwidth) {
            $res['RealBandwidth'] = $this->realBandwidth;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6Address
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationTime'])) {
            $model->allocationTime = $map['AllocationTime'];
        }
        if (isset($map['AssociatedInstanceId'])) {
            $model->associatedInstanceId = $map['AssociatedInstanceId'];
        }
        if (isset($map['AssociatedInstanceType'])) {
            $model->associatedInstanceType = $map['AssociatedInstanceType'];
        }
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }
        if (isset($map['Ipv6AddressId'])) {
            $model->ipv6AddressId = $map['Ipv6AddressId'];
        }
        if (isset($map['Ipv6AddressName'])) {
            $model->ipv6AddressName = $map['Ipv6AddressName'];
        }
        if (isset($map['Ipv6GatewayId'])) {
            $model->ipv6GatewayId = $map['Ipv6GatewayId'];
        }
        if (isset($map['Ipv6InternetBandwidth'])) {
            $model->ipv6InternetBandwidth = ipv6InternetBandwidth::fromMap($map['Ipv6InternetBandwidth']);
        }
        if (isset($map['Ipv6Isp'])) {
            $model->ipv6Isp = $map['Ipv6Isp'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RealBandwidth'])) {
            $model->realBandwidth = $map['RealBandwidth'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
