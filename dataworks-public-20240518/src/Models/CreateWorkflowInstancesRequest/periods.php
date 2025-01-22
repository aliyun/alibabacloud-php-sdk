<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\periods\bizDates;

class periods extends Model
{
    /**
     * @var bizDates[]
     */
    public $bizDates;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'bizDates'  => 'BizDates',
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->bizDates)) {
            Model::validateArray($this->bizDates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDates) {
            if (\is_array($this->bizDates)) {
                $res['BizDates'] = [];
                $n1              = 0;
                foreach ($this->bizDates as $item1) {
                    $res['BizDates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['BizDates'])) {
            if (!empty($map['BizDates'])) {
                $model->bizDates = [];
                $n1              = 0;
                foreach ($map['BizDates'] as $item1) {
                    $model->bizDates[$n1++] = bizDates::fromMap($item1);
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
