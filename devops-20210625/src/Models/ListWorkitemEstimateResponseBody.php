<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemEstimateResponseBody\workitemTimeEstimate;

class ListWorkitemEstimateResponseBody extends Model
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
     * @var workitemTimeEstimate[]
     */
    public $workitemTimeEstimate;
    protected $_name = [
        'code' => 'code',
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
        'requestId' => 'requestId',
        'success' => 'success',
        'workitemTimeEstimate' => 'workitemTimeEstimate',
    ];

    public function validate()
    {
        if (\is_array($this->workitemTimeEstimate)) {
            Model::validateArray($this->workitemTimeEstimate);
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

        if (null !== $this->workitemTimeEstimate) {
            if (\is_array($this->workitemTimeEstimate)) {
                $res['workitemTimeEstimate'] = [];
                $n1 = 0;
                foreach ($this->workitemTimeEstimate as $item1) {
                    $res['workitemTimeEstimate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['workitemTimeEstimate'])) {
            if (!empty($map['workitemTimeEstimate'])) {
                $model->workitemTimeEstimate = [];
                $n1 = 0;
                foreach ($map['workitemTimeEstimate'] as $item1) {
                    $model->workitemTimeEstimate[$n1] = workitemTimeEstimate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
