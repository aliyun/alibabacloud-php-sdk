<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetInstanceAlarmStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Reminder alarm count.
     *
     * @example 1
     *
     * @var int
     */
    public $remindCount;

    /**
     * @description Critical alarm count.
     *
     * @example 1
     *
     * @var int
     */
    public $seriousCount;

    /**
     * @description Suspicious alarm count.
     *
     * @example 3
     *
     * @var int
     */
    public $suspiciousCount;
    protected $_name = [
        'remindCount'     => 'RemindCount',
        'seriousCount'    => 'SeriousCount',
        'suspiciousCount' => 'SuspiciousCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remindCount) {
            $res['RemindCount'] = $this->remindCount;
        }
        if (null !== $this->seriousCount) {
            $res['SeriousCount'] = $this->seriousCount;
        }
        if (null !== $this->suspiciousCount) {
            $res['SuspiciousCount'] = $this->suspiciousCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemindCount'])) {
            $model->remindCount = $map['RemindCount'];
        }
        if (isset($map['SeriousCount'])) {
            $model->seriousCount = $map['SeriousCount'];
        }
        if (isset($map['SuspiciousCount'])) {
            $model->suspiciousCount = $map['SuspiciousCount'];
        }

        return $model;
    }
}
