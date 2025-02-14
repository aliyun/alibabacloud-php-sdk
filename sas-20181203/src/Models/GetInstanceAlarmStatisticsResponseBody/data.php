<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetInstanceAlarmStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $remindCount;
    /**
     * @var int
     */
    public $seriousCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
