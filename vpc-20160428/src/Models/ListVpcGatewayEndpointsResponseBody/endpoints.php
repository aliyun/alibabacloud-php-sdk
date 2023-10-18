<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcGatewayEndpointsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcGatewayEndpointsResponseBody\endpoints\tags;
use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The ID of the route table associated with the gateway endpoint.
     *
     * @var string[]
     */
    public $associatedRouteTables;

    /**
     * @description The time when the endpoint was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-09-08T08:43:04Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the gateway endpoint.
     *
     * @example test_description
     *
     * @var string
     */
    public $endpointDescription;

    /**
     * @description The ID of the gateway endpoint.
     *
     * @example vpce-bp1i1212ss2whuwyw****
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
     * For more information about the syntax and structure of the access policy, see [Policy syntax and structure](~~93739~~).
     * @example {\n  \"Version\": \"1\",\n  \"Statement\": [\n    {\n      \"Effect\": \"Allow\",\n      \"Action\": \"*\",\n      \"Principal\": \"*\",\n      \"Resource\": \"*\"\n    }\n  ]\n}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The ID of the resource group to which the gateway endpoint belongs.
     *
     * @example rg-acfmxvfvazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

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
     * @example vpc-bp1gsk7h12ew7oegk****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'associatedRouteTables' => 'AssociatedRouteTables',
        'creationTime'          => 'CreationTime',
        'endpointDescription'   => 'EndpointDescription',
        'endpointId'            => 'EndpointId',
        'endpointName'          => 'EndpointName',
        'endpointStatus'        => 'EndpointStatus',
        'policyDocument'        => 'PolicyDocument',
        'resourceGroupId'       => 'ResourceGroupId',
        'serviceName'           => 'ServiceName',
        'tags'                  => 'Tags',
        'vpcId'                 => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedRouteTables) {
            $res['AssociatedRouteTables'] = $this->associatedRouteTables;
        }
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedRouteTables'])) {
            if (!empty($map['AssociatedRouteTables'])) {
                $model->associatedRouteTables = $map['AssociatedRouteTables'];
            }
        }
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
