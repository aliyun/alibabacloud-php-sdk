<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetPodEventsRequest extends Model
{
    /**
     * @description The end time (UTC).
     *
     * @example 2020-11-09T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The maximum number of events that can be returned.
     *
     * @example 100
     *
     * @var int
     */
    public $maxEventsNum;

    /**
     * @description The node UID. Call [GetJob](https://help.aliyun.com/document_detail/459677.html) to get the node UID.
     *
     * @example dlc-20210126170216-*****-chief-0
     *
     * @var string
     */
    public $podUid;

    /**
     * @description The start time (UTC).
     *
     * @example 2020-11-08T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'maxEventsNum' => 'MaxEventsNum',
        'podUid' => 'PodUid',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

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
