<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute;

class instances extends Model
{
    /**
     * @var instanceAttribute[]
     */
    public $instanceAttribute;
    protected $_name = [
        'instanceAttribute' => 'InstanceAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->instanceAttribute)) {
            Model::validateArray($this->instanceAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceAttribute) {
            if (\is_array($this->instanceAttribute)) {
                $res['InstanceAttribute'] = [];
                $n1 = 0;
                foreach ($this->instanceAttribute as $item1) {
                    $res['InstanceAttribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceAttribute'])) {
            if (!empty($map['InstanceAttribute'])) {
                $model->instanceAttribute = [];
                $n1 = 0;
                foreach ($map['InstanceAttribute'] as $item1) {
                    $model->instanceAttribute[$n1++] = instanceAttribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
