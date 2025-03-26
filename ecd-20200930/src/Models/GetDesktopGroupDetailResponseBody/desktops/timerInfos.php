<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops;

use AlibabaCloud\Dara\Model;

class timerInfos extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var bool
     */
    public $forced;

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
        'forced' => 'Forced',
        'status' => 'Status',
        'timerType' => 'TimerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
