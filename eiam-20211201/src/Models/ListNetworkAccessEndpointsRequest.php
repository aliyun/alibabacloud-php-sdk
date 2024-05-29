<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ListNetworkAccessEndpointsRequest extends Model
{
    /**
     * @description IDaaS EIAM实例的ID。
     *
     * This parameter is required.
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 分页查询时每页行数。默认值为20，最大值为100。
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 专属网络端点连接的状态。NetworkAccessEndpointType取值为shared时不生效。
     *
     * @example running
     *
     * @var string
     */
    public $networkAccessEndpointStatus;

    /**
     * @description 专属网络端点连接的类型。取值可选范围：1. private - 专属网络端点；2. shared - 共享网络端点
     *
     * @example private
     *
     * @var string
     */
    public $networkAccessEndpointType;

    /**
     * @description 查询凭证（Token），取值为上一次API调用返回的NextToken参数值。
     *
     * @example NTxxxxxexample
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 专属网络端点连接的Vpc ID。NetworkAccessEndpointType取值为shared时不生效。
     *
     * @example vpc-examplexxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description 专属网络端点连接的Vpc所属地域，该地域取值必须在ListNetworkAccessEndpointAvailableRegions接口中返回。NetworkAccessEndpointType取值为shared时不生效。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'instanceId'                  => 'InstanceId',
        'maxResults'                  => 'MaxResults',
        'networkAccessEndpointStatus' => 'NetworkAccessEndpointStatus',
        'networkAccessEndpointType'   => 'NetworkAccessEndpointType',
        'nextToken'                   => 'NextToken',
        'vpcId'                       => 'VpcId',
        'vpcRegionId'                 => 'VpcRegionId',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->networkAccessEndpointStatus) {
            $res['NetworkAccessEndpointStatus'] = $this->networkAccessEndpointStatus;
        }
        if (null !== $this->networkAccessEndpointType) {
            $res['NetworkAccessEndpointType'] = $this->networkAccessEndpointType;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListNetworkAccessEndpointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetworkAccessEndpointStatus'])) {
            $model->networkAccessEndpointStatus = $map['NetworkAccessEndpointStatus'];
        }
        if (isset($map['NetworkAccessEndpointType'])) {
            $model->networkAccessEndpointType = $map['NetworkAccessEndpointType'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
