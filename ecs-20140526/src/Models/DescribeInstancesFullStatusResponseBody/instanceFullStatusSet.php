<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType;

class instanceFullStatusSet extends Model
{
    /**
     * @var instanceFullStatusType[]
     */
    public $instanceFullStatusType;
    protected $_name = [
        'instanceFullStatusType' => 'InstanceFullStatusType',
    ];

    public function validate()
    {
        if (\is_array($this->instanceFullStatusType)) {
            Model::validateArray($this->instanceFullStatusType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceFullStatusType) {
            if (\is_array($this->instanceFullStatusType)) {
                $res['InstanceFullStatusType'] = [];
                $n1 = 0;
                foreach ($this->instanceFullStatusType as $item1) {
                    $res['InstanceFullStatusType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceFullStatusType'])) {
            if (!empty($map['InstanceFullStatusType'])) {
                $model->instanceFullStatusType = [];
                $n1 = 0;
                foreach ($map['InstanceFullStatusType'] as $item1) {
                    $model->instanceFullStatusType[$n1++] = instanceFullStatusType::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
