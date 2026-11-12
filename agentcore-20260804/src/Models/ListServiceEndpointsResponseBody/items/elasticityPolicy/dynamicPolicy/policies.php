<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsResponseBody\items\elasticityPolicy\dynamicPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsResponseBody\items\elasticityPolicy\dynamicPolicy\policies\timePoints;

class policies extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $repeat;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var timePoints[]
     */
    public $timePoints;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $validity;
    protected $_name = [
        'endTime' => 'endTime',
        'id' => 'id',
        'priority' => 'priority',
        'repeat' => 'repeat',
        'startTime' => 'startTime',
        'timePoints' => 'timePoints',
        'timeZone' => 'timeZone',
        'validity' => 'validity',
    ];

    public function validate()
    {
        if (\is_array($this->timePoints)) {
            Model::validateArray($this->timePoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->repeat) {
            $res['repeat'] = $this->repeat;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->timePoints) {
            if (\is_array($this->timePoints)) {
                $res['timePoints'] = [];
                $n1 = 0;
                foreach ($this->timePoints as $item1) {
                    $res['timePoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
        }

        if (null !== $this->validity) {
            $res['validity'] = $this->validity;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['repeat'])) {
            $model->repeat = $map['repeat'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['timePoints'])) {
            if (!empty($map['timePoints'])) {
                $model->timePoints = [];
                $n1 = 0;
                foreach ($map['timePoints'] as $item1) {
                    $model->timePoints[$n1] = timePoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        if (isset($map['validity'])) {
            $model->validity = $map['validity'];
        }

        return $model;
    }
}
