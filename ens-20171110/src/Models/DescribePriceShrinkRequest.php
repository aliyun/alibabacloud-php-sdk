<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceShrinkRequest\dataDisk;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceShrinkRequest\systemDisk;
use AlibabaCloud\Tea\Model;

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
     * @description If you leave DataDisk.1.Size empty, the value that you specified for this parameter is used.
     *
     * @var string
     */
    public $dataDisksShrink;

    /**
     * @description The ID of the ENS node.
     *
     * This parameter is required.
     * @example cn-shanghai-unicom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The specifications of instances.
     *
     * This parameter is required.
     * @example ens.sn1.tiny
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The bandwidth metering method of the instance. Valid values:
     *
     *   BandwidthByDay: Pay by daily peak bandwidth
     *   95BandwidthByMonth: Pay by monthly 95th percentile bandwidth
     *   PayByBandwidth4thMonth: Pay by monthly fourth peak bandwidth
     *   PayByBandwidth: Pay by fixed bandwidth
     *
     * This parameter is required.
     * @example 95BandwidthByMonth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The subscription duration of the instance.
     *
     *   If you leave the PeriodUnit parameter empty, the instance is purchased on a monthly basis. Valid values: Day and Month.
     *   If you set PeriodUnit to Day, you can set Period only to 3.
     *   If you set PeriodUnit to Month, you can set Period to a number from 1 to 9, or set Period to 12.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The billing cycle of the ENS instance. Valid values:
     *
     *   Month (default):
     *   Day
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The number of instances.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $quantity;
    protected $_name = [
        'dataDisk'           => 'DataDisk',
        'systemDisk'         => 'SystemDisk',
        'dataDisksShrink'    => 'DataDisks',
        'ensRegionId'        => 'EnsRegionId',
        'instanceType'       => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'quantity'           => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribePriceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
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
