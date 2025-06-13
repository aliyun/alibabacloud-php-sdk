<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponseBody\reservedInstances\reservedInstance;

class reservedInstances extends Model
{
    /**
     * @var reservedInstance[]
     */
    public $reservedInstance;
    protected $_name = [
        'reservedInstance' => 'ReservedInstance',
    ];

    public function validate()
    {
        if (\is_array($this->reservedInstance)) {
            Model::validateArray($this->reservedInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reservedInstance) {
            if (\is_array($this->reservedInstance)) {
                $res['ReservedInstance'] = [];
                $n1 = 0;
                foreach ($this->reservedInstance as $item1) {
                    $res['ReservedInstance'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReservedInstance'])) {
            if (!empty($map['ReservedInstance'])) {
                $model->reservedInstance = [];
                $n1 = 0;
                foreach ($map['ReservedInstance'] as $item1) {
                    $model->reservedInstance[$n1] = reservedInstance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
