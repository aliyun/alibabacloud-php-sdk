<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceTypeFamiliesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceTypeFamiliesResponseBody\instanceTypeFamilies\instanceTypeFamily;

class instanceTypeFamilies extends Model
{
    /**
     * @var instanceTypeFamily[]
     */
    public $instanceTypeFamily;
    protected $_name = [
        'instanceTypeFamily' => 'InstanceTypeFamily',
    ];

    public function validate()
    {
        if (\is_array($this->instanceTypeFamily)) {
            Model::validateArray($this->instanceTypeFamily);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypeFamily) {
            if (\is_array($this->instanceTypeFamily)) {
                $res['InstanceTypeFamily'] = [];
                $n1 = 0;
                foreach ($this->instanceTypeFamily as $item1) {
                    $res['InstanceTypeFamily'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceTypeFamily'])) {
            if (!empty($map['InstanceTypeFamily'])) {
                $model->instanceTypeFamily = [];
                $n1 = 0;
                foreach ($map['InstanceTypeFamily'] as $item1) {
                    $model->instanceTypeFamily[$n1++] = instanceTypeFamily::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
