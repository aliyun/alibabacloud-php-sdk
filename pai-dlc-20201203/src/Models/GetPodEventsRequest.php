<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetPodEventsRequest extends Model
{
    /**
     * @description 截止时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 返回的事件最大数量
     *
     * @var int
     */
    public $maxEventsNum;

    /**
     * @description 运行实例UID
     *
     * @var string
     */
    public $podUid;

    /**
     * @description 起始时间
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
