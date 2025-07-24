<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorApplicationsResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorApplicationsResponseBody\data\metrics\memSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorApplicationsResponseBody\data\metrics\memUtilization;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorApplicationsResponseBody\data\metrics\vcoreSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorApplicationsResponseBody\data\metrics\vcoreUtilization;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description The amount of memory consumed.
     *
     * @var memSeconds
     */
    public $memSeconds;

    /**
     * @description The memory usage
     *
     * @var memUtilization
     */
    public $memUtilization;

    /**
     * @description The CPU usage.
     *
     * @var vcoreSeconds
     */
    public $vcoreSeconds;

    /**
     * @description The CPU utilization. This parameter has the same meaning as %CPU in the Linux top command.
     *
     * @var vcoreUtilization
     */
    public $vcoreUtilization;
    protected $_name = [
        'memSeconds' => 'MemSeconds',
        'memUtilization' => 'MemUtilization',
        'vcoreSeconds' => 'VcoreSeconds',
        'vcoreUtilization' => 'VcoreUtilization',
    ];

    public function validate() {}

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
