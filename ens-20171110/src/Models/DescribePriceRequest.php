<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceRequest\dataDisk;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $internetChargeType;
    protected $_name = [
        'systemDisk'         => 'SystemDisk',
        'dataDisk'           => 'DataDisk',
        'version'            => 'Version',
        'instanceType'       => 'InstanceType',
        'ensRegionId'        => 'EnsRegionId',
        'period'             => 'Period',
        'quantity'           => 'Quantity',
        'internetChargeType' => 'InternetChargeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        return $model;
    }
}
