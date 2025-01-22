<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class GetTaskInstanceLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $taskInstanceLog;
    protected $_name = [
        'requestId'       => 'RequestId',
        'taskInstanceLog' => 'TaskInstanceLog',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
