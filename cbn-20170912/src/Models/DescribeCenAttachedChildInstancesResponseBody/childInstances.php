<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesResponseBody\childInstances\childInstance;

class childInstances extends Model
{
    /**
     * @var childInstance[]
     */
    public $childInstance;
    protected $_name = [
        'childInstance' => 'ChildInstance',
    ];

    public function validate()
    {
        if (\is_array($this->childInstance)) {
            Model::validateArray($this->childInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childInstance) {
            if (\is_array($this->childInstance)) {
                $res['ChildInstance'] = [];
                $n1 = 0;
                foreach ($this->childInstance as $item1) {
                    $res['ChildInstance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ChildInstance'])) {
            if (!empty($map['ChildInstance'])) {
                $model->childInstance = [];
                $n1 = 0;
                foreach ($map['ChildInstance'] as $item1) {
                    $model->childInstance[$n1++] = childInstance::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
