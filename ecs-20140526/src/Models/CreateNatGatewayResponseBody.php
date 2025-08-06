<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayResponseBody\bandwidthPackageIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayResponseBody\forwardTableIds;

class CreateNatGatewayResponseBody extends Model
{
    /**
     * @var bandwidthPackageIds
     */
    public $bandwidthPackageIds;

    /**
     * @var forwardTableIds
     */
    public $forwardTableIds;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bandwidthPackageIds' => 'BandwidthPackageIds',
        'forwardTableIds' => 'ForwardTableIds',
        'natGatewayId' => 'NatGatewayId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->bandwidthPackageIds) {
            $this->bandwidthPackageIds->validate();
        }
        if (null !== $this->forwardTableIds) {
            $this->forwardTableIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthPackageIds) {
            $res['BandwidthPackageIds'] = null !== $this->bandwidthPackageIds ? $this->bandwidthPackageIds->toArray($noStream) : $this->bandwidthPackageIds;
        }

        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toArray($noStream) : $this->forwardTableIds;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BandwidthPackageIds'])) {
            $model->bandwidthPackageIds = bandwidthPackageIds::fromMap($map['BandwidthPackageIds']);
        }

        if (isset($map['ForwardTableIds'])) {
            $model->forwardTableIds = forwardTableIds::fromMap($map['ForwardTableIds']);
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
