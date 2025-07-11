<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\AssociateRenderingProjectInstancesResponseBody\failedInstances;
use AlibabaCloud\SDK\Vs\V20181212\Models\AssociateRenderingProjectInstancesResponseBody\successInstances;
use AlibabaCloud\Tea\Model;

class AssociateRenderingProjectInstancesResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $failedInstanceCount;

    /**
     * @var failedInstances[]
     */
    public $failedInstances;

    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 5
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedInstanceCount) {
            $res['FailedInstanceCount'] = $this->failedInstanceCount;
        }
        if (null !== $this->failedInstances) {
            $res['FailedInstances'] = [];
            if (null !== $this->failedInstances && \is_array($this->failedInstances)) {
                $n = 0;
                foreach ($this->failedInstances as $item) {
                    $res['FailedInstances'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['SuccessInstances'] = [];
            if (null !== $this->successInstances && \is_array($this->successInstances)) {
                $n = 0;
                foreach ($this->successInstances as $item) {
                    $res['SuccessInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateRenderingProjectInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedInstanceCount'])) {
            $model->failedInstanceCount = $map['FailedInstanceCount'];
        }
        if (isset($map['FailedInstances'])) {
            if (!empty($map['FailedInstances'])) {
                $model->failedInstances = [];
                $n = 0;
                foreach ($map['FailedInstances'] as $item) {
                    $model->failedInstances[$n++] = null !== $item ? failedInstances::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['SuccessInstances'] as $item) {
                    $model->successInstances[$n++] = null !== $item ? successInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
