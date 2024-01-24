<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsTasksResponseBody\tasks;
use AlibabaCloud\Tea\Model;

class DescribeDrdsTasksResponseBody extends Model
{
    /**
     * @description Indicates the ID of the request.
     *
     * @example CD412DF7-F21D-44CE-88FF-ED24917174A8
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
     * @description Indicates information about the tasks.
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
     * @return DescribeDrdsTasksResponseBody
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
