<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of alerts whose risk level is **Reminder**.
     *
     * @example 1
     *
     * @var int
     */
    public $remindAlarmCount;

    /**
     * @description The number of alerts whose risk level is **Urgent**.
     *
     * @example 2
     *
     * @var int
     */
    public $seriousAlarmCount;

    /**
     * @description The number of alerts whose risk level is **Suspicious**.
     *
     * @example 3
     *
     * @var int
     */
    public $suspiciousAlarmCount;

    /**
     * @description The total number of alerts that are generated in the current container cluster.
     *
     * @example 6
     *
     * @var int
     */
    public $totalAlarmCount;

    /**
     * @description The total number of nodes in the current container cluster.
     *
     * @example 12
     *
     * @var int
     */
    public $totalNode;

    /**
     * @description The number of nodes on which alerts are generated in the current container cluster.
     *
     * @example 4
     *
     * @var int
     */
    public $hasRiskNode;
    protected $_name = [
        'remindAlarmCount'     => 'RemindAlarmCount',
        'seriousAlarmCount'    => 'SeriousAlarmCount',
        'suspiciousAlarmCount' => 'SuspiciousAlarmCount',
        'totalAlarmCount'      => 'TotalAlarmCount',
        'totalNode'            => 'TotalNode',
        'hasRiskNode'          => 'hasRiskNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remindAlarmCount) {
            $res['RemindAlarmCount'] = $this->remindAlarmCount;
        }
        if (null !== $this->seriousAlarmCount) {
            $res['SeriousAlarmCount'] = $this->seriousAlarmCount;
        }
        if (null !== $this->suspiciousAlarmCount) {
            $res['SuspiciousAlarmCount'] = $this->suspiciousAlarmCount;
        }
        if (null !== $this->totalAlarmCount) {
            $res['TotalAlarmCount'] = $this->totalAlarmCount;
        }
        if (null !== $this->totalNode) {
            $res['TotalNode'] = $this->totalNode;
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
        if (isset($map['RemindAlarmCount'])) {
            $model->remindAlarmCount = $map['RemindAlarmCount'];
        }
        if (isset($map['SeriousAlarmCount'])) {
            $model->seriousAlarmCount = $map['SeriousAlarmCount'];
        }
        if (isset($map['SuspiciousAlarmCount'])) {
            $model->suspiciousAlarmCount = $map['SuspiciousAlarmCount'];
        }
        if (isset($map['TotalAlarmCount'])) {
            $model->totalAlarmCount = $map['TotalAlarmCount'];
        }
        if (isset($map['TotalNode'])) {
            $model->totalNode = $map['TotalNode'];
        }
        if (isset($map['hasRiskNode'])) {
            $model->hasRiskNode = $map['hasRiskNode'];
        }

        return $model;
    }
}
