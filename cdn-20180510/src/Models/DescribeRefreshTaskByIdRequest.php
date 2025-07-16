<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeRefreshTaskByIdRequest extends Model
{
    /**
     * @description The ID of the task that you want to query.
     *
     * You can call the [RefreshObjectCaches](https://help.aliyun.com/document_detail/91164.html) operation to query task IDs. Then, you can use the task IDs to query task status.
     *
     * You can specify up to 10 task IDs. Separate task IDs with commas (,).
     *
     * This parameter is required.
     *
     * @example 12345678
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRefreshTaskByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
