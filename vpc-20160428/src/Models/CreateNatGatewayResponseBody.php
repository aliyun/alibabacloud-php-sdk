<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponseBody\forwardTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponseBody\fullNatTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponseBody\snatTableIds;
use AlibabaCloud\Tea\Model;

class CreateNatGatewayResponseBody extends Model
{
    /**
     * @description The list of DNAT entries.
     *
     * @var forwardTableIds
     */
    public $forwardTableIds;

    /**
     * @description The list of FULLNAT entries.
     *
     * @var fullNatTableIds
     */
    public $fullNatTableIds;

    /**
     * @description The ID of the NAT gateway.
     *
     * @example ngw-112za33e4****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The ID of the request.
     *
     * @example 2315DEB7-5E92-423A-91F7-4C1EC9AD97C3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of SNAT entries.
     *
     * @var snatTableIds
     */
    public $snatTableIds;
    protected $_name = [
        'forwardTableIds' => 'ForwardTableIds',
        'fullNatTableIds' => 'FullNatTableIds',
        'natGatewayId'    => 'NatGatewayId',
        'requestId'       => 'RequestId',
        'snatTableIds'    => 'SnatTableIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toMap() : null;
        }
        if (null !== $this->fullNatTableIds) {
            $res['FullNatTableIds'] = null !== $this->fullNatTableIds ? $this->fullNatTableIds->toMap() : null;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snatTableIds) {
            $res['SnatTableIds'] = null !== $this->snatTableIds ? $this->snatTableIds->toMap() : null;
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
        if (isset($map['ForwardTableIds'])) {
            $model->forwardTableIds = forwardTableIds::fromMap($map['ForwardTableIds']);
        }
        if (isset($map['FullNatTableIds'])) {
            $model->fullNatTableIds = fullNatTableIds::fromMap($map['FullNatTableIds']);
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnatTableIds'])) {
            $model->snatTableIds = snatTableIds::fromMap($map['SnatTableIds']);
        }

        return $model;
    }
}
