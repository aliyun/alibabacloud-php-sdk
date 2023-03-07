<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetIfEcsTypeSupportHtConfigResponseBody extends Model
{
    /**
     * @description Indicates whether Hyper-Threading is enabled by default. Valid values:
     *
     *   true: Hyper-Threading is enabled by default.
     *
     *   false: Hyper-Threading is disabled by default
     *
     * > By default, Hyper-Threading is not enabled for the SCC specification family, while Hyper-Threading is enabled for other specification families by default.
     * @example true
     *
     * @var bool
     */
    public $defaultHtEnabled;

    /**
     * @description The instance type of the ECS instance.
     *
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ID of the request.
     *
     * @example 80CA7A93-7291-4402-B63D-86DF334E0A1F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether hyper-threading is supported. Valid values:
     *
     *   true: Hyper-Threading is supported.
     *   false: Hyper-Threading is not supported.
     *
     * @example true
     *
     * @var bool
     */
    public $supportHtConfig;
    protected $_name = [
        'defaultHtEnabled' => 'DefaultHtEnabled',
        'instanceType'     => 'InstanceType',
        'requestId'        => 'RequestId',
        'supportHtConfig'  => 'SupportHtConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultHtEnabled) {
            $res['DefaultHtEnabled'] = $this->defaultHtEnabled;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportHtConfig) {
            $res['SupportHtConfig'] = $this->supportHtConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIfEcsTypeSupportHtConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultHtEnabled'])) {
            $model->defaultHtEnabled = $map['DefaultHtEnabled'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportHtConfig'])) {
            $model->supportHtConfig = $map['SupportHtConfig'];
        }

        return $model;
    }
}
