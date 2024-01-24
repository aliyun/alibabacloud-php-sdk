<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceLevelTasksResponseBody\tasks;
use AlibabaCloud\Tea\Model;

class DescribeDrdsInstanceLevelTasksResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 2F7F8080-9132-4279-85D0-B7E5C4305162
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The list of returned unfinished tasks.
     *
     * @var tasks
     */
    public $tasks;
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'tasks'     => 'Tasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = null !== $this->tasks ? $this->tasks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsInstanceLevelTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Tasks'])) {
            $model->tasks = tasks::fromMap($map['Tasks']);
        }

        return $model;
    }
}
