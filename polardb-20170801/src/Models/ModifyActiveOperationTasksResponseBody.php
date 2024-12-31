<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyActiveOperationTasksResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 42CD2EF5-D77E-5AD4-961B-159330D98286
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task IDs.
     *
     * @example 11111,22222
     *
     * @var string
     */
    public $taskIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskIds'   => 'TaskIds',
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
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyActiveOperationTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }

        return $model;
    }
}
