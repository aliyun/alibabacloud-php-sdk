<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveMessageUserInfoResponseBody\failList;
use AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveMessageUserInfoResponseBody\successList;

class ModifyLiveMessageUserInfoResponseBody extends Model
{
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
        'failList' => 'FailList',
        'requestId' => 'RequestId',
        'successList' => 'SuccessList',
    ];

    public function validate()
    {
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
