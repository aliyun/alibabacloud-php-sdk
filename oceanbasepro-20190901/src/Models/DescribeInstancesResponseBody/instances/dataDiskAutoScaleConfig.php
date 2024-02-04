<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class dataDiskAutoScaleConfig extends Model
{
    /**
     * @var bool
     */
    public $autoScale;

    /**
     * @var int
     */
    public $maxDiskSize;

    /**
     * @var int
     */
    public $scaleStepInMerge;

    /**
     * @var int
     */
    public $scaleStepInNormal;

    /**
     * @var int
     */
    public $upperMergeThreshold;

    /**
     * @var string
     */
    public $upperScaleStrategy;

    /**
     * @var int
     */
    public $upperThreshold;

    /**
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
