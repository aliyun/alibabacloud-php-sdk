<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity\instanceEvents\instanceEvent;
use AlibabaCloud\Tea\Model;

class instanceEvents extends Model
{
    /**
     * @var instanceEvent[]
     */
    public $instanceEvent;
    protected $_name = [
        'instanceEvent' => 'InstanceEvent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceEvent) {
            $res['InstanceEvent'] = [];
            if (null !== $this->instanceEvent && \is_array($this->instanceEvent)) {
                $n = 0;
                foreach ($this->instanceEvent as $item) {
                    $res['InstanceEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceEvent'])) {
            if (!empty($map['InstanceEvent'])) {
                $model->instanceEvent = [];
                $n                    = 0;
                foreach ($map['InstanceEvent'] as $item) {
                    $model->instanceEvent[$n++] = null !== $item ? instanceEvent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
