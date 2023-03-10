<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcGatewayEndpointsResponseBody;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @var string[]
     */
    public $associatedRouteTables;

    /**
     * @example 2021-09-08T08:43:04Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example test_description
     *
     * @var string
     */
    public $endpointDescription;

    /**
     * @example vpce-bp1i1212ss2whuwyw****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @example test
     *
     * @var string
     */
    public $endpointName;

    /**
     * @example Created
     *
     * @var string
     */
    public $endpointStatus;

    /**
     * @example {\n  \"Version\": \"1\",\n  \"Statement\": [\n    {\n      \"Effect\": \"Allow\",\n      \"Action\": \"*\",\n      \"Principal\": \"*\",\n      \"Resource\": \"*\"\n    }\n  ]\n}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @example com.aliyun.cn-hangzhou.oss
     *
     * @var string
     */
    public $serviceName;

    /**
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
        'serviceName'           => 'ServiceName',
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
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
