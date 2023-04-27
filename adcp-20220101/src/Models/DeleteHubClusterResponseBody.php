<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeleteHubClusterResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example cb09fda0dc2f94a8397c76638c7ec****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the request.
     *
     * @example 7A827E32-6D24-5757-B3FD-D9396495FBDC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the job.
     *
     * @example T-623a96b7bbeaac074b00****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
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
     * @return DeleteHubClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
