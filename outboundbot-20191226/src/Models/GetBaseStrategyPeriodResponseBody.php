<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetBaseStrategyPeriodResponseBody\workingTime;

class GetBaseStrategyPeriodResponseBody extends Model
{
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
     * @var bool
     */
    public $onlyWeekdays;

    /**
     * @var bool
     */
    public $onlyWorkdays;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var workingTime[]
     */
    public $workingTime;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'onlyWeekdays' => 'OnlyWeekdays',
        'onlyWorkdays' => 'OnlyWorkdays',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'workingTime' => 'WorkingTime',
    ];

    public function validate()
    {
        if (\is_array($this->workingTime)) {
            Model::validateArray($this->workingTime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->onlyWeekdays) {
            $res['OnlyWeekdays'] = $this->onlyWeekdays;
        }

        if (null !== $this->onlyWorkdays) {
            $res['OnlyWorkdays'] = $this->onlyWorkdays;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->workingTime) {
            if (\is_array($this->workingTime)) {
                $res['WorkingTime'] = [];
                $n1 = 0;
                foreach ($this->workingTime as $item1) {
                    $res['WorkingTime'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OnlyWeekdays'])) {
            $model->onlyWeekdays = $map['OnlyWeekdays'];
        }

        if (isset($map['OnlyWorkdays'])) {
            $model->onlyWorkdays = $map['OnlyWorkdays'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['WorkingTime'])) {
            if (!empty($map['WorkingTime'])) {
                $model->workingTime = [];
                $n1 = 0;
                foreach ($map['WorkingTime'] as $item1) {
                    $model->workingTime[$n1++] = workingTime::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
