<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\DeleteWorkspaceResponseBody\failReasons;

class DeleteWorkspaceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var failReasons[]
     */
    public $failReasons;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var bool
     */
    public $isDeleted;

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
    protected $_name = [
        'code' => 'code',
        'failReasons' => 'failReasons',
        'httpStatusCode' => 'httpStatusCode',
        'isDeleted' => 'isDeleted',
        'message' => 'message',
        'requestId' => 'requestId',
        'success' => 'success',
    ];

    public function validate()
    {
        if (\is_array($this->failReasons)) {
            Model::validateArray($this->failReasons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->failReasons) {
            if (\is_array($this->failReasons)) {
                $res['failReasons'] = [];
                $n1 = 0;
                foreach ($this->failReasons as $item1) {
                    $res['failReasons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->isDeleted) {
            $res['isDeleted'] = $this->isDeleted;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['failReasons'])) {
            if (!empty($map['failReasons'])) {
                $model->failReasons = [];
                $n1 = 0;
                foreach ($map['failReasons'] as $item1) {
                    $model->failReasons[$n1] = failReasons::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }

        if (isset($map['isDeleted'])) {
            $model->isDeleted = $map['isDeleted'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
