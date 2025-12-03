<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceTypeResponseBody\instanceTypeSpecList\instanceTypeSpec;

class instanceTypeSpecList extends Model
{
    /**
     * @var instanceTypeSpec[]
     */
    public $instanceTypeSpec;
    protected $_name = [
        'instanceTypeSpec' => 'InstanceTypeSpec',
    ];

    public function validate()
    {
        if (\is_array($this->instanceTypeSpec)) {
            Model::validateArray($this->instanceTypeSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypeSpec) {
            if (\is_array($this->instanceTypeSpec)) {
                $res['InstanceTypeSpec'] = [];
                $n1 = 0;
                foreach ($this->instanceTypeSpec as $item1) {
                    $res['InstanceTypeSpec'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceTypeSpec'])) {
            if (!empty($map['InstanceTypeSpec'])) {
                $model->instanceTypeSpec = [];
                $n1 = 0;
                foreach ($map['InstanceTypeSpec'] as $item1) {
                    $model->instanceTypeSpec[$n1] = instanceTypeSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
