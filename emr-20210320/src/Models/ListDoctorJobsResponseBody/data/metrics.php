<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsResponseBody\data\metrics\memSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsResponseBody\data\metrics\vcoreSeconds;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memSeconds) {
            $res['MemSeconds'] = null !== $this->memSeconds ? $this->memSeconds->toMap() : null;
        }
        if (null !== $this->vcoreSeconds) {
            $res['VcoreSeconds'] = null !== $this->vcoreSeconds ? $this->vcoreSeconds->toMap() : null;
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
        if (isset($map['VcoreSeconds'])) {
            $model->vcoreSeconds = vcoreSeconds::fromMap($map['VcoreSeconds']);
        }

        return $model;
    }
}
