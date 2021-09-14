<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleHostResponseBody\hostScheduleStatusList;
use AlibabaCloud\Tea\Model;

class DescribeScheduleHostResponseBody extends Model
{
    /**
     * @var string
     */
    public $scheduleId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var hostScheduleStatusList[]
     */
    public $hostScheduleStatusList;
    protected $_name = [
        'scheduleId'             => 'ScheduleId',
        'requestId'              => 'RequestId',
        'hostScheduleStatusList' => 'HostScheduleStatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->hostScheduleStatusList) {
            $res['HostScheduleStatusList'] = [];
            if (null !== $this->hostScheduleStatusList && \is_array($this->hostScheduleStatusList)) {
                $n = 0;
                foreach ($this->hostScheduleStatusList as $item) {
                    $res['HostScheduleStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScheduleHostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HostScheduleStatusList'])) {
            if (!empty($map['HostScheduleStatusList'])) {
                $model->hostScheduleStatusList = [];
                $n                             = 0;
                foreach ($map['HostScheduleStatusList'] as $item) {
                    $model->hostScheduleStatusList[$n++] = null !== $item ? hostScheduleStatusList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
