<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class timerInfos extends Model
{
    /**
     * @description The CRON expression of the scheduled task.
     *
     * @example 0 58 11 ? * 2
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description Indicates whether the scheduled task is forcibly executed.
     *
     * @example false
     *
     * @var bool
     */
    public $forced;

    /**
     * @description The status of the scheduled task.
     *
     * Valid values:
     *
     *   1
     *
     * .
     *
     *   2
     *
     * .
     *
     *   3
     *
     * .
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of the scheduled task.
     *
     * Valid values:
     *
     *   1
     *
     * .
     *
     *   2
     *
     * .
     *
     *   3
     *
     * .
     *
     *   4
     *
     * .
     * @example 1
     *
     * @var int
     */
    public $timerType;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'forced'         => 'Forced',
        'status'         => 'Status',
        'timerType'      => 'TimerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->forced) {
            $res['Forced'] = $this->forced;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timerType) {
            $res['TimerType'] = $this->timerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timerInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['Forced'])) {
            $model->forced = $map['Forced'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimerType'])) {
            $model->timerType = $map['TimerType'];
        }

        return $model;
    }
}
