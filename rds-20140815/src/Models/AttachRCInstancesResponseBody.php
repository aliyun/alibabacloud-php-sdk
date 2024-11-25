<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\AttachRCInstancesResponseBody\responses;
use AlibabaCloud\Tea\Model;

class AttachRCInstancesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 847BA085-B377-4BFA-8267-F82345ECE1D2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The response parameters.
     *
     * @var responses[]
     */
    public $responses;

    /**
     * @description The task ID.
     *
     * @example 178968983
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'RequestId',
        'responses' => 'Responses',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->responses) {
            $res['Responses'] = [];
            if (null !== $this->responses && \is_array($this->responses)) {
                $n = 0;
                foreach ($this->responses as $item) {
                    $res['Responses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachRCInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Responses'])) {
            if (!empty($map['Responses'])) {
                $model->responses = [];
                $n                = 0;
                foreach ($map['Responses'] as $item) {
                    $model->responses[$n++] = null !== $item ? responses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
