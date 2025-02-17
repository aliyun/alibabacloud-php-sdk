<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ContinueDeployServiceInstanceResponseBody\dryRunResult;

class ContinueDeployServiceInstanceResponseBody extends Model
{
    /**
     * @var dryRunResult
     */
    public $dryRunResult;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->dryRunResult) {
            $this->dryRunResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRunResult) {
            $res['DryRunResult'] = null !== $this->dryRunResult ? $this->dryRunResult->toArray($noStream) : $this->dryRunResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
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
