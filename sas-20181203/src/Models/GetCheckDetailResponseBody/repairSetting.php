<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\repairSetting\flowStep;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\repairSetting\repairConfigs;

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
        'flowStep' => 'FlowStep',
        'repairConfigs' => 'RepairConfigs',
        'repairReset' => 'RepairReset',
        'repairSupport' => 'RepairSupport',
        'repairSupportType' => 'RepairSupportType',
    ];

    public function validate()
    {
        if (\is_array($this->flowStep)) {
            Model::validateArray($this->flowStep);
        }
        if (\is_array($this->repairConfigs)) {
            Model::validateArray($this->repairConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowStep) {
            if (\is_array($this->flowStep)) {
                $res['FlowStep'] = [];
                $n1 = 0;
                foreach ($this->flowStep as $item1) {
                    $res['FlowStep'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->repairConfigs) {
            if (\is_array($this->repairConfigs)) {
                $res['RepairConfigs'] = [];
                $n1 = 0;
                foreach ($this->repairConfigs as $item1) {
                    $res['RepairConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowStep'])) {
            if (!empty($map['FlowStep'])) {
                $model->flowStep = [];
                $n1 = 0;
                foreach ($map['FlowStep'] as $item1) {
                    $model->flowStep[$n1] = flowStep::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RepairConfigs'])) {
            if (!empty($map['RepairConfigs'])) {
                $model->repairConfigs = [];
                $n1 = 0;
                foreach ($map['RepairConfigs'] as $item1) {
                    $model->repairConfigs[$n1] = repairConfigs::fromMap($item1);
                    ++$n1;
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
