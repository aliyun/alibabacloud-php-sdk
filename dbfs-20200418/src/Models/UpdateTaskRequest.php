<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskIds;

    /**
     * @var int
     */
    public $taskProgress;
    protected $_name = [
        'regionId'     => 'RegionId',
        'taskIds'      => 'TaskIds',
        'taskProgress' => 'TaskProgress',
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
        if (null !== $this->taskProgress) {
            $res['TaskProgress'] = $this->taskProgress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }
        if (isset($map['TaskProgress'])) {
            $model->taskProgress = $map['TaskProgress'];
        }

        return $model;
    }
}
