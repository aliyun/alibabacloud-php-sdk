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
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $endpointDescription;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string
     */
    public $endpointStatus;

    /**
     * @var string
     */
    public $policyDocument;

    /**
     * @var string
     */
    public $serviceName;

    /**
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
