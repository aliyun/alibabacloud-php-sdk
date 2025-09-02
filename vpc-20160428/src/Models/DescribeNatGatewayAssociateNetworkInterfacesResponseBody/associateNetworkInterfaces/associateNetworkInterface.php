<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces\associateNetworkInterface\IPv4Sets;

class associateNetworkInterface extends Model
{
    /**
     * @var IPv4Sets
     */
    public $IPv4Sets;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceVpcId;

    /**
     * @var string
     */
    public $tunnelIndex;
    protected $_name = [
        'IPv4Sets' => 'IPv4Sets',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'resourceId' => 'ResourceId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceType' => 'ResourceType',
        'resourceVpcId' => 'ResourceVpcId',
        'tunnelIndex' => 'TunnelIndex',
    ];

    public function validate()
    {
        if (null !== $this->IPv4Sets) {
            $this->IPv4Sets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IPv4Sets) {
            $res['IPv4Sets'] = null !== $this->IPv4Sets ? $this->IPv4Sets->toArray($noStream) : $this->IPv4Sets;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->resourceVpcId) {
            $res['ResourceVpcId'] = $this->resourceVpcId;
        }

        if (null !== $this->tunnelIndex) {
            $res['TunnelIndex'] = $this->tunnelIndex;
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
        if (isset($map['IPv4Sets'])) {
            $model->IPv4Sets = IPv4Sets::fromMap($map['IPv4Sets']);
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ResourceVpcId'])) {
            $model->resourceVpcId = $map['ResourceVpcId'];
        }

        if (isset($map['TunnelIndex'])) {
            $model->tunnelIndex = $map['TunnelIndex'];
        }

        return $model;
    }
}
