<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCreditSeatResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $instanceId;

    /**
     * @var int
     */
    public $orderId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'orderId' => 'OrderId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceId)) {
            Model::validateArray($this->instanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            if (\is_array($this->instanceId)) {
                $res['InstanceId'] = [];
                $n1 = 0;
                foreach ($this->instanceId as $item1) {
                    $res['InstanceId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = [];
                $n1 = 0;
                foreach ($map['InstanceId'] as $item1) {
                    $model->instanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
