<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteTaskNewResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
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
                    $res['FailList'][$n1] = $item1;
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
                    $res['SuccessList'][$n1] = $item1;
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
                    $model->failList[$n1] = $item1;
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
                    $model->successList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
