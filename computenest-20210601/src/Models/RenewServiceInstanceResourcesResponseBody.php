<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResourcesResponseBody\failureDetails;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResourcesResponseBody\renewalResult;

class RenewServiceInstanceResourcesResponseBody extends Model
{
    /**
     * @var failureDetails[]
     */
    public $failureDetails;

    /**
     * @var renewalResult
     */
    public $renewalResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failureDetails' => 'FailureDetails',
        'renewalResult' => 'RenewalResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->failureDetails)) {
            Model::validateArray($this->failureDetails);
        }
        if (null !== $this->renewalResult) {
            $this->renewalResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failureDetails) {
            if (\is_array($this->failureDetails)) {
                $res['FailureDetails'] = [];
                $n1 = 0;
                foreach ($this->failureDetails as $item1) {
                    $res['FailureDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->renewalResult) {
            $res['RenewalResult'] = null !== $this->renewalResult ? $this->renewalResult->toArray($noStream) : $this->renewalResult;
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
        if (isset($map['FailureDetails'])) {
            if (!empty($map['FailureDetails'])) {
                $model->failureDetails = [];
                $n1 = 0;
                foreach ($map['FailureDetails'] as $item1) {
                    $model->failureDetails[$n1] = failureDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RenewalResult'])) {
            $model->renewalResult = renewalResult::fromMap($map['RenewalResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
