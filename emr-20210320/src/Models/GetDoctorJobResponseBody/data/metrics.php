<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorJobResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorJobResponseBody\data\metrics\memSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorJobResponseBody\data\metrics\vcoreSeconds;

class metrics extends Model
{
    /**
     * @var memSeconds
     */
    public $memSeconds;
    /**
     * @var vcoreSeconds
     */
    public $vcoreSeconds;
    protected $_name = [
        'memSeconds'   => 'MemSeconds',
        'vcoreSeconds' => 'VcoreSeconds',
    ];

    public function validate()
    {
        if (null !== $this->memSeconds) {
            $this->memSeconds->validate();
        }
        if (null !== $this->vcoreSeconds) {
            $this->vcoreSeconds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memSeconds) {
            $res['MemSeconds'] = null !== $this->memSeconds ? $this->memSeconds->toArray($noStream) : $this->memSeconds;
        }

        if (null !== $this->vcoreSeconds) {
            $res['VcoreSeconds'] = null !== $this->vcoreSeconds ? $this->vcoreSeconds->toArray($noStream) : $this->vcoreSeconds;
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

        if (isset($map['VcoreSeconds'])) {
            $model->vcoreSeconds = vcoreSeconds::fromMap($map['VcoreSeconds']);
        }

        return $model;
    }
}
