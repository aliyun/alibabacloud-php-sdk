<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class DescribeActiveOperationTaskCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $needPop;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $taskCount;
    protected $_name = [
        'needPop' => 'NeedPop',
        'requestId' => 'RequestId',
        'taskCount' => 'TaskCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->needPop) {
            $res['NeedPop'] = $this->needPop;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
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
        if (isset($map['NeedPop'])) {
            $model->needPop = $map['NeedPop'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
        }

        return $model;
    }
}
