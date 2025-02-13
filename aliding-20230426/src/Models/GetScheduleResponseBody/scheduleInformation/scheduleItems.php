<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody\scheduleInformation;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody\scheduleInformation\scheduleItems\end;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody\scheduleInformation\scheduleItems\start;

class scheduleItems extends Model
{
    /**
     * @var end
     */
    public $end;
    /**
     * @var start
     */
    public $start;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'end'    => 'End',
        'start'  => 'Start',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->end) {
            $this->end->validate();
        }
        if (null !== $this->start) {
            $this->start->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = null !== $this->end ? $this->end->toArray($noStream) : $this->end;
        }

        if (null !== $this->start) {
            $res['Start'] = null !== $this->start ? $this->start->toArray($noStream) : $this->start;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['End'])) {
            $model->end = end::fromMap($map['End']);
        }

        if (isset($map['Start'])) {
            $model->start = start::fromMap($map['Start']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
