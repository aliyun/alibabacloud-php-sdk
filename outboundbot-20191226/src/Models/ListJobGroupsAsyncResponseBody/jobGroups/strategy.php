<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsAsyncResponseBody\jobGroups;

use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @example 1640316786259
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1640316786259
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
