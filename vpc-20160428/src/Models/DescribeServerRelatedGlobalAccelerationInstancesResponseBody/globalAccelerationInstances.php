<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeServerRelatedGlobalAccelerationInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeServerRelatedGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance;

class globalAccelerationInstances extends Model
{
    /**
     * @var globalAccelerationInstance[]
     */
    public $globalAccelerationInstance;
    protected $_name = [
        'globalAccelerationInstance' => 'GlobalAccelerationInstance',
    ];

    public function validate()
    {
        if (\is_array($this->globalAccelerationInstance)) {
            Model::validateArray($this->globalAccelerationInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalAccelerationInstance) {
            if (\is_array($this->globalAccelerationInstance)) {
                $res['GlobalAccelerationInstance'] = [];
                $n1                                = 0;
                foreach ($this->globalAccelerationInstance as $item1) {
                    $res['GlobalAccelerationInstance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GlobalAccelerationInstance'])) {
            if (!empty($map['GlobalAccelerationInstance'])) {
                $model->globalAccelerationInstance = [];
                $n1                                = 0;
                foreach ($map['GlobalAccelerationInstance'] as $item1) {
                    $model->globalAccelerationInstance[$n1++] = globalAccelerationInstance::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
