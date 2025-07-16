<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody\scheduleInformation;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody\scheduleInformation\scheduleItems\end;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody\scheduleInformation\scheduleItems\start;
use AlibabaCloud\Tea\Model;

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
     * @example BUSY
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'end' => 'End',
        'start' => 'Start',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = null !== $this->end ? $this->end->toMap() : null;
        }
        if (null !== $this->start) {
            $res['Start'] = null !== $this->start ? $this->start->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleItems
     */
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
