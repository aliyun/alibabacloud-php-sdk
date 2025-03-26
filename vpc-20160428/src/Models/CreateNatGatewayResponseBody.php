<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponseBody\forwardTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponseBody\fullNatTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponseBody\snatTableIds;

class CreateNatGatewayResponseBody extends Model
{
    /**
     * @var forwardTableIds
     */
    public $forwardTableIds;

    /**
     * @var fullNatTableIds
     */
    public $fullNatTableIds;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var snatTableIds
     */
    public $snatTableIds;
    protected $_name = [
        'forwardTableIds' => 'ForwardTableIds',
        'fullNatTableIds' => 'FullNatTableIds',
        'natGatewayId' => 'NatGatewayId',
        'requestId' => 'RequestId',
        'snatTableIds' => 'SnatTableIds',
    ];

    public function validate()
    {
        if (null !== $this->forwardTableIds) {
            $this->forwardTableIds->validate();
        }
        if (null !== $this->fullNatTableIds) {
            $this->fullNatTableIds->validate();
        }
        if (null !== $this->snatTableIds) {
            $this->snatTableIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toArray($noStream) : $this->forwardTableIds;
        }

        if (null !== $this->fullNatTableIds) {
            $res['FullNatTableIds'] = null !== $this->fullNatTableIds ? $this->fullNatTableIds->toArray($noStream) : $this->fullNatTableIds;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->snatTableIds) {
            $res['SnatTableIds'] = null !== $this->snatTableIds ? $this->snatTableIds->toArray($noStream) : $this->snatTableIds;
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
