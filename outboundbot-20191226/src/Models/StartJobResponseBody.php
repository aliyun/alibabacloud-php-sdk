<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\StartJobResponseBody\callIds;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\StartJobResponseBody\taskIds;

class StartJobResponseBody extends Model
{
    /**
     * @var callIds[]
     */
    public $callIds;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var taskIds[]
     */
    public $taskIds;
    protected $_name = [
        'callIds' => 'CallIds',
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'taskIds' => 'TaskIds',
    ];

    public function validate()
    {
        if (\is_array($this->callIds)) {
            Model::validateArray($this->callIds);
        }
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callIds) {
            if (\is_array($this->callIds)) {
                $res['CallIds'] = [];
                $n1 = 0;
                foreach ($this->callIds as $item1) {
                    $res['CallIds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->taskIds)) {
                $res['TaskIds'] = [];
                $n1 = 0;
                foreach ($this->taskIds as $item1) {
                    $res['TaskIds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallIds'])) {
            if (!empty($map['CallIds'])) {
                $model->callIds = [];
                $n1 = 0;
                foreach ($map['CallIds'] as $item1) {
                    $model->callIds[$n1++] = callIds::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['TaskIds'] as $item1) {
                    $model->taskIds[$n1++] = taskIds::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
