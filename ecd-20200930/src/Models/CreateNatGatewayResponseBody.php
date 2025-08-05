<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (\is_array($this->forwardTableIds)) {
            Model::validateArray($this->forwardTableIds);
        }
        if (\is_array($this->snatTableIds)) {
            Model::validateArray($this->snatTableIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardTableIds) {
            if (\is_array($this->forwardTableIds)) {
                $res['ForwardTableIds'] = [];
                $n1 = 0;
                foreach ($this->forwardTableIds as $item1) {
                    $res['ForwardTableIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->snatTableIds) {
            if (\is_array($this->snatTableIds)) {
                $res['SnatTableIds'] = [];
                $n1 = 0;
                foreach ($this->snatTableIds as $item1) {
                    $res['SnatTableIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ForwardTableIds'])) {
                $model->forwardTableIds = [];
                $n1 = 0;
                foreach ($map['ForwardTableIds'] as $item1) {
                    $model->forwardTableIds[$n1] = $item1;
                    ++$n1;
                }
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
                $model->snatTableIds = [];
                $n1 = 0;
                foreach ($map['SnatTableIds'] as $item1) {
                    $model->snatTableIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
