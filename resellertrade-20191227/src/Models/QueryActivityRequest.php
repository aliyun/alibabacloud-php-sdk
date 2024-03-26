<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models;

use AlibabaCloud\Tea\Model;

class QueryActivityRequest extends Model
{
    /**
     * @var int
     */
    public $activityId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $snapType;
    protected $_name = [
        'activityId' => 'ActivityId',
        'bizId'      => 'BizId',
        'snapType'   => 'SnapType',
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
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->snapType) {
            $res['SnapType'] = $this->snapType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryActivityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['SnapType'])) {
            $model->snapType = $map['SnapType'];
        }

        return $model;
    }
}
