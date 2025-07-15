<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateScreenshotResponseBody\tasks;
use AlibabaCloud\Tea\Model;

class CreateScreenshotResponseBody extends Model
{
    /**
     * @description The ID of the request. If the request fails, share this ID with technical support to help diagnose the issue.
     *
     * @example 3AF82CE1-2801-52CE-BF64-B491DD7C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tasks.
     *
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'requestId' => 'RequestId',
        'tasks' => 'Tasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['Tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScreenshotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
