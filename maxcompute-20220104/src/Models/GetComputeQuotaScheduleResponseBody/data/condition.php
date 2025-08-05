<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeQuotaScheduleResponseBody\data;

use AlibabaCloud\Tea\Model;

class condition extends Model
{
    /**
     * @description The start time when the quota plan takes effect.
     *
     * @example 09:00
     *
     * @var string
     */
    public $at;
    protected $_name = [
        'at' => 'at',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->at) {
            $res['at'] = $this->at;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return condition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['at'])) {
            $model->at = $map['at'];
        }

        return $model;
    }
}
