<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DetachAppPolicyFromIdentityResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedPolicyNames;

    /**
     * @var string[]
     */
    public $nonExistPolicyNames;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedPolicyNames' => 'FailedPolicyNames',
        'nonExistPolicyNames' => 'NonExistPolicyNames',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->failedPolicyNames)) {
            Model::validateArray($this->failedPolicyNames);
        }
        if (\is_array($this->nonExistPolicyNames)) {
            Model::validateArray($this->nonExistPolicyNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedPolicyNames) {
            if (\is_array($this->failedPolicyNames)) {
                $res['FailedPolicyNames'] = [];
                $n1 = 0;
                foreach ($this->failedPolicyNames as $item1) {
                    $res['FailedPolicyNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nonExistPolicyNames) {
            if (\is_array($this->nonExistPolicyNames)) {
                $res['NonExistPolicyNames'] = [];
                $n1 = 0;
                foreach ($this->nonExistPolicyNames as $item1) {
                    $res['NonExistPolicyNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FailedPolicyNames'])) {
            if (!empty($map['FailedPolicyNames'])) {
                $model->failedPolicyNames = [];
                $n1 = 0;
                foreach ($map['FailedPolicyNames'] as $item1) {
                    $model->failedPolicyNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NonExistPolicyNames'])) {
            if (!empty($map['NonExistPolicyNames'])) {
                $model->nonExistPolicyNames = [];
                $n1 = 0;
                foreach ($map['NonExistPolicyNames'] as $item1) {
                    $model->nonExistPolicyNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
