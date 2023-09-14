<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data\metrics\memSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data\metrics\memUtilization;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data\metrics\vcoreSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data\metrics\vcoreUtilization;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var memSeconds
     */
    public $memSeconds;

    /**
     * @var memUtilization
     */
    public $memUtilization;

    /**
     * @var vcoreSeconds
     */
    public $vcoreSeconds;

    /**
     * @var vcoreUtilization
     */
    public $vcoreUtilization;
    protected $_name = [
        'memSeconds'       => 'MemSeconds',
        'memUtilization'   => 'MemUtilization',
        'vcoreSeconds'     => 'VcoreSeconds',
        'vcoreUtilization' => 'VcoreUtilization',
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
        if (null !== $this->memUtilization) {
            $res['MemUtilization'] = null !== $this->memUtilization ? $this->memUtilization->toMap() : null;
        }
        if (null !== $this->vcoreSeconds) {
            $res['VcoreSeconds'] = null !== $this->vcoreSeconds ? $this->vcoreSeconds->toMap() : null;
        }
        if (null !== $this->vcoreUtilization) {
            $res['VcoreUtilization'] = null !== $this->vcoreUtilization ? $this->vcoreUtilization->toMap() : null;
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
        if (isset($map['MemUtilization'])) {
            $model->memUtilization = memUtilization::fromMap($map['MemUtilization']);
        }
        if (isset($map['VcoreSeconds'])) {
            $model->vcoreSeconds = vcoreSeconds::fromMap($map['VcoreSeconds']);
        }
        if (isset($map['VcoreUtilization'])) {
            $model->vcoreUtilization = vcoreUtilization::fromMap($map['VcoreUtilization']);
        }

        return $model;
    }
}
