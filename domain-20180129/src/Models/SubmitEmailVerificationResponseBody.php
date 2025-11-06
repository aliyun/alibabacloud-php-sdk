<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\SubmitEmailVerificationResponseBody\existList;
use AlibabaCloud\SDK\Domain\V20180129\Models\SubmitEmailVerificationResponseBody\failList;
use AlibabaCloud\SDK\Domain\V20180129\Models\SubmitEmailVerificationResponseBody\successList;

class SubmitEmailVerificationResponseBody extends Model
{
    /**
     * @var existList[]
     */
    public $existList;

    /**
     * @var failList[]
     */
    public $failList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var successList[]
     */
    public $successList;
    protected $_name = [
        'existList' => 'ExistList',
        'failList' => 'FailList',
        'requestId' => 'RequestId',
        'successList' => 'SuccessList',
    ];

    public function validate()
    {
        if (\is_array($this->existList)) {
            Model::validateArray($this->existList);
        }
        if (\is_array($this->failList)) {
            Model::validateArray($this->failList);
        }
        if (\is_array($this->successList)) {
            Model::validateArray($this->successList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->existList) {
            if (\is_array($this->existList)) {
                $res['ExistList'] = [];
                $n1 = 0;
                foreach ($this->existList as $item1) {
                    $res['ExistList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->failList) {
            if (\is_array($this->failList)) {
                $res['FailList'] = [];
                $n1 = 0;
                foreach ($this->failList as $item1) {
                    $res['FailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successList) {
            if (\is_array($this->successList)) {
                $res['SuccessList'] = [];
                $n1 = 0;
                foreach ($this->successList as $item1) {
                    $res['SuccessList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ExistList'])) {
            if (!empty($map['ExistList'])) {
                $model->existList = [];
                $n1 = 0;
                foreach ($map['ExistList'] as $item1) {
                    $model->existList[$n1] = existList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FailList'])) {
            if (!empty($map['FailList'])) {
                $model->failList = [];
                $n1 = 0;
                foreach ($map['FailList'] as $item1) {
                    $model->failList[$n1] = failList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessList'])) {
            if (!empty($map['SuccessList'])) {
                $model->successList = [];
                $n1 = 0;
                foreach ($map['SuccessList'] as $item1) {
                    $model->successList[$n1] = successList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
