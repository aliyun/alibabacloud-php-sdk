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
     * @description 如果DataDisk.1.Size为空且此字段不为空时的则以此字段为准
     *
     * @var string
     */
    public $dataDisksShrink;

    /**
     * @description 节点ID。
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description 实列规格。
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 带宽计费方式
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description 购买资源的时长，如果不指定PeriodUnit，则默认按月购买。目前只支持按Days和Month。如果PeriodUnit=Day时，Period仅可以3。如果PeriodUnit=Monthc时，则Period可以为1-9,12。
     *
     * @var int
     */
    public $period;

    /**
     * @description 查询云服务器ENS不同计费周期的价格。取值范围：
     * Day：按天计费的价格单位。
     * @var string
     */
    public $periodUnit;

    /**
     * @description 数量。
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
