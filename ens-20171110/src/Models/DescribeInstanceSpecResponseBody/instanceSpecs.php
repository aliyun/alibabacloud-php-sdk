<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecResponseBody\instanceSpecs\instanceSpec;

class instanceSpecs extends Model
{
    /**
     * @var instanceSpec[]
     */
    public $instanceSpec;
    protected $_name = [
        'instanceSpec' => 'InstanceSpec',
    ];

    public function validate()
    {
        if (\is_array($this->instanceSpec)) {
            Model::validateArray($this->instanceSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceSpec) {
            if (\is_array($this->instanceSpec)) {
                $res['InstanceSpec'] = [];
                $n1 = 0;
                foreach ($this->instanceSpec as $item1) {
                    $res['InstanceSpec'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceSpec'])) {
            if (!empty($map['InstanceSpec'])) {
                $model->instanceSpec = [];
                $n1 = 0;
                foreach ($map['InstanceSpec'] as $item1) {
                    $model->instanceSpec[$n1] = instanceSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
