<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceInstanceResponseBody extends Model
{
    /**
     * @example 4DB0F536-B3BE-4F0D-BD29-E83FB56D****
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

    /**
     * @example Created
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'requestId'         => 'RequestId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
