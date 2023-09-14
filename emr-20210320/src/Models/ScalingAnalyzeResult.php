<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ScalingAnalyzeResult extends Model
{
    /**
     * @description 实际资源利用率。
     *
     * @example 0.12
     *
     * @var float
     */
    public $actualUsage;

    /**
     * @description 理想资源用量。
     *
     * @example 0.12
     *
     * @var float
     */
    public $idealUsage;

    /**
     * @description 固定资源释放核数（非master）core。
     *
     * @example 1
     *
     * @var int
     */
    public $releaseCores;

    /**
     * @description 固定资源保留核数（非master）core。
     *
     * @example 1
     *
     * @var int
     */
    public $reservedCores;
    protected $_name = [
        'actualUsage'   => 'ActualUsage',
        'idealUsage'    => 'IdealUsage',
        'releaseCores'  => 'ReleaseCores',
        'reservedCores' => 'ReservedCores',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualUsage) {
            $res['ActualUsage'] = $this->actualUsage;
        }
        if (null !== $this->idealUsage) {
            $res['IdealUsage'] = $this->idealUsage;
        }
        if (null !== $this->releaseCores) {
            $res['ReleaseCores'] = $this->releaseCores;
        }
        if (null !== $this->reservedCores) {
            $res['ReservedCores'] = $this->reservedCores;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScalingAnalyzeResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualUsage'])) {
            $model->actualUsage = $map['ActualUsage'];
        }
        if (isset($map['IdealUsage'])) {
            $model->idealUsage = $map['IdealUsage'];
        }
        if (isset($map['ReleaseCores'])) {
            $model->releaseCores = $map['ReleaseCores'];
        }
        if (isset($map['ReservedCores'])) {
            $model->reservedCores = $map['ReservedCores'];
        }

        return $model;
    }
}
