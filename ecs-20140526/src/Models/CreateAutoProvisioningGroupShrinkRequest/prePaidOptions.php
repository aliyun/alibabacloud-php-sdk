<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\prePaidOptions\specifyCapacityDistribution;

class prePaidOptions extends Model
{
    /**
     * @var specifyCapacityDistribution[]
     */
    public $specifyCapacityDistribution;
    protected $_name = [
        'specifyCapacityDistribution' => 'SpecifyCapacityDistribution',
    ];

    public function validate()
    {
        if (\is_array($this->specifyCapacityDistribution)) {
            Model::validateArray($this->specifyCapacityDistribution);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->specifyCapacityDistribution) {
            if (\is_array($this->specifyCapacityDistribution)) {
                $res['SpecifyCapacityDistribution'] = [];
                $n1                                 = 0;
                foreach ($this->specifyCapacityDistribution as $item1) {
                    $res['SpecifyCapacityDistribution'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SpecifyCapacityDistribution'])) {
            if (!empty($map['SpecifyCapacityDistribution'])) {
                $model->specifyCapacityDistribution = [];
                $n1                                 = 0;
                foreach ($map['SpecifyCapacityDistribution'] as $item1) {
                    $model->specifyCapacityDistribution[$n1++] = specifyCapacityDistribution::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
