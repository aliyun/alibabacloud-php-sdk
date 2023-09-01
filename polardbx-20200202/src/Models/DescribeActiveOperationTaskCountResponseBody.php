<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class DescribeActiveOperationTaskCountResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $needPop;

    /**
     * @example EC7E27FC-58F8-4722-89BB-D1B6D0971956
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
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
