<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSoarStrategyTaskDetailResponseBody\taskDetail;

class DescribeSoarStrategyTaskDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var taskDetail
     */
    public $taskDetail;
    protected $_name = [
        'requestId'  => 'RequestId',
        'taskDetail' => 'TaskDetail',
    ];

    public function validate()
    {
        if (null !== $this->taskDetail) {
            $this->taskDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskDetail) {
            $res['TaskDetail'] = null !== $this->taskDetail ? $this->taskDetail->toArray($noStream) : $this->taskDetail;
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

        if (isset($map['TaskDetail'])) {
            $model->taskDetail = taskDetail::fromMap($map['TaskDetail']);
        }

        return $model;
    }
}
