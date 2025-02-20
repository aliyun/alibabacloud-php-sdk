<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemTimeResponseBody\workitemTime;

class ListWorkitemTimeResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMsg;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var workitemTime[]
     */
    public $workitemTime;
    protected $_name = [
        'code'         => 'code',
        'errorCode'    => 'errorCode',
        'errorMsg'     => 'errorMsg',
        'requestId'    => 'requestId',
        'success'      => 'success',
        'workitemTime' => 'workitemTime',
    ];

    public function validate()
    {
        if (\is_array($this->workitemTime)) {
            Model::validateArray($this->workitemTime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->workitemTime) {
            if (\is_array($this->workitemTime)) {
                $res['workitemTime'] = [];
                $n1                  = 0;
                foreach ($this->workitemTime as $item1) {
                    $res['workitemTime'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['workitemTime'])) {
            if (!empty($map['workitemTime'])) {
                $model->workitemTime = [];
                $n1                  = 0;
                foreach ($map['workitemTime'] as $item1) {
                    $model->workitemTime[$n1++] = workitemTime::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
