<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\capacity;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\capacity\availableInstanceTypes\availableInstanceType;

class availableInstanceTypes extends Model
{
    /**
     * @var availableInstanceType[]
     */
    public $availableInstanceType;
    protected $_name = [
        'availableInstanceType' => 'AvailableInstanceType',
    ];

    public function validate()
    {
        if (\is_array($this->availableInstanceType)) {
            Model::validateArray($this->availableInstanceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableInstanceType) {
            if (\is_array($this->availableInstanceType)) {
                $res['AvailableInstanceType'] = [];
                $n1 = 0;
                foreach ($this->availableInstanceType as $item1) {
                    $res['AvailableInstanceType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvailableInstanceType'])) {
            if (!empty($map['AvailableInstanceType'])) {
                $model->availableInstanceType = [];
                $n1 = 0;
                foreach ($map['AvailableInstanceType'] as $item1) {
                    $model->availableInstanceType[$n1] = availableInstanceType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
