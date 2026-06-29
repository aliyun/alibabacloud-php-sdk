<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class GetTaskWorkforceResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $details;

    /**
     * @var string
     */
    public $errorCode;

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
     * @var Workforce[]
     */
    public $workforce;
    protected $_name = [
        'code' => 'Code',
        'details' => 'Details',
        'errorCode' => 'ErrorCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'workforce' => 'Workforce',
    ];

    public function validate()
    {
        if (\is_array($this->workforce)) {
            Model::validateArray($this->workforce);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
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

        if (null !== $this->workforce) {
            if (\is_array($this->workforce)) {
                $res['Workforce'] = [];
                $n1 = 0;
                foreach ($this->workforce as $item1) {
                    $res['Workforce'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
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

        if (isset($map['Workforce'])) {
            if (!empty($map['Workforce'])) {
                $model->workforce = [];
                $n1 = 0;
                foreach ($map['Workforce'] as $item1) {
                    $model->workforce[$n1] = Workforce::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
