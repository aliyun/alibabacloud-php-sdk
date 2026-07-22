<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateScheduledTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateScheduledTaskResponseBody\tasks\instanceResults;

class tasks extends Model
{
    /**
     * @var instanceResults[]
     */
    public $instanceResults;

    /**
     * @var string
     */
    public $scheduledId;

    /**
     * @var string
     */
    public $taskConfigId;
    protected $_name = [
        'instanceResults' => 'InstanceResults',
        'scheduledId' => 'ScheduledId',
        'taskConfigId' => 'TaskConfigId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceResults)) {
            Model::validateArray($this->instanceResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceResults) {
            if (\is_array($this->instanceResults)) {
                $res['InstanceResults'] = [];
                $n1 = 0;
                foreach ($this->instanceResults as $item1) {
                    $res['InstanceResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scheduledId) {
            $res['ScheduledId'] = $this->scheduledId;
        }

        if (null !== $this->taskConfigId) {
            $res['TaskConfigId'] = $this->taskConfigId;
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
        if (isset($map['InstanceResults'])) {
            if (!empty($map['InstanceResults'])) {
                $model->instanceResults = [];
                $n1 = 0;
                foreach ($map['InstanceResults'] as $item1) {
                    $model->instanceResults[$n1] = instanceResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ScheduledId'])) {
            $model->scheduledId = $map['ScheduledId'];
        }

        if (isset($map['TaskConfigId'])) {
            $model->taskConfigId = $map['TaskConfigId'];
        }

        return $model;
    }
}
