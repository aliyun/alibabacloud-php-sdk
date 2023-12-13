<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class StopTimingSyntheticTaskShrinkRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The task IDs.
     *
     * @var string
     */
    public $taskIdsShrink;
    protected $_name = [
        'regionId'      => 'RegionId',
        'taskIdsShrink' => 'TaskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskIdsShrink) {
            $res['TaskIds'] = $this->taskIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopTimingSyntheticTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskIds'])) {
            $model->taskIdsShrink = $map['TaskIds'];
        }

        return $model;
    }
}
