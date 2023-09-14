<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data\metrics\memSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data\metrics\memSecondsDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data\metrics\memUtilization;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data\metrics\readSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data\metrics\vcoreSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data\metrics\vcoreSecondsDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data\metrics\vcoreUtilization;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data\metrics\writeSize;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var memSeconds
     */
    public $memSeconds;

    /**
     * @var memSecondsDayGrowthRatio
     */
    public $memSecondsDayGrowthRatio;

    /**
     * @var memUtilization
     */
    public $memUtilization;

    /**
     * @var readSize
     */
    public $readSize;

    /**
     * @var vcoreSeconds
     */
    public $vcoreSeconds;

    /**
     * @var vcoreSecondsDayGrowthRatio
     */
    public $vcoreSecondsDayGrowthRatio;

    /**
     * @var vcoreUtilization
     */
    public $vcoreUtilization;

    /**
     * @var writeSize
     */
    public $writeSize;
    protected $_name = [
        'memSeconds'                 => 'MemSeconds',
        'memSecondsDayGrowthRatio'   => 'MemSecondsDayGrowthRatio',
        'memUtilization'             => 'MemUtilization',
        'readSize'                   => 'ReadSize',
        'vcoreSeconds'               => 'VcoreSeconds',
        'vcoreSecondsDayGrowthRatio' => 'VcoreSecondsDayGrowthRatio',
        'vcoreUtilization'           => 'VcoreUtilization',
        'writeSize'                  => 'WriteSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memSeconds) {
            $res['MemSeconds'] = null !== $this->memSeconds ? $this->memSeconds->toMap() : null;
        }
        if (null !== $this->memSecondsDayGrowthRatio) {
            $res['MemSecondsDayGrowthRatio'] = null !== $this->memSecondsDayGrowthRatio ? $this->memSecondsDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->memUtilization) {
            $res['MemUtilization'] = null !== $this->memUtilization ? $this->memUtilization->toMap() : null;
        }
        if (null !== $this->readSize) {
            $res['ReadSize'] = null !== $this->readSize ? $this->readSize->toMap() : null;
        }
        if (null !== $this->vcoreSeconds) {
            $res['VcoreSeconds'] = null !== $this->vcoreSeconds ? $this->vcoreSeconds->toMap() : null;
        }
        if (null !== $this->vcoreSecondsDayGrowthRatio) {
            $res['VcoreSecondsDayGrowthRatio'] = null !== $this->vcoreSecondsDayGrowthRatio ? $this->vcoreSecondsDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->vcoreUtilization) {
            $res['VcoreUtilization'] = null !== $this->vcoreUtilization ? $this->vcoreUtilization->toMap() : null;
        }
        if (null !== $this->writeSize) {
            $res['WriteSize'] = null !== $this->writeSize ? $this->writeSize->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemSeconds'])) {
            $model->memSeconds = memSeconds::fromMap($map['MemSeconds']);
        }
        if (isset($map['MemSecondsDayGrowthRatio'])) {
            $model->memSecondsDayGrowthRatio = memSecondsDayGrowthRatio::fromMap($map['MemSecondsDayGrowthRatio']);
        }
        if (isset($map['MemUtilization'])) {
            $model->memUtilization = memUtilization::fromMap($map['MemUtilization']);
        }
        if (isset($map['ReadSize'])) {
            $model->readSize = readSize::fromMap($map['ReadSize']);
        }
        if (isset($map['VcoreSeconds'])) {
            $model->vcoreSeconds = vcoreSeconds::fromMap($map['VcoreSeconds']);
        }
        if (isset($map['VcoreSecondsDayGrowthRatio'])) {
            $model->vcoreSecondsDayGrowthRatio = vcoreSecondsDayGrowthRatio::fromMap($map['VcoreSecondsDayGrowthRatio']);
        }
        if (isset($map['VcoreUtilization'])) {
            $model->vcoreUtilization = vcoreUtilization::fromMap($map['VcoreUtilization']);
        }
        if (isset($map['WriteSize'])) {
            $model->writeSize = writeSize::fromMap($map['WriteSize']);
        }

        return $model;
    }
}
