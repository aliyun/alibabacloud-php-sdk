<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetIfEcsTypeSupportHtConfigResponseBody extends Model
{
    /**
     * @var bool
     */
    public $defaultHtEnabled;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $supportHtConfig;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'defaultHtEnabled' => 'DefaultHtEnabled',
        'requestId'        => 'RequestId',
        'supportHtConfig'  => 'SupportHtConfig',
        'instanceType'     => 'InstanceType',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportHtConfig) {
            $res['SupportHtConfig'] = $this->supportHtConfig;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportHtConfig'])) {
            $model->supportHtConfig = $map['SupportHtConfig'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
