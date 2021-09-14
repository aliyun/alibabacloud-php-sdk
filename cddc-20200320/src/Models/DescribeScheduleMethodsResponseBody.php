<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleMethodsResponseBody\scheduleMethodList;
use AlibabaCloud\Tea\Model;

class DescribeScheduleMethodsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scheduleMethodList[]
     */
    public $scheduleMethodList;
    protected $_name = [
        'requestId'          => 'RequestId',
        'scheduleMethodList' => 'ScheduleMethodList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleMethodList) {
            $res['ScheduleMethodList'] = [];
            if (null !== $this->scheduleMethodList && \is_array($this->scheduleMethodList)) {
                $n = 0;
                foreach ($this->scheduleMethodList as $item) {
                    $res['ScheduleMethodList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScheduleMethodsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleMethodList'])) {
            if (!empty($map['ScheduleMethodList'])) {
                $model->scheduleMethodList = [];
                $n                         = 0;
                foreach ($map['ScheduleMethodList'] as $item) {
                    $model->scheduleMethodList[$n++] = null !== $item ? scheduleMethodList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
