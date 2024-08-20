<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnRefreshTaskByIdRequest extends Model
{
    /**
     * @description The ID of the task that you want to query. The following signature algorithms require different message digest algorithms:
     *
     *   Perform the [RefreshDcdnObjectCaches](https://help.aliyun.com/document_detail/130620.html) operation to query refresh task IDs.
     *   Perform the [PreloadDcdnObjectCaches](https://help.aliyun.com/document_detail/130636.html) operation to query prefetch task IDs.
     *
     * This parameter is required.
     * @example 113681**
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'taskId' => 'TaskId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnRefreshTaskByIdRequest
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
