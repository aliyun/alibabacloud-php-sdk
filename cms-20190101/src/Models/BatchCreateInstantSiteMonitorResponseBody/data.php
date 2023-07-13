<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\BatchCreateInstantSiteMonitorResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 679fbe4f-b80b-4706-91b2-5427b43e****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description For more information about common request parameters, see [Common parameters](~~199331~~).
     *
     * @example HangZhou_ECS1
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'taskId'   => 'TaskId',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
