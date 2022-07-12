<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class timerInfos extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $timerType;
    protected $_name = [
        'cronExpression' => 'CronExpression',
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimerType'])) {
            $model->timerType = $map['TimerType'];
        }

        return $model;
    }
}
