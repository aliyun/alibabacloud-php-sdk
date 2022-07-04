<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressResponseBody;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressResponseBody\instanceList\ipAddressConfig;
use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var ipAddressConfig[]
     */
    public $ipAddressConfig;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'instanceStatus'  => 'InstanceStatus',
        'instanceType'    => 'InstanceType',
        'ipAddressConfig' => 'IpAddressConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipAddressConfig) {
            $res['IpAddressConfig'] = [];
            if (null !== $this->ipAddressConfig && \is_array($this->ipAddressConfig)) {
                $n = 0;
                foreach ($this->ipAddressConfig as $item) {
                    $res['IpAddressConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IpAddressConfig'])) {
            if (!empty($map['IpAddressConfig'])) {
                $model->ipAddressConfig = [];
                $n                      = 0;
                foreach ($map['IpAddressConfig'] as $item) {
                    $model->ipAddressConfig[$n++] = null !== $item ? ipAddressConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
