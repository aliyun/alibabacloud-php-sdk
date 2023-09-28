<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail;
use AlibabaCloud\Tea\Model;

class GetTaskResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the task.
     *
     * @var taskDetail
     */
    public $taskDetail;
    protected $_name = [
        'requestId'  => 'RequestId',
        'taskDetail' => 'TaskDetail',
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
        if (null !== $this->taskDetail) {
            $res['TaskDetail'] = null !== $this->taskDetail ? $this->taskDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskDetail'])) {
            $model->taskDetail = taskDetail::fromMap($map['TaskDetail']);
        }

        return $model;
    }
}
