<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces\associateNetworkInterface\IPv4Sets;
use AlibabaCloud\Tea\Model;

class associateNetworkInterface extends Model
{
    /**
     * @var IPv4Sets
     */
    public $IPv4Sets;

    /**
     * @example eni-gw8g131ef2dnbu3k****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @example ep-8psre8c8936596cd****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 138859086900****
     *
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @example PrivateLink
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tunnelIndex;
    protected $_name = [
        'IPv4Sets'           => 'IPv4Sets',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'resourceId'         => 'ResourceId',
        'resourceOwnerId'    => 'ResourceOwnerId',
        'resourceType'       => 'ResourceType',
        'tunnelIndex'        => 'TunnelIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPv4Sets) {
            $res['IPv4Sets'] = null !== $this->IPv4Sets ? $this->IPv4Sets->toMap() : null;
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
        if (null !== $this->tunnelIndex) {
            $res['TunnelIndex'] = $this->tunnelIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associateNetworkInterface
     */
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
        if (isset($map['TunnelIndex'])) {
            $model->tunnelIndex = $map['TunnelIndex'];
        }

        return $model;
    }
}
