<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ContinueDeployServiceInstanceResponseBody\dryRunResult;
use AlibabaCloud\Tea\Model;

class ContinueDeployServiceInstanceResponseBody extends Model
{
    /**
     * @var dryRunResult
     */
    public $dryRunResult;

    /**
     * @example 82DF27ED-E538-5AC0-A11C-39334A873189
     *
     * @var string
     */
    public $requestId;

    /**
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'dryRunResult'      => 'DryRunResult',
        'requestId'         => 'RequestId',
        'serviceInstanceId' => 'ServiceInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRunResult) {
            $res['DryRunResult'] = null !== $this->dryRunResult ? $this->dryRunResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContinueDeployServiceInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRunResult'])) {
            $model->dryRunResult = dryRunResult::fromMap($map['DryRunResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        return $model;
    }
}
