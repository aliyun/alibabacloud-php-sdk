<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceResponseBody\dryRunResult;

class CreateServiceResponseBody extends Model
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
    public $serviceId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'dryRunResult' => 'DryRunResult',
        'requestId'    => 'RequestId',
        'serviceId'    => 'ServiceId',
        'status'       => 'Status',
        'version'      => 'Version',
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

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
