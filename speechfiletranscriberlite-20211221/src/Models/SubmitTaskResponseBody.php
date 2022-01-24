<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models;

use AlibabaCloud\Tea\Model;

class SubmitTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusText;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'statusCode' => 'StatusCode',
        'statusText' => 'StatusText',
        'taskId'     => 'TaskId',
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
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->statusText) {
            $res['StatusText'] = $this->statusText;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['StatusText'])) {
            $model->statusText = $map['StatusText'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
