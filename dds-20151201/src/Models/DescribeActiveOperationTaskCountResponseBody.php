<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

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
        'needPop'   => 'NeedPop',
        'requestId' => 'RequestId',
        'taskCount' => 'TaskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeActiveOperationTaskCountResponseBody
     */
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
