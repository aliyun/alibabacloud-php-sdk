<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetTaskInstanceLogResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 22C97E95-F023-56B5-8852-B1A77A17XXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The run log of the instance.
     *
     * @example This is running log
     *
     * @var string
     */
    public $taskInstanceLog;
    protected $_name = [
        'requestId'       => 'RequestId',
        'taskInstanceLog' => 'TaskInstanceLog',
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
        if (null !== $this->taskInstanceLog) {
            $res['TaskInstanceLog'] = $this->taskInstanceLog;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskInstanceLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskInstanceLog'])) {
            $model->taskInstanceLog = $map['TaskInstanceLog'];
        }

        return $model;
    }
}
