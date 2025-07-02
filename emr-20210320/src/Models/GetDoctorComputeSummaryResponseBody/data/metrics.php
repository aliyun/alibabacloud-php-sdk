<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data\metrics\memSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data\metrics\memSecondsDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data\metrics\memUtilization;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data\metrics\readSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data\metrics\vcoreSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data\metrics\vcoreSecondsDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data\metrics\vcoreUtilization;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponseBody\data\metrics\writeSize;

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
        'memSeconds' => 'MemSeconds',
        'memSecondsDayGrowthRatio' => 'MemSecondsDayGrowthRatio',
        'memUtilization' => 'MemUtilization',
        'readSize' => 'ReadSize',
        'vcoreSeconds' => 'VcoreSeconds',
        'vcoreSecondsDayGrowthRatio' => 'VcoreSecondsDayGrowthRatio',
        'vcoreUtilization' => 'VcoreUtilization',
        'writeSize' => 'WriteSize',
    ];

    public function validate()
    {
        if (null !== $this->memSeconds) {
            $this->memSeconds->validate();
        }
        if (null !== $this->memSecondsDayGrowthRatio) {
            $this->memSecondsDayGrowthRatio->validate();
        }
        if (null !== $this->memUtilization) {
            $this->memUtilization->validate();
        }
        if (null !== $this->readSize) {
            $this->readSize->validate();
        }
        if (null !== $this->vcoreSeconds) {
            $this->vcoreSeconds->validate();
        }
        if (null !== $this->vcoreSecondsDayGrowthRatio) {
            $this->vcoreSecondsDayGrowthRatio->validate();
        }
        if (null !== $this->vcoreUtilization) {
            $this->vcoreUtilization->validate();
        }
        if (null !== $this->writeSize) {
            $this->writeSize->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memSeconds) {
            $res['MemSeconds'] = null !== $this->memSeconds ? $this->memSeconds->toArray($noStream) : $this->memSeconds;
        }

        if (null !== $this->memSecondsDayGrowthRatio) {
            $res['MemSecondsDayGrowthRatio'] = null !== $this->memSecondsDayGrowthRatio ? $this->memSecondsDayGrowthRatio->toArray($noStream) : $this->memSecondsDayGrowthRatio;
        }

        if (null !== $this->memUtilization) {
            $res['MemUtilization'] = null !== $this->memUtilization ? $this->memUtilization->toArray($noStream) : $this->memUtilization;
        }

        if (null !== $this->readSize) {
            $res['ReadSize'] = null !== $this->readSize ? $this->readSize->toArray($noStream) : $this->readSize;
        }

        if (null !== $this->vcoreSeconds) {
            $res['VcoreSeconds'] = null !== $this->vcoreSeconds ? $this->vcoreSeconds->toArray($noStream) : $this->vcoreSeconds;
        }

        if (null !== $this->vcoreSecondsDayGrowthRatio) {
            $res['VcoreSecondsDayGrowthRatio'] = null !== $this->vcoreSecondsDayGrowthRatio ? $this->vcoreSecondsDayGrowthRatio->toArray($noStream) : $this->vcoreSecondsDayGrowthRatio;
        }

        if (null !== $this->vcoreUtilization) {
            $res['VcoreUtilization'] = null !== $this->vcoreUtilization ? $this->vcoreUtilization->toArray($noStream) : $this->vcoreUtilization;
        }

        if (null !== $this->writeSize) {
            $res['WriteSize'] = null !== $this->writeSize ? $this->writeSize->toArray($noStream) : $this->writeSize;
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
