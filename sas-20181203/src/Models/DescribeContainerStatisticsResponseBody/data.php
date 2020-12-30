<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $totalNode;

    /**
     * @var int
     */
    public $remindAlarmCount;

    /**
     * @var int
     */
    public $totalAlarmCount;

    /**
     * @var int
     */
    public $suspiciousAlarmCount;

    /**
     * @var int
     */
    public $seriousAlarmCount;

    /**
     * @var int
     */
    public $hasRiskNode;
    protected $_name = [
        'totalNode'            => 'TotalNode',
        'remindAlarmCount'     => 'RemindAlarmCount',
        'totalAlarmCount'      => 'TotalAlarmCount',
        'suspiciousAlarmCount' => 'SuspiciousAlarmCount',
        'seriousAlarmCount'    => 'SeriousAlarmCount',
        'hasRiskNode'          => 'hasRiskNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalNode) {
            $res['TotalNode'] = $this->totalNode;
        }
        if (null !== $this->remindAlarmCount) {
            $res['RemindAlarmCount'] = $this->remindAlarmCount;
        }
        if (null !== $this->totalAlarmCount) {
            $res['TotalAlarmCount'] = $this->totalAlarmCount;
        }
        if (null !== $this->suspiciousAlarmCount) {
            $res['SuspiciousAlarmCount'] = $this->suspiciousAlarmCount;
        }
        if (null !== $this->seriousAlarmCount) {
            $res['SeriousAlarmCount'] = $this->seriousAlarmCount;
        }
        if (null !== $this->hasRiskNode) {
            $res['hasRiskNode'] = $this->hasRiskNode;
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
        if (isset($map['TotalNode'])) {
            $model->totalNode = $map['TotalNode'];
        }
        if (isset($map['RemindAlarmCount'])) {
            $model->remindAlarmCount = $map['RemindAlarmCount'];
        }
        if (isset($map['TotalAlarmCount'])) {
            $model->totalAlarmCount = $map['TotalAlarmCount'];
        }
        if (isset($map['SuspiciousAlarmCount'])) {
            $model->suspiciousAlarmCount = $map['SuspiciousAlarmCount'];
        }
        if (isset($map['SeriousAlarmCount'])) {
            $model->seriousAlarmCount = $map['SeriousAlarmCount'];
        }
        if (isset($map['hasRiskNode'])) {
            $model->hasRiskNode = $map['hasRiskNode'];
        }

        return $model;
    }
}
