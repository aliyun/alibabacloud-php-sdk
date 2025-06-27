<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance\subscriptionObject\synchronousObject;

class subscriptionObject extends Model
{
    /**
     * @var synchronousObject[]
     */
    public $synchronousObject;
    protected $_name = [
        'synchronousObject' => 'SynchronousObject',
    ];

    public function validate()
    {
        if (\is_array($this->synchronousObject)) {
            Model::validateArray($this->synchronousObject);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->synchronousObject) {
            if (\is_array($this->synchronousObject)) {
                $res['SynchronousObject'] = [];
                $n1 = 0;
                foreach ($this->synchronousObject as $item1) {
                    $res['SynchronousObject'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SynchronousObject'])) {
            if (!empty($map['SynchronousObject'])) {
                $model->synchronousObject = [];
                $n1 = 0;
                foreach ($map['SynchronousObject'] as $item1) {
                    $model->synchronousObject[$n1] = synchronousObject::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
