<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models;

use AlibabaCloud\SDK\Cloudphone\V20201230\Models\UninstallApplicationResponseBody\taskId;
use AlibabaCloud\Tea\Model;

class UninstallApplicationResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 55C15B1C-D507-45F0-B490-69D6E0F113C6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task ID.
     *
     * @var taskId
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
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
        if (null !== $this->taskId) {
            $res['TaskId'] = null !== $this->taskId ? $this->taskId->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UninstallApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = taskId::fromMap($map['TaskId']);
        }

        return $model;
    }
}
