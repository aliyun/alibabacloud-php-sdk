<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\StartJobResponseBody\callIds;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\StartJobResponseBody\taskIds;
use AlibabaCloud\Tea\Model;

class StartJobResponseBody extends Model
{
    /**
     * @var callIds[]
     */
    public $callIds;

    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 8a621aa1-d2e7-43f3-b54d-8830af73c468
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var taskIds[]
     */
    public $taskIds;
    protected $_name = [
        'callIds'        => 'CallIds',
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'taskIds'        => 'TaskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callIds) {
            $res['CallIds'] = [];
            if (null !== $this->callIds && \is_array($this->callIds)) {
                $n = 0;
                foreach ($this->callIds as $item) {
                    $res['CallIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = [];
            if (null !== $this->taskIds && \is_array($this->taskIds)) {
                $n = 0;
                foreach ($this->taskIds as $item) {
                    $res['TaskIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallIds'])) {
            if (!empty($map['CallIds'])) {
                $model->callIds = [];
                $n              = 0;
                foreach ($map['CallIds'] as $item) {
                    $model->callIds[$n++] = null !== $item ? callIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = [];
                $n              = 0;
                foreach ($map['TaskIds'] as $item) {
                    $model->taskIds[$n++] = null !== $item ? taskIds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
