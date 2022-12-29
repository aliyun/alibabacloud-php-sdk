<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeActiveOperationTaskCountResponseBody extends Model
{
    /**
     * @description Indicates whether any O&M tasks need pop-up windows to notify users actions. Valid values:
     *
     * - **0**: No O&M tasks need pop-up windows to notify users actions.
     * - **1**: Some O&M tasks need pop-up windows to notify users actions.
     * @example 0
     *
     * @var int
     */
    public $needPop;

    /**
     * @description The ID of the request.
     *
     * @example 770D7F11-21A2-402B-9DF6-D1A620570EF9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of pending O&M tasks.
     *
     * @example 0
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
