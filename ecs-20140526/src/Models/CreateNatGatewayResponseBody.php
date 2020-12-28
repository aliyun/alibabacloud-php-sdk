<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateNatGatewayResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $forwardTableIds;

    /**
     * @var string[]
     */
    public $bandwidthPackageIds;

    /**
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'requestId'           => 'RequestId',
        'forwardTableIds'     => 'ForwardTableIds',
        'bandwidthPackageIds' => 'BandwidthPackageIds',
        'natGatewayId'        => 'NatGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = $this->forwardTableIds;
        }
        if (null !== $this->bandwidthPackageIds) {
            $res['BandwidthPackageIds'] = $this->bandwidthPackageIds;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNatGatewayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ForwardTableIds'])) {
            if (!empty($map['ForwardTableIds'])) {
                $model->forwardTableIds = $map['ForwardTableIds'];
            }
        }
        if (isset($map['BandwidthPackageIds'])) {
            if (!empty($map['BandwidthPackageIds'])) {
                $model->bandwidthPackageIds = $map['BandwidthPackageIds'];
            }
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        return $model;
    }
}
