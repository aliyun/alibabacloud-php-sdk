<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListOnlineEvalTasksResponseBody\tasks;
use AlibabaCloud\Tea\Model;

class ListOnlineEvalTasksResponseBody extends Model
{
    /**
     * @description Internal error code. Set only when the response has an error.
     *
     * @example InvalidInputParams
     *
     * @var string
     */
    public $code;

    /**
     * @description Response error message. Set only when the response has an error.
     *
     * @example page number should be greater than 0
     *
     * @var string
     */
    public $message;

    /**
     * @description ID of the request
     *
     * @example 6F352A02-9C0D-54A7-B57C-663CF71D5714
     *
     * @var string
     */
    public $requestId;

    /**
     * @description List of tasks.
     *
     * @var tasks[]
     */
    public $tasks;

    /**
     * @description Total number of tasks that meet the criteria.
     *
     * @example 22
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'tasks' => 'Tasks',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOnlineEvalTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
