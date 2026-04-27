<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetUnknownThreatDetectStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $blockMachineCount;

    /**
     * @var int
     */
    public $machineCount;

    /**
     * @var int
     */
    public $monitorMachineCount;

    /**
     * @var int
     */
    public $openMachineCount;

    /**
     * @var int
     */
    public $studyingMachineCount;
    protected $_name = [
        'blockMachineCount' => 'BlockMachineCount',
        'machineCount' => 'MachineCount',
        'monitorMachineCount' => 'MonitorMachineCount',
        'openMachineCount' => 'OpenMachineCount',
        'studyingMachineCount' => 'StudyingMachineCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockMachineCount) {
            $res['BlockMachineCount'] = $this->blockMachineCount;
        }

        if (null !== $this->machineCount) {
            $res['MachineCount'] = $this->machineCount;
        }

        if (null !== $this->monitorMachineCount) {
            $res['MonitorMachineCount'] = $this->monitorMachineCount;
        }

        if (null !== $this->openMachineCount) {
            $res['OpenMachineCount'] = $this->openMachineCount;
        }

        if (null !== $this->studyingMachineCount) {
            $res['StudyingMachineCount'] = $this->studyingMachineCount;
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
        if (isset($map['BlockMachineCount'])) {
            $model->blockMachineCount = $map['BlockMachineCount'];
        }

        if (isset($map['MachineCount'])) {
            $model->machineCount = $map['MachineCount'];
        }

        if (isset($map['MonitorMachineCount'])) {
            $model->monitorMachineCount = $map['MonitorMachineCount'];
        }

        if (isset($map['OpenMachineCount'])) {
            $model->openMachineCount = $map['OpenMachineCount'];
        }

        if (isset($map['StudyingMachineCount'])) {
            $model->studyingMachineCount = $map['StudyingMachineCount'];
        }

        return $model;
    }
}
