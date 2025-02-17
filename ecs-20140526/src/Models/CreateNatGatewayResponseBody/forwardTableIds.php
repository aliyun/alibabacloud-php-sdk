<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayResponseBody;

use AlibabaCloud\Dara\Model;

class forwardTableIds extends Model
{
    /**
     * @var string[]
     */
    public $forwardTableId;
    protected $_name = [
        'forwardTableId' => 'ForwardTableId',
    ];

    public function validate()
    {
        if (\is_array($this->forwardTableId)) {
            Model::validateArray($this->forwardTableId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardTableId) {
            if (\is_array($this->forwardTableId)) {
                $res['ForwardTableId'] = [];
                $n1                    = 0;
                foreach ($this->forwardTableId as $item1) {
                    $res['ForwardTableId'][$n1++] = $item1;
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
        if (isset($map['ForwardTableId'])) {
            if (!empty($map['ForwardTableId'])) {
                $model->forwardTableId = [];
                $n1                    = 0;
                foreach ($map['ForwardTableId'] as $item1) {
                    $model->forwardTableId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
