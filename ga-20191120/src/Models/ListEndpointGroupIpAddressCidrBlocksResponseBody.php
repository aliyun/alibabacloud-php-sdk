<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class ListEndpointGroupIpAddressCidrBlocksResponseBody extends Model
{
    /**
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @var string[]
     */
    public $ipAddressCidrBlocks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'endpointGroupRegion' => 'EndpointGroupRegion',
        'ipAddressCidrBlocks' => 'IpAddressCidrBlocks',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->ipAddressCidrBlocks)) {
            Model::validateArray($this->ipAddressCidrBlocks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }

        if (null !== $this->ipAddressCidrBlocks) {
            if (\is_array($this->ipAddressCidrBlocks)) {
                $res['IpAddressCidrBlocks'] = [];
                $n1 = 0;
                foreach ($this->ipAddressCidrBlocks as $item1) {
                    $res['IpAddressCidrBlocks'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }

        if (isset($map['IpAddressCidrBlocks'])) {
            if (!empty($map['IpAddressCidrBlocks'])) {
                $model->ipAddressCidrBlocks = [];
                $n1 = 0;
                foreach ($map['IpAddressCidrBlocks'] as $item1) {
                    $model->ipAddressCidrBlocks[$n1] = $item1;
                    ++$n1;
                }
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
