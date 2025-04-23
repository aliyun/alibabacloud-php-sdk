<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;

class GetIfEcsTypeSupportHtConfigResponseBody extends Model
{
    /**
     * @var bool
     */
    public $defaultHtEnabled;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $supportHtConfig;
    protected $_name = [
        'defaultHtEnabled' => 'DefaultHtEnabled',
        'instanceType' => 'InstanceType',
        'requestId' => 'RequestId',
        'supportHtConfig' => 'SupportHtConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
