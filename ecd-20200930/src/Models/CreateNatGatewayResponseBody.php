<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateNatGatewayResponseBody extends Model
{
    /**
     * @var string[]
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

    /**
     * @var string[]
     */
    public $snatTableIds;
    protected $_name = [
        'forwardTableIds' => 'ForwardTableIds',
        'natGatewayId' => 'NatGatewayId',
        'requestId' => 'RequestId',
        'snatTableIds' => 'SnatTableIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = $this->forwardTableIds;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snatTableIds) {
            $res['SnatTableIds'] = $this->snatTableIds;
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
            if (!empty($map['ForwardTableIds'])) {
                $model->forwardTableIds = $map['ForwardTableIds'];
            }
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnatTableIds'])) {
            if (!empty($map['SnatTableIds'])) {
                $model->snatTableIds = $map['SnatTableIds'];
            }
        }

        return $model;
    }
}
