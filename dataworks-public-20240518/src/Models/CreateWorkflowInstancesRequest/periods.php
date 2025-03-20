<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\periods\bizDates;
use AlibabaCloud\Tea\Model;

class periods extends Model
{
    /**
     * @description The list of business dates. You can specify a multi-segment business date (up to 7 segments).
     *
     * This parameter is required.
     *
     * @var bizDates[]
     */
    public $bizDates;

    /**
     * @description Specifies the end cycle time. Default value: 23:59:59.
     *
     * If you enter this field, StartTime and EndTime must be filled in at the same time.
     *
     * @example 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies the start cycle time. Default value: 00:00:00.
     *
     * If you enter this field, StartTime and EndTime must be filled in at the same time.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'bizDates' => 'BizDates',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDates) {
            $res['BizDates'] = [];
            if (null !== $this->bizDates && \is_array($this->bizDates)) {
                $n = 0;
                foreach ($this->bizDates as $item) {
                    $res['BizDates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
     * @return periods
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDates'])) {
            if (!empty($map['BizDates'])) {
                $model->bizDates = [];
                $n = 0;
                foreach ($map['BizDates'] as $item) {
                    $model->bizDates[$n++] = null !== $item ? bizDates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
