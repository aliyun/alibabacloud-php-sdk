<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\Dara\Model;

class cpuOptions extends Model
{
    /**
     * @var string
     */
    public $nestedVirtualization;
    protected $_name = [
        'nestedVirtualization' => 'NestedVirtualization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nestedVirtualization) {
            $res['NestedVirtualization'] = $this->nestedVirtualization;
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
        if (isset($map['NestedVirtualization'])) {
            $model->nestedVirtualization = $map['NestedVirtualization'];
        }

        return $model;
    }
}
