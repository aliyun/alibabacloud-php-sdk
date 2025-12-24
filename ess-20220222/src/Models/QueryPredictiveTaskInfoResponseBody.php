<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveTaskInfoResponseBody\taskInfos;

class QueryPredictiveTaskInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskInfos
     */
    public $taskInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskInfos' => 'TaskInfos',
    ];

    public function validate()
    {
        if (null !== $this->taskInfos) {
            $this->taskInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskInfos) {
            $res['TaskInfos'] = null !== $this->taskInfos ? $this->taskInfos->toArray($noStream) : $this->taskInfos;
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

        if (isset($map['TaskInfos'])) {
            $model->taskInfos = taskInfos::fromMap($map['TaskInfos']);
        }

        return $model;
    }
}
