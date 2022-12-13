<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListChartDataForUserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {"P1HIGH":32}
     *
     * @var mixed[]
     */
    public $effectionLevel;

    /**
     * @example 43
     *
     * @var int
     */
    public $escalationIncidentCount;

    /**
     * @example 32
     *
     * @var int
     */
    public $incidentCount;

    /**
     * @example 323
     *
     * @var int
     */
    public $meanTimeToAcknowledge;

    /**
     * @example 4343
     *
     * @var int
     */
    public $meanTimeToRepair;

    /**
     * @example 2021-09-09
     *
     * @var string
     */
    public $time;

    /**
     * @example 3334
     *
     * @var int
     */
    public $totalMeanTimeToAcknowledge;

    /**
     * @example 4343
     *
     * @var int
     */
    public $totalMeanTimeToRepair;

    /**
     * @example 23
     *
     * @var int
     */
    public $unAcknowledgedEscalationIncidentCount;

    /**
     * @example 23
     *
     * @var int
     */
    public $unFinishEscalationIncidentCount;
    protected $_name = [
        'effectionLevel'                        => 'effectionLevel',
        'escalationIncidentCount'               => 'escalationIncidentCount',
        'incidentCount'                         => 'incidentCount',
        'meanTimeToAcknowledge'                 => 'meanTimeToAcknowledge',
        'meanTimeToRepair'                      => 'meanTimeToRepair',
        'time'                                  => 'time',
        'totalMeanTimeToAcknowledge'            => 'totalMeanTimeToAcknowledge',
        'totalMeanTimeToRepair'                 => 'totalMeanTimeToRepair',
        'unAcknowledgedEscalationIncidentCount' => 'unAcknowledgedEscalationIncidentCount',
        'unFinishEscalationIncidentCount'       => 'unFinishEscalationIncidentCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectionLevel) {
            $res['effectionLevel'] = $this->effectionLevel;
        }
        if (null !== $this->escalationIncidentCount) {
            $res['escalationIncidentCount'] = $this->escalationIncidentCount;
        }
        if (null !== $this->incidentCount) {
            $res['incidentCount'] = $this->incidentCount;
        }
        if (null !== $this->meanTimeToAcknowledge) {
            $res['meanTimeToAcknowledge'] = $this->meanTimeToAcknowledge;
        }
        if (null !== $this->meanTimeToRepair) {
            $res['meanTimeToRepair'] = $this->meanTimeToRepair;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->totalMeanTimeToAcknowledge) {
            $res['totalMeanTimeToAcknowledge'] = $this->totalMeanTimeToAcknowledge;
        }
        if (null !== $this->totalMeanTimeToRepair) {
            $res['totalMeanTimeToRepair'] = $this->totalMeanTimeToRepair;
        }
        if (null !== $this->unAcknowledgedEscalationIncidentCount) {
            $res['unAcknowledgedEscalationIncidentCount'] = $this->unAcknowledgedEscalationIncidentCount;
        }
        if (null !== $this->unFinishEscalationIncidentCount) {
            $res['unFinishEscalationIncidentCount'] = $this->unFinishEscalationIncidentCount;
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
        if (isset($map['effectionLevel'])) {
            $model->effectionLevel = $map['effectionLevel'];
        }
        if (isset($map['escalationIncidentCount'])) {
            $model->escalationIncidentCount = $map['escalationIncidentCount'];
        }
        if (isset($map['incidentCount'])) {
            $model->incidentCount = $map['incidentCount'];
        }
        if (isset($map['meanTimeToAcknowledge'])) {
            $model->meanTimeToAcknowledge = $map['meanTimeToAcknowledge'];
        }
        if (isset($map['meanTimeToRepair'])) {
            $model->meanTimeToRepair = $map['meanTimeToRepair'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['totalMeanTimeToAcknowledge'])) {
            $model->totalMeanTimeToAcknowledge = $map['totalMeanTimeToAcknowledge'];
        }
        if (isset($map['totalMeanTimeToRepair'])) {
            $model->totalMeanTimeToRepair = $map['totalMeanTimeToRepair'];
        }
        if (isset($map['unAcknowledgedEscalationIncidentCount'])) {
            $model->unAcknowledgedEscalationIncidentCount = $map['unAcknowledgedEscalationIncidentCount'];
        }
        if (isset($map['unFinishEscalationIncidentCount'])) {
            $model->unFinishEscalationIncidentCount = $map['unFinishEscalationIncidentCount'];
        }

        return $model;
    }
}
