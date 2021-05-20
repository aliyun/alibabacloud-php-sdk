<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableAddColumnResponse\taskInfo;
use AlibabaCloud\Tea\Model;

class UpdateTableAddColumnResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskInfo
     */
    public $taskInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskInfo'  => 'TaskInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('taskInfo', $this->taskInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskInfo) {
            $res['TaskInfo'] = null !== $this->taskInfo ? $this->taskInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTableAddColumnResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskInfo'])) {
            $model->taskInfo = taskInfo::fromMap($map['TaskInfo']);
        }

        return $model;
    }
}
