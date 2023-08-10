<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessPathsResponseBody;

use AlibabaCloud\Tea\Model;

class networkAccessPaths extends Model
{
    /**
     * @description 专属网络端点访问路径创建时间，Unix时间戳格式，单位为毫秒。
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
     * @description 专属网络端点访问路径ID。
     *
     * @example nap_examplexxx
     *
     * @var string
     */
    public $networkAccessPathId;

    /**
     * @description 专属网络端点访问路径使用的ENI ID。
     *
     * @example eni-examplexxx
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description 专属网络端点访问路径使用的ENI私网地址。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description 专属网络端点访问路径状态。
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description 专属网络端点访问路径最近更新时间，Unix时间戳格式，单位为毫秒。
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description 专属网络端点访问路径的ENI归属的交换机ID。
     *
     * @example vsw-examplexxx
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'createTime'              => 'CreateTime',
        'instanceId'              => 'InstanceId',
        'networkAccessEndpointId' => 'NetworkAccessEndpointId',
        'networkAccessPathId'     => 'NetworkAccessPathId',
        'networkInterfaceId'      => 'NetworkInterfaceId',
        'privateIpAddress'        => 'PrivateIpAddress',
        'status'                  => 'Status',
        'updateTime'              => 'UpdateTime',
        'vSwitchId'               => 'VSwitchId',
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
        if (null !== $this->networkAccessPathId) {
            $res['NetworkAccessPathId'] = $this->networkAccessPathId;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAccessPaths
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
        if (isset($map['NetworkAccessPathId'])) {
            $model->networkAccessPathId = $map['NetworkAccessPathId'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
