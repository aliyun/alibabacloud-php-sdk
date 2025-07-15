<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceImageResponseBody extends Model
{
    /**
     * @example 1A923337-44D9-5CAD-9A53-95084BD4****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example t-1ljew7on6ay0j****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
