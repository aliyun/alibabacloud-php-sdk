<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsRequest;

use AlibabaCloud\Tea\Model;

class startTime extends Model
{
    /**
     * @description The end of the start time range.
     *
     * @example 1710432000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The beginning of the start time range.
     *
     * @example 1709740800000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'endTime',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return startTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
