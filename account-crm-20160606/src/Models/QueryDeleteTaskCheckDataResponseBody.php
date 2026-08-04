<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryDeleteTaskCheckDataResponseBody\taskCheckDataDtoList;

class QueryDeleteTaskCheckDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

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
     * @var taskCheckDataDtoList[]
     */
    public $taskCheckDataDtoList;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'taskCheckDataDtoList' => 'TaskCheckDataDtoList',
    ];

    public function validate()
    {
        if (\is_array($this->taskCheckDataDtoList)) {
            Model::validateArray($this->taskCheckDataDtoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->taskCheckDataDtoList) {
            if (\is_array($this->taskCheckDataDtoList)) {
                $res['TaskCheckDataDtoList'] = [];
                $n1 = 0;
                foreach ($this->taskCheckDataDtoList as $item1) {
                    $res['TaskCheckDataDtoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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

        if (isset($map['TaskCheckDataDtoList'])) {
            if (!empty($map['TaskCheckDataDtoList'])) {
                $model->taskCheckDataDtoList = [];
                $n1 = 0;
                foreach ($map['TaskCheckDataDtoList'] as $item1) {
                    $model->taskCheckDataDtoList[$n1] = taskCheckDataDtoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
