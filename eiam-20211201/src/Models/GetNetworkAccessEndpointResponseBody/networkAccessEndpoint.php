<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetNetworkAccessEndpointResponseBody;

use AlibabaCloud\Dara\Model;

class networkAccessEndpoint extends Model
{
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string[]
     */
    public $egressPrivateIpAddresses;
    /**
     * @var string[]
     */
    public $egressPublicIpAddresses;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $networkAccessEndpointId;
    /**
     * @var string
     */
    public $networkAccessEndpointName;
    /**
     * @var string
     */
    public $networkAccessEndpointType;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $updateTime;
    /**
     * @var string[]
     */
    public $vSwitchIds;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'createTime'                => 'CreateTime',
        'egressPrivateIpAddresses'  => 'EgressPrivateIpAddresses',
        'egressPublicIpAddresses'   => 'EgressPublicIpAddresses',
        'instanceId'                => 'InstanceId',
        'networkAccessEndpointId'   => 'NetworkAccessEndpointId',
        'networkAccessEndpointName' => 'NetworkAccessEndpointName',
        'networkAccessEndpointType' => 'NetworkAccessEndpointType',
        'securityGroupId'           => 'SecurityGroupId',
        'status'                    => 'Status',
        'updateTime'                => 'UpdateTime',
        'vSwitchIds'                => 'VSwitchIds',
        'vpcId'                     => 'VpcId',
        'vpcRegionId'               => 'VpcRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->egressPrivateIpAddresses)) {
            Model::validateArray($this->egressPrivateIpAddresses);
        }
        if (\is_array($this->egressPublicIpAddresses)) {
            Model::validateArray($this->egressPublicIpAddresses);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->egressPrivateIpAddresses) {
            if (\is_array($this->egressPrivateIpAddresses)) {
                $res['EgressPrivateIpAddresses'] = [];
                $n1                              = 0;
                foreach ($this->egressPrivateIpAddresses as $item1) {
                    $res['EgressPrivateIpAddresses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->egressPublicIpAddresses) {
            if (\is_array($this->egressPublicIpAddresses)) {
                $res['EgressPublicIpAddresses'] = [];
                $n1                             = 0;
                foreach ($this->egressPublicIpAddresses as $item1) {
                    $res['EgressPublicIpAddresses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->networkAccessEndpointId) {
            $res['NetworkAccessEndpointId'] = $this->networkAccessEndpointId;
        }

        if (null !== $this->networkAccessEndpointName) {
            $res['NetworkAccessEndpointName'] = $this->networkAccessEndpointName;
        }

        if (null !== $this->networkAccessEndpointType) {
            $res['NetworkAccessEndpointType'] = $this->networkAccessEndpointType;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1                = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EgressPrivateIpAddresses'])) {
            if (!empty($map['EgressPrivateIpAddresses'])) {
                $model->egressPrivateIpAddresses = [];
                $n1                              = 0;
                foreach ($map['EgressPrivateIpAddresses'] as $item1) {
                    $model->egressPrivateIpAddresses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EgressPublicIpAddresses'])) {
            if (!empty($map['EgressPublicIpAddresses'])) {
                $model->egressPublicIpAddresses = [];
                $n1                             = 0;
                foreach ($map['EgressPublicIpAddresses'] as $item1) {
                    $model->egressPublicIpAddresses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NetworkAccessEndpointId'])) {
            $model->networkAccessEndpointId = $map['NetworkAccessEndpointId'];
        }

        if (isset($map['NetworkAccessEndpointName'])) {
            $model->networkAccessEndpointName = $map['NetworkAccessEndpointName'];
        }

        if (isset($map['NetworkAccessEndpointType'])) {
            $model->networkAccessEndpointType = $map['NetworkAccessEndpointType'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1                = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }

        return $model;
    }
}
