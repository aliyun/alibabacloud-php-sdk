<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponseBody\forwardTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponseBody\snatTableIds;
use AlibabaCloud\Tea\Model;

class CreateNatGatewayResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var snatTableIds
     */
    public $snatTableIds;

    /**
     * @var forwardTableIds
     */
    public $forwardTableIds;

    /**
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'snatTableIds'    => 'SnatTableIds',
        'forwardTableIds' => 'ForwardTableIds',
        'natGatewayId'    => 'NatGatewayId',
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
        if (null !== $this->snatTableIds) {
            $res['SnatTableIds'] = null !== $this->snatTableIds ? $this->snatTableIds->toMap() : null;
        }
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toMap() : null;
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
        if (isset($map['SnatTableIds'])) {
            $model->snatTableIds = snatTableIds::fromMap($map['SnatTableIds']);
        }
        if (isset($map['ForwardTableIds'])) {
            $model->forwardTableIds = forwardTableIds::fromMap($map['ForwardTableIds']);
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        return $model;
    }
}
