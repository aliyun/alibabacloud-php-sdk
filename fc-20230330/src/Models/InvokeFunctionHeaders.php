<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class InvokeFunctionHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description The ID of the asynchronous task. You must enable the asynchronous task feature in advance.
     *
     * >  If you use an SDK to invoke a function, we recommend that you specify a business-related ID to facilitate subsequent operations. For example, a video processing function can use video file names as invocation IDs. This way, you can easily check whether a video is successfully processed or terminated before it is processed. The ID can start only with letters or underscores. An ID can contain *letters, digits (0 - 9), underscores*, and hyphens (-). It can be up to 128 characters in length. If you do not specify the ID of the asynchronous invocation, the system automatically generates an ID.
     *
     * @example test-id
     *
     * @var string
     */
    public $xFcAsyncTaskId;

    /**
     * @description The type of function invocation. Valid values: Sync and Async.
     *
     * @example Sync
     *
     * @var string
     */
    public $xFcInvocationType;

    /**
     * @description The log type of function invocation. Valid values: None and Tail.
     *
     * @example Tail
     *
     * @var string
     */
    public $xFcLogType;
    protected $_name = [
        'xFcAsyncTaskId' => 'x-fc-async-task-id',
        'xFcInvocationType' => 'x-fc-invocation-type',
        'xFcLogType' => 'x-fc-log-type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xFcAsyncTaskId) {
            $res['x-fc-async-task-id'] = $this->xFcAsyncTaskId;
        }
        if (null !== $this->xFcInvocationType) {
            $res['x-fc-invocation-type'] = $this->xFcInvocationType;
        }
        if (null !== $this->xFcLogType) {
            $res['x-fc-log-type'] = $this->xFcLogType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeFunctionHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-fc-async-task-id'])) {
            $model->xFcAsyncTaskId = $map['x-fc-async-task-id'];
        }
        if (isset($map['x-fc-invocation-type'])) {
            $model->xFcInvocationType = $map['x-fc-invocation-type'];
        }
        if (isset($map['x-fc-log-type'])) {
            $model->xFcLogType = $map['x-fc-log-type'];
        }

        return $model;
    }
}
