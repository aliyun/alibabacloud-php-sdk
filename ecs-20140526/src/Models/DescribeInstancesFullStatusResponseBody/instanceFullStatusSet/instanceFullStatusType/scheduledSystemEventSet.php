<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType;

class scheduledSystemEventSet extends Model
{
    /**
     * @var scheduledSystemEventType[]
     */
    public $scheduledSystemEventType;
    protected $_name = [
        'scheduledSystemEventType' => 'ScheduledSystemEventType',
    ];

    public function validate()
    {
        if (\is_array($this->scheduledSystemEventType)) {
            Model::validateArray($this->scheduledSystemEventType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scheduledSystemEventType) {
            if (\is_array($this->scheduledSystemEventType)) {
                $res['ScheduledSystemEventType'] = [];
                $n1 = 0;
                foreach ($this->scheduledSystemEventType as $item1) {
                    $res['ScheduledSystemEventType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ScheduledSystemEventType'])) {
            if (!empty($map['ScheduledSystemEventType'])) {
                $model->scheduledSystemEventType = [];
                $n1 = 0;
                foreach ($map['ScheduledSystemEventType'] as $item1) {
                    $model->scheduledSystemEventType[$n1] = scheduledSystemEventType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
