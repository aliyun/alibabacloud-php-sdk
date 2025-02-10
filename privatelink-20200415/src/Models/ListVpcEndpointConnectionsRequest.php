<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Dara\Model;

class ListVpcEndpointConnectionsRequest extends Model
{
    /**
     * @var string
     */
    public $connectionStatus;
    /**
     * @var string
     */
    public $endpointId;
    /**
     * @var int
     */
    public $endpointOwnerId;
    /**
     * @var string
     */
    public $eniId;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $replacedResourceId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'connectionStatus'   => 'ConnectionStatus',
        'endpointId'         => 'EndpointId',
        'endpointOwnerId'    => 'EndpointOwnerId',
        'eniId'              => 'EniId',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'regionId'           => 'RegionId',
        'replacedResourceId' => 'ReplacedResourceId',
        'resourceGroupId'    => 'ResourceGroupId',
        'resourceId'         => 'ResourceId',
        'serviceId'          => 'ServiceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointOwnerId) {
            $res['EndpointOwnerId'] = $this->endpointOwnerId;
        }

        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replacedResourceId) {
            $res['ReplacedResourceId'] = $this->replacedResourceId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
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
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['EndpointOwnerId'])) {
            $model->endpointOwnerId = $map['EndpointOwnerId'];
        }

        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReplacedResourceId'])) {
            $model->replacedResourceId = $map['ReplacedResourceId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
