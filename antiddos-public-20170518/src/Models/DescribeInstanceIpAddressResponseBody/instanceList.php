<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressResponseBody\instanceList\ipAddressConfig;

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
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceStatus' => 'InstanceStatus',
        'instanceType' => 'InstanceType',
        'ipAddressConfig' => 'IpAddressConfig',
    ];

    public function validate()
    {
        if (\is_array($this->ipAddressConfig)) {
            Model::validateArray($this->ipAddressConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ipAddressConfig)) {
                $res['IpAddressConfig'] = [];
                $n1 = 0;
                foreach ($this->ipAddressConfig as $item1) {
                    $res['IpAddressConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['IpAddressConfig'] as $item1) {
                    $model->ipAddressConfig[$n1++] = ipAddressConfig::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
