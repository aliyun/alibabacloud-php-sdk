<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class LaunchServiceResponseBody extends Model
{
    /**
     * @example 4DB0F536-B3BE-4F0D-BD29-E83FB56D550C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example PublishNewVersion
     *
     * @var string
     */
    public $serviceLaunchResultType;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'requestId'               => 'RequestId',
        'serviceLaunchResultType' => 'ServiceLaunchResultType',
        'version'                 => 'Version',
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
        if (null !== $this->serviceLaunchResultType) {
            $res['ServiceLaunchResultType'] = $this->serviceLaunchResultType;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LaunchServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceLaunchResultType'])) {
            $model->serviceLaunchResultType = $map['ServiceLaunchResultType'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
