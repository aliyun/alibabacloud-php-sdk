<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceShrinkRequest\dataDisk;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceShrinkRequest\systemDisk;

class DescribePriceShrinkRequest extends Model
{
    /**
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @var string
     */
    public $dataDisksShrink;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'dataDisk' => 'DataDisk',
        'systemDisk' => 'SystemDisk',
        'dataDisksShrink' => 'DataDisks',
        'ensRegionId' => 'EnsRegionId',
        'instanceType' => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'quantity' => 'Quantity',
    ];

    public function validate()
    {
        if (\is_array($this->dataDisk)) {
            Model::validateArray($this->dataDisk);
        }
        if (null !== $this->systemDisk) {
            $this->systemDisk->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDisk) {
            if (\is_array($this->dataDisk)) {
                $res['DataDisk'] = [];
                $n1 = 0;
                foreach ($this->dataDisk as $item1) {
                    $res['DataDisk'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
        }

        if (null !== $this->dataDisksShrink) {
            $res['DataDisks'] = $this->dataDisksShrink;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
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
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n1 = 0;
                foreach ($map['DataDisk'] as $item1) {
                    $model->dataDisk[$n1] = dataDisk::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }

        if (isset($map['DataDisks'])) {
            $model->dataDisksShrink = $map['DataDisks'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
