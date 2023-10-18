<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcGatewayEndpointAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetVpcGatewayEndpointAttributeResponseBody extends Model
{
    /**
     * @description The time when the endpoint was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-08-27T01:58:37Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the gateway endpoint.
     *
     * @example test
     *
     * @var string
     */
    public $endpointDescription;

    /**
     * @description The ID of the gateway endpoint.
     *
     * @example vpce-bp1w1dmdqjpwul0v3****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The name of the gateway endpoint.
     *
     * @example test
     *
     * @var string
     */
    public $endpointName;

    /**
     * @description The status of the gateway endpoint. Valid values:
     *
     *   **Creating**
     *   **Created**
     *   **Modifying**
     *   **Associating**
     *   **Dissociating**
     *   **Deleting**
     *
     * @example Created
     *
     * @var string
     */
    public $endpointStatus;

    /**
     * @description The access policy for the cloud service.
     *
     * @example {"Version" : "1",   "Statement" : [ {     "Effect" : "Allow",     "Resource" : [ "*" ],     "Action" : [ "*" ],     "Principal" : [ "*" ]   } ] }
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The request ID.
     *
     * @example A1122D0F-7B3B-5445-BB19-17F27F97FE1C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the gateway endpoint belongs.
     *
     * @example rg-acfmxvfvazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the route table associated with the gateway endpoint.
     *
     * @var string[]
     */
    public $routeTables;

    /**
     * @description The name of the endpoint service.
     *
     * @example com.aliyun.cn-hangzhou.oss
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the gateway endpoint belongs.
     *
     * @example vpc-bp1nh86rugg01zol0****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'creationTime'        => 'CreationTime',
        'endpointDescription' => 'EndpointDescription',
        'endpointId'          => 'EndpointId',
        'endpointName'        => 'EndpointName',
        'endpointStatus'      => 'EndpointStatus',
        'policyDocument'      => 'PolicyDocument',
        'requestId'           => 'RequestId',
        'resourceGroupId'     => 'ResourceGroupId',
        'routeTables'         => 'RouteTables',
        'serviceName'         => 'ServiceName',
        'tags'                => 'Tags',
        'vpcId'               => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->endpointDescription) {
            $res['EndpointDescription'] = $this->endpointDescription;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }
        if (null !== $this->endpointStatus) {
            $res['EndpointStatus'] = $this->endpointStatus;
        }
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routeTables) {
            $res['RouteTables'] = $this->routeTables;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVpcGatewayEndpointAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EndpointDescription'])) {
            $model->endpointDescription = $map['EndpointDescription'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }
        if (isset($map['EndpointStatus'])) {
            $model->endpointStatus = $map['EndpointStatus'];
        }
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RouteTables'])) {
            if (!empty($map['RouteTables'])) {
                $model->routeTables = $map['RouteTables'];
            }
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
