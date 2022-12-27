<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class PushObjectCacheResponseBody extends Model
{
    /**
     * @description The ID of the prefetch task. If multiple tasks are returned, the IDs are separated by commas (,). The task IDs are merged based on the following rules:
     *
     *   If the tasks are set for the same accelerated domain name, submitted within the same second, and prefetch content from URLs instead of directories, the tasks IDs are merged into the same task ID (RushTaskId).
     *   If the number of tasks that are set for the same accelerated domain name, submitted within the same second, and prefetch content from URLs instead of directories exceeds 500, every 500 task IDs are merged into the same task ID (RushTaskId).
     *
     * @example 9524xxxx
     *
     * @var string
     */
    public $pushTaskId;

    /**
     * @description The ID of the request.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pushTaskId' => 'PushTaskId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushTaskId) {
            $res['PushTaskId'] = $this->pushTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushObjectCacheResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushTaskId'])) {
            $model->pushTaskId = $map['PushTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
