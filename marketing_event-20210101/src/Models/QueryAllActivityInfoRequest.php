<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Tea\Model;

class QueryAllActivityInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $activityId;
    protected $_name = [
        'activityId' => 'ActivityId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAllActivityInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        return $model;
    }
}
