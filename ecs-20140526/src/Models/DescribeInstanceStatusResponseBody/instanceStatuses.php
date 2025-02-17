<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceStatusResponseBody\instanceStatuses\instanceStatus;

class instanceStatuses extends Model
{
    /**
     * @var instanceStatus[]
     */
    public $instanceStatus;
    protected $_name = [
        'instanceStatus' => 'InstanceStatus',
    ];

    public function validate()
    {
        if (\is_array($this->instanceStatus)) {
            Model::validateArray($this->instanceStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceStatus) {
            if (\is_array($this->instanceStatus)) {
                $res['InstanceStatus'] = [];
                $n1                    = 0;
                foreach ($this->instanceStatus as $item1) {
                    $res['InstanceStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceStatus'])) {
            if (!empty($map['InstanceStatus'])) {
                $model->instanceStatus = [];
                $n1                    = 0;
                foreach ($map['InstanceStatus'] as $item1) {
                    $model->instanceStatus[$n1++] = instanceStatus::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
