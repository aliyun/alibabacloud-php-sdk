<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigAlertResponseBody\alertConfig;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigAlertResponseBody\alertGroup;
use AlibabaCloud\Tea\Model;

class DescribeCloudGtmInstanceConfigAlertResponseBody extends Model
{
    /**
     * @var alertConfig
     */
    public $alertConfig;

    /**
     * @var alertGroup
     */
    public $alertGroup;

    /**
     * @example global
     *
     * @var string
     */
    public $alertMode;

    /**
     * @example Config-000**11
     *
     * @var string
     */
    public $configId;

    /**
     * @example gtm-cn-wwo3a3hbz**
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 0F32959D-417B-4D66-8463-68606605E3E2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertConfig' => 'AlertConfig',
        'alertGroup'  => 'AlertGroup',
        'alertMode'   => 'AlertMode',
        'configId'    => 'ConfigId',
        'instanceId'  => 'InstanceId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toMap() : null;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = null !== $this->alertGroup ? $this->alertGroup->toMap() : null;
        }
        if (null !== $this->alertMode) {
            $res['AlertMode'] = $this->alertMode;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudGtmInstanceConfigAlertResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = alertGroup::fromMap($map['AlertGroup']);
        }
        if (isset($map['AlertMode'])) {
            $model->alertMode = $map['AlertMode'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
