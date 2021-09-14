<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleInstanceResponseBody\instanceScheduleStatusList;
use AlibabaCloud\Tea\Model;

class DescribeScheduleInstanceResponseBody extends Model
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
     * @var instanceScheduleStatusList[]
     */
    public $instanceScheduleStatusList;
    protected $_name = [
        'scheduleId'                 => 'ScheduleId',
        'requestId'                  => 'RequestId',
        'instanceScheduleStatusList' => 'InstanceScheduleStatusList',
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
        if (null !== $this->instanceScheduleStatusList) {
            $res['InstanceScheduleStatusList'] = [];
            if (null !== $this->instanceScheduleStatusList && \is_array($this->instanceScheduleStatusList)) {
                $n = 0;
                foreach ($this->instanceScheduleStatusList as $item) {
                    $res['InstanceScheduleStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScheduleInstanceResponseBody
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
        if (isset($map['InstanceScheduleStatusList'])) {
            if (!empty($map['InstanceScheduleStatusList'])) {
                $model->instanceScheduleStatusList = [];
                $n                                 = 0;
                foreach ($map['InstanceScheduleStatusList'] as $item) {
                    $model->instanceScheduleStatusList[$n++] = null !== $item ? instanceScheduleStatusList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
