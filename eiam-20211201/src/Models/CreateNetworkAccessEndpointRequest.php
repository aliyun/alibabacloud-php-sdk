<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkAccessEndpointRequest extends Model
{
    /**
     * @description 保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。
     *
     * @example client-token-example
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description IDaaS EIAM实例的ID。
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 专属网络端点名称。
     *
     * @example xx业务VPC访问端点
     *
     * @var string
     */
    public $networkAccessEndpointName;

    /**
     * @description 专属网络端点连接的指定vSwitch。
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
     * @description 专属网络端点连接的VpcID所属地域，该地域取值必须在ListNetworkAccessEndpointAvailableRegions接口中返回。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'clientToken'               => 'ClientToken',
        'instanceId'                => 'InstanceId',
        'networkAccessEndpointName' => 'NetworkAccessEndpointName',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkAccessEndpointName) {
            $res['NetworkAccessEndpointName'] = $this->networkAccessEndpointName;
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
     * @return CreateNetworkAccessEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkAccessEndpointName'])) {
            $model->networkAccessEndpointName = $map['NetworkAccessEndpointName'];
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
