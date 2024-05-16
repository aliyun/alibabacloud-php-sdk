<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetBaselineStatusRequest extends Model
{
    /**
     * @description The ID of the baseline.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The data timestamp of the baseline instance. Specify the time in the ISO 8601 standard in the yyyy-MM-dd\\"T\\"HH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2020-07-07T00:00:00+0800
     *
     * @var string
     */
    public $bizdate;

    /**
     * @description The ID of the scheduling cycle of the baseline instance. For a baseline instance that is scheduled by day, the value of this parameter is 1. For a baseline instance that is scheduled by hour, the value of this parameter ranges from 1 to 24.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $inGroupId;
    protected $_name = [
        'baselineId' => 'BaselineId',
        'bizdate'    => 'Bizdate',
        'inGroupId'  => 'InGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBaselineStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }

        return $model;
    }
}
