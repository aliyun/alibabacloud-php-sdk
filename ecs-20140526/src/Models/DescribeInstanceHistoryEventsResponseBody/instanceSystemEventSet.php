<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType;

class instanceSystemEventSet extends Model
{
    /**
     * @var instanceSystemEventType[]
     */
    public $instanceSystemEventType;
    protected $_name = [
        'instanceSystemEventType' => 'InstanceSystemEventType',
    ];

    public function validate()
    {
        if (\is_array($this->instanceSystemEventType)) {
            Model::validateArray($this->instanceSystemEventType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceSystemEventType) {
            if (\is_array($this->instanceSystemEventType)) {
                $res['InstanceSystemEventType'] = [];
                $n1                             = 0;
                foreach ($this->instanceSystemEventType as $item1) {
                    $res['InstanceSystemEventType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceSystemEventType'])) {
            if (!empty($map['InstanceSystemEventType'])) {
                $model->instanceSystemEventType = [];
                $n1                             = 0;
                foreach ($map['InstanceSystemEventType'] as $item1) {
                    $model->instanceSystemEventType[$n1++] = instanceSystemEventType::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
