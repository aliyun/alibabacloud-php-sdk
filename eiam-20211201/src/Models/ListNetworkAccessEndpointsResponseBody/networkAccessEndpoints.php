<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessEndpointsResponseBody;

use AlibabaCloud\Tea\Model;

class networkAccessEndpoints extends Model
{
    /**
     * @description 专属网络端点创建时间，Unix时间戳格式，单位为毫秒。
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 实例ID。
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 专属网络端点ID。
     *
     * @example nae_examplexxx
     *
     * @var string
     */
    public $networkAccessEndpointId;

    /**
     * @description 专属网络端点名称。
     *
     * @example xx业务VPC访问端点
     *
     * @var string
     */
    public $networkAccessEndpointName;

    /**
     * @description 专属网络端点连接的类型。
     *
     * @example private
     *
     * @var string
     */
    public $networkAccessEndpointType;

    /**
     * @description 专属网络端点使用的安全组ID。
     *
     * @example sg-examplexxx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description 专属网络端点状态。
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description 专属网络端点最近更新时间，Unix时间戳格式，单位为毫秒。
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description 专属网络端点连接的指定vSwitch列表。
     *
     * @example vsw-examplexxx
     *
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description 专属网络端点连接的VpcID。
     *
     * @example vpc-examplexxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description 专属网络端点连接的Vpc所属地域。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'createTime'                => 'CreateTime',
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAccessEndpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
                $model->vSwitchIds = $map['VSwitchIds'];
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
