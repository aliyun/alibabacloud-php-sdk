<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class ResetConsumeOffsetRequest extends Model
{
    /**
     * @description The time when the consumer offset is reset.
     *
     * @example 2023-03-22 12:17:08
     *
     * @var string
     */
    public $resetTime;

    /**
     * @description The method that is used to reset the consumer offset. Valid values: LATEST_OFFSET and SPECIFIED_TIME.
     *
     * @example LATEST_OFFSET
     *
     * @var string
     */
    public $resetType;
    protected $_name = [
        'resetTime' => 'resetTime',
        'resetType' => 'resetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resetTime) {
            $res['resetTime'] = $this->resetTime;
        }
        if (null !== $this->resetType) {
            $res['resetType'] = $this->resetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetConsumeOffsetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resetTime'])) {
            $model->resetTime = $map['resetTime'];
        }
        if (isset($map['resetType'])) {
            $model->resetType = $map['resetType'];
        }

        return $model;
    }
}
