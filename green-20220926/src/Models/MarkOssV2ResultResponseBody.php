<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class MarkOssV2ResultResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failureRequestIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $successRequestIds;
    protected $_name = [
        'failureRequestIds' => 'FailureRequestIds',
        'requestId' => 'RequestId',
        'successRequestIds' => 'SuccessRequestIds',
    ];

    public function validate()
    {
        if (\is_array($this->failureRequestIds)) {
            Model::validateArray($this->failureRequestIds);
        }
        if (\is_array($this->successRequestIds)) {
            Model::validateArray($this->successRequestIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failureRequestIds) {
            if (\is_array($this->failureRequestIds)) {
                $res['FailureRequestIds'] = [];
                $n1 = 0;
                foreach ($this->failureRequestIds as $item1) {
                    $res['FailureRequestIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successRequestIds) {
            if (\is_array($this->successRequestIds)) {
                $res['SuccessRequestIds'] = [];
                $n1 = 0;
                foreach ($this->successRequestIds as $item1) {
                    $res['SuccessRequestIds'][$n1] = $item1;
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
        if (isset($map['FailureRequestIds'])) {
            if (!empty($map['FailureRequestIds'])) {
                $model->failureRequestIds = [];
                $n1 = 0;
                foreach ($map['FailureRequestIds'] as $item1) {
                    $model->failureRequestIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessRequestIds'])) {
            if (!empty($map['SuccessRequestIds'])) {
                $model->successRequestIds = [];
                $n1 = 0;
                foreach ($map['SuccessRequestIds'] as $item1) {
                    $model->successRequestIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
