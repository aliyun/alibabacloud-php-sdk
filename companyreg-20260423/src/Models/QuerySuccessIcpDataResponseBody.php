<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20260423\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataResponseBody\baSuccessDataWithRiskList;

class QuerySuccessIcpDataResponseBody extends Model
{
    /**
     * @var baSuccessDataWithRiskList[]
     */
    public $baSuccessDataWithRiskList;

    /**
     * @var int
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'baSuccessDataWithRiskList' => 'BaSuccessDataWithRiskList',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->baSuccessDataWithRiskList)) {
            Model::validateArray($this->baSuccessDataWithRiskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baSuccessDataWithRiskList) {
            if (\is_array($this->baSuccessDataWithRiskList)) {
                $res['BaSuccessDataWithRiskList'] = [];
                $n1 = 0;
                foreach ($this->baSuccessDataWithRiskList as $item1) {
                    $res['BaSuccessDataWithRiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['BaSuccessDataWithRiskList'])) {
            if (!empty($map['BaSuccessDataWithRiskList'])) {
                $model->baSuccessDataWithRiskList = [];
                $n1 = 0;
                foreach ($map['BaSuccessDataWithRiskList'] as $item1) {
                    $model->baSuccessDataWithRiskList[$n1] = baSuccessDataWithRiskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
