<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusRequest;

use AlibabaCloud\Tea\Model;

class eventTime extends Model
{
    /**
     * @description The end of the time range to query occurred events.
     *
     * Specify the time in the [ISO 8601](~~25696~~) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     * @example 2018-05-08T02:48:52Z
     *
     * @var string
     */
    public $end;

    /**
     * @description The beginning of the time range to query occurred events.
     *
     * Specify the time in the [ISO 8601](~~25696~~) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     * @example 2018-05-06T02:43:10Z
     *
     * @var string
     */
    public $start;
    protected $_name = [
        'end'   => 'End',
        'start' => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
