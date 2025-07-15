<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateRtcAsrTaskResponseBody extends Model
{
    /**
     * @description The result of the request. If success is returned, the request is successful. If an error message is returned, the request failed.
     *
     * @example success
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the request.
     *
     * @example 7FF5417D-06E9-5A2C-9A70-581F6149E6C1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned HTTP status code. HTTP status code 2000 indicates that the request is successful. If another HTTP status code is returned, the request failed.
     *
     * @example 2000
     *
     * @var int
     */
    public $retCode;

    /**
     * @description The ID of the task.
     *
     * @example asr-a6ac15e0-9118-4b4c-9e64-306163a0****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'description' => 'Description',
        'requestId' => 'RequestId',
        'retCode' => 'RetCode',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRtcAsrTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
