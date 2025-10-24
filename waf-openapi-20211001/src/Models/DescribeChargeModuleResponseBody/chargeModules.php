<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeChargeModuleResponseBody;

use AlibabaCloud\Dara\Model;

class chargeModules extends Model
{
    /**
     * @var string
     */
    public $chargeMode;

    /**
     * @var string[]
     */
    public $chargeModeDetails;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var string
     */
    public $usageType;

    /**
     * @var int
     */
    public $usageUnitFactor;
    protected $_name = [
        'chargeMode' => 'ChargeMode',
        'chargeModeDetails' => 'ChargeModeDetails',
        'moduleCode' => 'ModuleCode',
        'periodType' => 'PeriodType',
        'usageType' => 'UsageType',
        'usageUnitFactor' => 'UsageUnitFactor',
    ];

    public function validate()
    {
        if (\is_array($this->chargeModeDetails)) {
            Model::validateArray($this->chargeModeDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeMode) {
            $res['ChargeMode'] = $this->chargeMode;
        }

        if (null !== $this->chargeModeDetails) {
            if (\is_array($this->chargeModeDetails)) {
                $res['ChargeModeDetails'] = [];
                $n1 = 0;
                foreach ($this->chargeModeDetails as $item1) {
                    $res['ChargeModeDetails'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }

        if (null !== $this->usageType) {
            $res['UsageType'] = $this->usageType;
        }

        if (null !== $this->usageUnitFactor) {
            $res['UsageUnitFactor'] = $this->usageUnitFactor;
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
        if (isset($map['ChargeMode'])) {
            $model->chargeMode = $map['ChargeMode'];
        }

        if (isset($map['ChargeModeDetails'])) {
            if (!empty($map['ChargeModeDetails'])) {
                $model->chargeModeDetails = [];
                $n1 = 0;
                foreach ($map['ChargeModeDetails'] as $item1) {
                    $model->chargeModeDetails[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }

        if (isset($map['UsageType'])) {
            $model->usageType = $map['UsageType'];
        }

        if (isset($map['UsageUnitFactor'])) {
            $model->usageUnitFactor = $map['UsageUnitFactor'];
        }

        return $model;
    }
}
