<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\Dara\Model;

class dedicatedHostGenerations extends Model
{
    /**
     * @var string[]
     */
    public $dedicatedHostGeneration;
    protected $_name = [
        'dedicatedHostGeneration' => 'DedicatedHostGeneration',
    ];

    public function validate()
    {
        if (\is_array($this->dedicatedHostGeneration)) {
            Model::validateArray($this->dedicatedHostGeneration);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostGeneration) {
            if (\is_array($this->dedicatedHostGeneration)) {
                $res['DedicatedHostGeneration'] = [];
                $n1                             = 0;
                foreach ($this->dedicatedHostGeneration as $item1) {
                    $res['DedicatedHostGeneration'][$n1++] = $item1;
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
        if (isset($map['DedicatedHostGeneration'])) {
            if (!empty($map['DedicatedHostGeneration'])) {
                $model->dedicatedHostGeneration = [];
                $n1                             = 0;
                foreach ($map['DedicatedHostGeneration'] as $item1) {
                    $model->dedicatedHostGeneration[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
