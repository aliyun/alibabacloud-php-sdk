<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteSyntheticTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $taskIds;
    protected $_name = [
        'regionId' => 'RegionId',
        'taskIds'  => 'TaskIds',
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
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSyntheticTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = $map['TaskIds'];
            }
        }

        return $model;
    }
}
