<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses\ipv6Address\ipv6InternetBandwidth;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses\ipv6Address\tags;

class ipv6Address extends Model
{
    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $allocationTime;

    /**
     * @var string
     */
    public $associatedInstanceId;

    /**
     * @var string
     */
    public $associatedInstanceType;

    /**
     * @var string
     */
    public $ipv6Address;

    /**
     * @var string
     */
    public $ipv6AddressDescription;

    /**
     * @var string
     */
    public $ipv6AddressId;

    /**
     * @var string
     */
    public $ipv6AddressName;

    /**
     * @var string
     */
    public $ipv6GatewayId;

    /**
     * @var ipv6InternetBandwidth
     */
    public $ipv6InternetBandwidth;

    /**
     * @var string
     */
    public $ipv6Isp;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var int
     */
    public $realBandwidth;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $serviceManaged;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'addressType' => 'AddressType',
        'allocationTime' => 'AllocationTime',
        'associatedInstanceId' => 'AssociatedInstanceId',
        'associatedInstanceType' => 'AssociatedInstanceType',
        'ipv6Address' => 'Ipv6Address',
        'ipv6AddressDescription' => 'Ipv6AddressDescription',
        'ipv6AddressId' => 'Ipv6AddressId',
        'ipv6AddressName' => 'Ipv6AddressName',
        'ipv6GatewayId' => 'Ipv6GatewayId',
        'ipv6InternetBandwidth' => 'Ipv6InternetBandwidth',
        'ipv6Isp' => 'Ipv6Isp',
        'networkType' => 'NetworkType',
        'realBandwidth' => 'RealBandwidth',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceManaged' => 'ServiceManaged',
        'status' => 'Status',
        'tags' => 'Tags',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->ipv6InternetBandwidth) {
            $this->ipv6InternetBandwidth->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

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

        if (null !== $this->ipv6AddressDescription) {
            $res['Ipv6AddressDescription'] = $this->ipv6AddressDescription;
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
            $res['Ipv6InternetBandwidth'] = null !== $this->ipv6InternetBandwidth ? $this->ipv6InternetBandwidth->toArray($noStream) : $this->ipv6InternetBandwidth;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

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

        if (isset($map['Ipv6AddressDescription'])) {
            $model->ipv6AddressDescription = $map['Ipv6AddressDescription'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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
