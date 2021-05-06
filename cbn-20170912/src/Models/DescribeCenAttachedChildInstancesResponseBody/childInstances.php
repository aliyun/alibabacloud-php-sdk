<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesResponseBody\childInstances\childInstance;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childInstance) {
            $res['ChildInstance'] = [];
            if (null !== $this->childInstance && \is_array($this->childInstance)) {
                $n = 0;
                foreach ($this->childInstance as $item) {
                    $res['ChildInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return childInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildInstance'])) {
            if (!empty($map['ChildInstance'])) {
                $model->childInstance = [];
                $n                    = 0;
                foreach ($map['ChildInstance'] as $item) {
                    $model->childInstance[$n++] = null !== $item ? childInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
