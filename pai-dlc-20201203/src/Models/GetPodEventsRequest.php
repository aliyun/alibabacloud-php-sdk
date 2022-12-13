<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetPodEventsRequest extends Model
{
    /**
     * @example 2020-11-09T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxEventsNum;

    /**
     * @example dlc-20210126170216-*****-chief-0
     *
     * @var string
     */
    public $podUid;

    /**
     * @example 2020-11-08T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'maxEventsNum' => 'MaxEventsNum',
        'podUid'       => 'PodUid',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->maxEventsNum) {
            $res['MaxEventsNum'] = $this->maxEventsNum;
        }
        if (null !== $this->podUid) {
            $res['PodUid'] = $this->podUid;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPodEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MaxEventsNum'])) {
            $model->maxEventsNum = $map['MaxEventsNum'];
        }
        if (isset($map['PodUid'])) {
            $model->podUid = $map['PodUid'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
