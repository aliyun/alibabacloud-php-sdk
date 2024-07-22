<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class CancelOtaTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example aig-53fvrq1oanz6c****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example ota-be7jzm29wrrz5****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'taskId'             => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelOtaTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
