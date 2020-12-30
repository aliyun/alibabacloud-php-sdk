<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses\ipv6Address\ipv6InternetBandwidth;
use AlibabaCloud\Tea\Model;

class ipv6Address extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $ipv6AddressId;

    /**
     * @var string
     */
    public $allocationTime;

    /**
     * @var string
     */
    public $associatedInstanceType;

    /**
     * @var string
     */
    public $ipv6AddressName;

    /**
     * @var string
     */
    public $associatedInstanceId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ipv6Address;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var ipv6InternetBandwidth
     */
    public $ipv6InternetBandwidth;

    /**
     * @var string
     */
    public $ipv6GatewayId;

    /**
     * @var int
     */
    public $realBandwidth;
    protected $_name = [
        'status'                 => 'Status',
        'vpcId'                  => 'VpcId',
        'ipv6AddressId'          => 'Ipv6AddressId',
        'allocationTime'         => 'AllocationTime',
        'associatedInstanceType' => 'AssociatedInstanceType',
        'ipv6AddressName'        => 'Ipv6AddressName',
        'associatedInstanceId'   => 'AssociatedInstanceId',
        'networkType'            => 'NetworkType',
        'ipv6Address'            => 'Ipv6Address',
        'vSwitchId'              => 'VSwitchId',
        'ipv6InternetBandwidth'  => 'Ipv6InternetBandwidth',
        'ipv6GatewayId'          => 'Ipv6GatewayId',
        'realBandwidth'          => 'RealBandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->ipv6AddressId) {
            $res['Ipv6AddressId'] = $this->ipv6AddressId;
        }
        if (null !== $this->allocationTime) {
            $res['AllocationTime'] = $this->allocationTime;
        }
        if (null !== $this->associatedInstanceType) {
            $res['AssociatedInstanceType'] = $this->associatedInstanceType;
        }
        if (null !== $this->ipv6AddressName) {
            $res['Ipv6AddressName'] = $this->ipv6AddressName;
        }
        if (null !== $this->associatedInstanceId) {
            $res['AssociatedInstanceId'] = $this->associatedInstanceId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->ipv6InternetBandwidth) {
            $res['Ipv6InternetBandwidth'] = null !== $this->ipv6InternetBandwidth ? $this->ipv6InternetBandwidth->toMap() : null;
        }
        if (null !== $this->ipv6GatewayId) {
            $res['Ipv6GatewayId'] = $this->ipv6GatewayId;
        }
        if (null !== $this->realBandwidth) {
            $res['RealBandwidth'] = $this->realBandwidth;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Ipv6AddressId'])) {
            $model->ipv6AddressId = $map['Ipv6AddressId'];
        }
        if (isset($map['AllocationTime'])) {
            $model->allocationTime = $map['AllocationTime'];
        }
        if (isset($map['AssociatedInstanceType'])) {
            $model->associatedInstanceType = $map['AssociatedInstanceType'];
        }
        if (isset($map['Ipv6AddressName'])) {
            $model->ipv6AddressName = $map['Ipv6AddressName'];
        }
        if (isset($map['AssociatedInstanceId'])) {
            $model->associatedInstanceId = $map['AssociatedInstanceId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Ipv6InternetBandwidth'])) {
            $model->ipv6InternetBandwidth = ipv6InternetBandwidth::fromMap($map['Ipv6InternetBandwidth']);
        }
        if (isset($map['Ipv6GatewayId'])) {
            $model->ipv6GatewayId = $map['Ipv6GatewayId'];
        }
        if (isset($map['RealBandwidth'])) {
            $model->realBandwidth = $map['RealBandwidth'];
        }

        return $model;
    }
}
