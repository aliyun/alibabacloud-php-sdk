<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody\createResultList;

use AlibabaCloud\Tea\Model;

class createResultList extends Model
{
    /**
     * @description The ID of the site monitoring task.
     *
     * @example 2c8dbdf9-a3ab-46a1-85a4-f094965e****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the site monitoring task.
     *
     * @example HanZhou_ECS1
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
     * @return createResultList
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
