<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class dataDiskAutoScaleConfig extends Model
{
    /**
     * @description Specifies whether to enable the automatic scaling of the data disk.
     *
     * @example true
     *
     * @var bool
     */
    public $autoScale;

    /**
     * @description The maximum size of the disk, in GB.
     *
     * @example 80000
     *
     * @var int
     */
    public $maxDiskSize;

    /**
     * @description The size of scaling step during a major compaction.
     *
     * @example 100
     *
     * @var int
     */
    public $scaleStepInMerge;

    /**
     * @description The size of scaling step during daily use.
     *
     * @example 50
     *
     * @var int
     */
    public $scaleStepInNormal;

    /**
     * @description The maximum usage of the data disk, in percentage, that triggers the scaling of the data disk for major compactions.
     *
     * @example 90
     *
     * @var int
     */
    public $upperMergeThreshold;

    /**
     * @description The scale-out strategy. Valid values: RAW and PERCENTAGE.
     *
     * @example RAW
     *
     * @var string
     */
    public $upperScaleStrategy;

    /**
     * @description The maximum usage of the data disk, in percentage, that triggers the scaling of the data disk for daily use.
     *
     * @example 80
     *
     * @var int
     */
    public $upperThreshold;

    /**
     * @description The maximum space, in GB, to which the data disk can be scaled.
     *
     * @example 16
     *
     * @var int
     */
    public $upperbound;
    protected $_name = [
        'autoScale'           => 'AutoScale',
        'maxDiskSize'         => 'MaxDiskSize',
        'scaleStepInMerge'    => 'ScaleStepInMerge',
        'scaleStepInNormal'   => 'ScaleStepInNormal',
        'upperMergeThreshold' => 'UpperMergeThreshold',
        'upperScaleStrategy'  => 'UpperScaleStrategy',
        'upperThreshold'      => 'UpperThreshold',
        'upperbound'          => 'Upperbound',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoScale) {
            $res['AutoScale'] = $this->autoScale;
        }
        if (null !== $this->maxDiskSize) {
            $res['MaxDiskSize'] = $this->maxDiskSize;
        }
        if (null !== $this->scaleStepInMerge) {
            $res['ScaleStepInMerge'] = $this->scaleStepInMerge;
        }
        if (null !== $this->scaleStepInNormal) {
            $res['ScaleStepInNormal'] = $this->scaleStepInNormal;
        }
        if (null !== $this->upperMergeThreshold) {
            $res['UpperMergeThreshold'] = $this->upperMergeThreshold;
        }
        if (null !== $this->upperScaleStrategy) {
            $res['UpperScaleStrategy'] = $this->upperScaleStrategy;
        }
        if (null !== $this->upperThreshold) {
            $res['UpperThreshold'] = $this->upperThreshold;
        }
        if (null !== $this->upperbound) {
            $res['Upperbound'] = $this->upperbound;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDiskAutoScaleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoScale'])) {
            $model->autoScale = $map['AutoScale'];
        }
        if (isset($map['MaxDiskSize'])) {
            $model->maxDiskSize = $map['MaxDiskSize'];
        }
        if (isset($map['ScaleStepInMerge'])) {
            $model->scaleStepInMerge = $map['ScaleStepInMerge'];
        }
        if (isset($map['ScaleStepInNormal'])) {
            $model->scaleStepInNormal = $map['ScaleStepInNormal'];
        }
        if (isset($map['UpperMergeThreshold'])) {
            $model->upperMergeThreshold = $map['UpperMergeThreshold'];
        }
        if (isset($map['UpperScaleStrategy'])) {
            $model->upperScaleStrategy = $map['UpperScaleStrategy'];
        }
        if (isset($map['UpperThreshold'])) {
            $model->upperThreshold = $map['UpperThreshold'];
        }
        if (isset($map['Upperbound'])) {
            $model->upperbound = $map['Upperbound'];
        }

        return $model;
    }
}
