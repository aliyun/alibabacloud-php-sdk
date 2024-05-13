<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressResponseBody;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressResponseBody\instanceList\ipAddressConfig;
use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example i-bp1cb6x80tfgocid****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example launch-advisor-2021****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The DDoS mitigation status of the instance. Valid values:
     *
     *   **normal**: normal
     *   **abnormal**: under DDoS attacks
     *
     * @example normal
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **ecs**: ECS instance
     *   **slb**: SLB instance
     *   **eip**: EIP
     *
     * @example ecs
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description An array that consists of the details of the asset.
     *
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
