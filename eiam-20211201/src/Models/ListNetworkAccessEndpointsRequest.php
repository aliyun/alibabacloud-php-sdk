<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListNetworkAccessEndpointsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $networkAccessEndpointStatus;
    /**
     * @var string
     */
    public $networkAccessEndpointType;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $vpcId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
