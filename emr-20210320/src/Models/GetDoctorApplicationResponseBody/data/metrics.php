<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data\metrics\memSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data\metrics\memUtilization;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data\metrics\vcoreSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponseBody\data\metrics\vcoreUtilization;

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
        'memSeconds' => 'MemSeconds',
        'memUtilization' => 'MemUtilization',
        'vcoreSeconds' => 'VcoreSeconds',
        'vcoreUtilization' => 'VcoreUtilization',
    ];

    public function validate()
    {
        if (null !== $this->memSeconds) {
            $this->memSeconds->validate();
        }
        if (null !== $this->memUtilization) {
            $this->memUtilization->validate();
        }
        if (null !== $this->vcoreSeconds) {
            $this->vcoreSeconds->validate();
        }
        if (null !== $this->vcoreUtilization) {
            $this->vcoreUtilization->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memSeconds) {
            $res['MemSeconds'] = null !== $this->memSeconds ? $this->memSeconds->toArray($noStream) : $this->memSeconds;
        }

        if (null !== $this->memUtilization) {
            $res['MemUtilization'] = null !== $this->memUtilization ? $this->memUtilization->toArray($noStream) : $this->memUtilization;
        }

        if (null !== $this->vcoreSeconds) {
            $res['VcoreSeconds'] = null !== $this->vcoreSeconds ? $this->vcoreSeconds->toArray($noStream) : $this->vcoreSeconds;
        }

        if (null !== $this->vcoreUtilization) {
            $res['VcoreUtilization'] = null !== $this->vcoreUtilization ? $this->vcoreUtilization->toArray($noStream) : $this->vcoreUtilization;
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
