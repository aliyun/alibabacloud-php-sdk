<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionRequest;

use AlibabaCloud\Dara\Model;

class networkInterface extends Model
{
    /**
     * @var bool
     */
    public $deleteOnRelease;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var string
     */
    public $networkInterfaceName;
    /**
     * @var string
     */
    public $networkInterfaceTrafficMode;
    /**
     * @var string
     */
    public $primaryIpAddress;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
     * @var string[]
     */
    public $securityGroupIds;
    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'deleteOnRelease'             => 'DeleteOnRelease',
        'description'                 => 'Description',
        'instanceType'                => 'InstanceType',
        'networkInterfaceName'        => 'NetworkInterfaceName',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'primaryIpAddress'            => 'PrimaryIpAddress',
        'securityGroupId'             => 'SecurityGroupId',
        'securityGroupIds'            => 'SecurityGroupIds',
        'vSwitchId'                   => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteOnRelease) {
            $res['DeleteOnRelease'] = $this->deleteOnRelease;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }

        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }

        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1                      = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['DeleteOnRelease'])) {
            $model->deleteOnRelease = $map['DeleteOnRelease'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }

        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }

        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1                      = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
