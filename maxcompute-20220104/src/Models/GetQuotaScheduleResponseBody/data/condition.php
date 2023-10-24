<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaScheduleResponseBody\data;

use AlibabaCloud\Tea\Model;

class condition extends Model
{
    /**
     * @description The start time when the quota plan takes effect.
     *
     * @example 2022-04-25T04:23:04Z
     *
     * @var string
     */
    public $after;

    /**
     * @description The time when the quota plan takes effect.
     *
     * @example 0900
     *
     * @var string
     */
    public $at;
    protected $_name = [
        'after' => 'after',
        'at'    => 'at',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->after) {
            $res['after'] = $this->after;
        }
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
        if (isset($map['after'])) {
            $model->after = $map['after'];
        }
        if (isset($map['at'])) {
            $model->at = $map['at'];
        }

        return $model;
    }
}
