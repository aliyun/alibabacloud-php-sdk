<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\repairSetting\flowStep;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\repairSetting\repairConfigs;
use AlibabaCloud\Tea\Model;

class repairSetting extends Model
{
    /**
     * @var flowStep[]
     */
    public $flowStep;

    /**
     * @var repairConfigs[]
     */
    public $repairConfigs;

    /**
     * @var bool
     */
    public $repairReset;

    /**
     * @var bool
     */
    public $repairSupport;

    /**
     * @var int
     */
    public $repairSupportType;
    protected $_name = [
        'flowStep'          => 'FlowStep',
        'repairConfigs'     => 'RepairConfigs',
        'repairReset'       => 'RepairReset',
        'repairSupport'     => 'RepairSupport',
        'repairSupportType' => 'RepairSupportType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowStep) {
            $res['FlowStep'] = [];
            if (null !== $this->flowStep && \is_array($this->flowStep)) {
                $n = 0;
                foreach ($this->flowStep as $item) {
                    $res['FlowStep'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->repairConfigs) {
            $res['RepairConfigs'] = [];
            if (null !== $this->repairConfigs && \is_array($this->repairConfigs)) {
                $n = 0;
                foreach ($this->repairConfigs as $item) {
                    $res['RepairConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->repairReset) {
            $res['RepairReset'] = $this->repairReset;
        }
        if (null !== $this->repairSupport) {
            $res['RepairSupport'] = $this->repairSupport;
        }
        if (null !== $this->repairSupportType) {
            $res['RepairSupportType'] = $this->repairSupportType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repairSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowStep'])) {
            if (!empty($map['FlowStep'])) {
                $model->flowStep = [];
                $n               = 0;
                foreach ($map['FlowStep'] as $item) {
                    $model->flowStep[$n++] = null !== $item ? flowStep::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RepairConfigs'])) {
            if (!empty($map['RepairConfigs'])) {
                $model->repairConfigs = [];
                $n                    = 0;
                foreach ($map['RepairConfigs'] as $item) {
                    $model->repairConfigs[$n++] = null !== $item ? repairConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RepairReset'])) {
            $model->repairReset = $map['RepairReset'];
        }
        if (isset($map['RepairSupport'])) {
            $model->repairSupport = $map['RepairSupport'];
        }
        if (isset($map['RepairSupportType'])) {
            $model->repairSupportType = $map['RepairSupportType'];
        }

        return $model;
    }
}
