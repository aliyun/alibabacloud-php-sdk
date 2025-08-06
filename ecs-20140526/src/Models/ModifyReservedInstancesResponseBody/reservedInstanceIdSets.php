<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class reservedInstanceIdSets extends Model
{
    /**
     * @var string[]
     */
    public $reservedInstanceId;
    protected $_name = [
        'reservedInstanceId' => 'ReservedInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->reservedInstanceId)) {
            Model::validateArray($this->reservedInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reservedInstanceId) {
            if (\is_array($this->reservedInstanceId)) {
                $res['ReservedInstanceId'] = [];
                $n1 = 0;
                foreach ($this->reservedInstanceId as $item1) {
                    $res['ReservedInstanceId'][$n1] = $item1;
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
        if (isset($map['ReservedInstanceId'])) {
            if (!empty($map['ReservedInstanceId'])) {
                $model->reservedInstanceId = [];
                $n1 = 0;
                foreach ($map['ReservedInstanceId'] as $item1) {
                    $model->reservedInstanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
