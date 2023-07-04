<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcGatewayEndpointResponseBody extends Model
{
    /**
     * @example 2021-08-27T01:58:37Z
     *
     * @var string
     */
    public $creationTime;

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
     * @example 62CFC815-E08A-5CF4-92D1-54273EC9E406
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example com.aliyun.cn-hangzhou.oss
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'endpointId'      => 'EndpointId',
        'endpointName'    => 'EndpointName',
        'requestId'       => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceName'     => 'ServiceName',
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
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcGatewayEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
