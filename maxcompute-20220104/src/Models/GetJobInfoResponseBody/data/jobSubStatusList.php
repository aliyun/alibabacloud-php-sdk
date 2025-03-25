<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobSubStatusList extends Model
{
    /**
     * @description The code of the sub-status.
     *
     * @example 1010
     *
     * @var int
     */
    public $code;

    /**
     * @description The description of the sub-status.
     *
     * @example Waiting for scheduling
     *
     * @var string
     */
    public $description;

    /**
     * @description The start time of the sub-status.
     *
     * @example 2025-03-05 00:04:15.717364 +0800
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'code' => 'code',
        'description' => 'description',
        'startTime' => 'startTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobSubStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
