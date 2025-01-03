<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Tea\Model;

class GetWorkloadRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 13
     *
     * @var int
     */
    public $workloadId;
    protected $_name = [
        'workloadId' => 'WorkloadId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkloadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
        }

        return $model;
    }
}
