<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryMovieSeatsRequest extends Model
{
    /**
     * @example LMALL20******004
     *
     * @var string
     */
    public $bizId;

    /**
     * @example {}
     *
     * @var string
     */
    public $extJson;

    /**
     * @example 9******5
     *
     * @var int
     */
    public $scheduleId;
    protected $_name = [
        'bizId'      => 'BizId',
        'extJson'    => 'ExtJson',
        'scheduleId' => 'ScheduleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMovieSeatsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }

        return $model;
    }
}
