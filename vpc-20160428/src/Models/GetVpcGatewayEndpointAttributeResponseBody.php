<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class GetVpcGatewayEndpointAttributeResponseBody extends Model
{
    /**
     * @example 2021-08-27T01:58:37Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example test
     *
     * @var string
     */
    public $endpointDescription;

    /**
     * @example vpce-bp1w1dmdqjpwul0v3****
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
     * @example {"Version" : "1",   "Statement" : [ {     "Effect" : "Allow",     "Resource" : [ "*" ],     "Action" : [ "*" ],     "Principal" : [ "*" ]   } ] }
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @example A1122D0F-7B3B-5445-BB19-17F27F97FE1C
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $routeTables;

    /**
     * @example com.aliyun.cn-hangzhou.oss
     *
     * @var string
     */
    public $serviceName;

    /**
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
        'routeTables'         => 'RouteTables',
        'serviceName'         => 'ServiceName',
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
        if (null !== $this->routeTables) {
            $res['RouteTables'] = $this->routeTables;
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
        if (isset($map['RouteTables'])) {
            if (!empty($map['RouteTables'])) {
                $model->routeTables = $map['RouteTables'];
            }
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
