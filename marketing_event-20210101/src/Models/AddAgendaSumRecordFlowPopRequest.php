<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Dara\Model;

class AddAgendaSumRecordFlowPopRequest extends Model
{
    /**
     * @var int
     */
    public $activeNum;

    /**
     * @var int
     */
    public $agendaId;

    /**
     * @var string
     */
    public $attendancePercent;

    /**
     * @var int
     */
    public $flowTime;

    /**
     * @var string
     */
    public $sessionName;

    /**
     * @var int
     */
    public $totalPv;

    /**
     * @var int
     */
    public $totalUv;
    protected $_name = [
        'activeNum' => 'ActiveNum',
        'agendaId' => 'AgendaId',
        'attendancePercent' => 'AttendancePercent',
        'flowTime' => 'FlowTime',
        'sessionName' => 'SessionName',
        'totalPv' => 'TotalPv',
        'totalUv' => 'TotalUv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeNum) {
            $res['ActiveNum'] = $this->activeNum;
        }

        if (null !== $this->agendaId) {
            $res['AgendaId'] = $this->agendaId;
        }

        if (null !== $this->attendancePercent) {
            $res['AttendancePercent'] = $this->attendancePercent;
        }

        if (null !== $this->flowTime) {
            $res['FlowTime'] = $this->flowTime;
        }

        if (null !== $this->sessionName) {
            $res['SessionName'] = $this->sessionName;
        }

        if (null !== $this->totalPv) {
            $res['TotalPv'] = $this->totalPv;
        }

        if (null !== $this->totalUv) {
            $res['TotalUv'] = $this->totalUv;
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
        if (isset($map['ActiveNum'])) {
            $model->activeNum = $map['ActiveNum'];
        }

        if (isset($map['AgendaId'])) {
            $model->agendaId = $map['AgendaId'];
        }

        if (isset($map['AttendancePercent'])) {
            $model->attendancePercent = $map['AttendancePercent'];
        }

        if (isset($map['FlowTime'])) {
            $model->flowTime = $map['FlowTime'];
        }

        if (isset($map['SessionName'])) {
            $model->sessionName = $map['SessionName'];
        }

        if (isset($map['TotalPv'])) {
            $model->totalPv = $map['TotalPv'];
        }

        if (isset($map['TotalUv'])) {
            $model->totalUv = $map['TotalUv'];
        }

        return $model;
    }
}
