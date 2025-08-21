<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DisassociateRenderingProjectInstancesResponseBody\failedInstances;
use AlibabaCloud\SDK\Vs\V20181212\Models\DisassociateRenderingProjectInstancesResponseBody\successInstances;

class DisassociateRenderingProjectInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $failedInstanceCount;

    /**
     * @var failedInstances[]
     */
    public $failedInstances;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $successInstanceCount;

    /**
     * @var successInstances[]
     */
    public $successInstances;
    protected $_name = [
        'failedInstanceCount' => 'FailedInstanceCount',
        'failedInstances' => 'FailedInstances',
        'requestId' => 'RequestId',
        'successInstanceCount' => 'SuccessInstanceCount',
        'successInstances' => 'SuccessInstances',
    ];

    public function validate()
    {
        if (\is_array($this->failedInstances)) {
            Model::validateArray($this->failedInstances);
        }
        if (\is_array($this->successInstances)) {
            Model::validateArray($this->successInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedInstanceCount) {
            $res['FailedInstanceCount'] = $this->failedInstanceCount;
        }

        if (null !== $this->failedInstances) {
            if (\is_array($this->failedInstances)) {
                $res['FailedInstances'] = [];
                $n1 = 0;
                foreach ($this->failedInstances as $item1) {
                    $res['FailedInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successInstanceCount) {
            $res['SuccessInstanceCount'] = $this->successInstanceCount;
        }

        if (null !== $this->successInstances) {
            if (\is_array($this->successInstances)) {
                $res['SuccessInstances'] = [];
                $n1 = 0;
                foreach ($this->successInstances as $item1) {
                    $res['SuccessInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailedInstanceCount'])) {
            $model->failedInstanceCount = $map['FailedInstanceCount'];
        }

        if (isset($map['FailedInstances'])) {
            if (!empty($map['FailedInstances'])) {
                $model->failedInstances = [];
                $n1 = 0;
                foreach ($map['FailedInstances'] as $item1) {
                    $model->failedInstances[$n1] = failedInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessInstanceCount'])) {
            $model->successInstanceCount = $map['SuccessInstanceCount'];
        }

        if (isset($map['SuccessInstances'])) {
            if (!empty($map['SuccessInstances'])) {
                $model->successInstances = [];
                $n1 = 0;
                foreach ($map['SuccessInstances'] as $item1) {
                    $model->successInstances[$n1] = successInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
