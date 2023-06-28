<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ListEndpointGroupIpAddressCidrBlocksResponseBody extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @var string[]
     */
    public $ipAddressCidrBlocks;

    /**
     * @example 4B6DBBB0-2D01-4C6A-A384-4129266E6B78
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-aekztkx4zwc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'endpointGroupRegion' => 'EndpointGroupRegion',
        'ipAddressCidrBlocks' => 'IpAddressCidrBlocks',
        'requestId'           => 'RequestId',
        'resourceGroupId'     => 'ResourceGroupId',
        'state'               => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->ipAddressCidrBlocks) {
            $res['IpAddressCidrBlocks'] = $this->ipAddressCidrBlocks;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEndpointGroupIpAddressCidrBlocksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['IpAddressCidrBlocks'])) {
            if (!empty($map['IpAddressCidrBlocks'])) {
                $model->ipAddressCidrBlocks = $map['IpAddressCidrBlocks'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
