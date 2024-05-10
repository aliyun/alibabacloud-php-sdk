<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsRequest\tags;
use AlibabaCloud\Tea\Model;

class ListVirtualPhysicalConnectionsRequest extends Model
{
    /**
     * @description Specifies whether the hosted connection is accepted by the tenant. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isConfirmed;

    /**
     * @description The number of entries per page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example dd20****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the Express Connect circuit over which the hosted connections are created.
     *
     * Express Connect circuits in this topic refer to Express Connect circuits over which hosted connections are created.
     * @example pc-bp1ciz7ekd2grn1as****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description The region ID of the hosted connection.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the hosted connection belongs.
     *
     * @example rg-acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The information about the Alibaba Cloud account that owns the hosted connection.
     *
     * @example 189xxx
     *
     * @var string[]
     */
    public $virtualPhysicalConnectionAliUids;

    /**
     * @description The business status of the hosted connection. Valid values:
     *
     *   **Normal**
     *   **FinancialLocked**
     *   **SecurityLocked**
     *
     * @example Normal
     *
     * @var string
     */
    public $virtualPhysicalConnectionBusinessStatus;

    /**
     * @description The information about the hosted connection.
     *
     * @example pc-xxx
     *
     * @var string[]
     */
    public $virtualPhysicalConnectionIds;

    /**
     * @description The business status of the hosted connection.
     *
     * @example pc-xxx
     *
     * @var string[]
     */
    public $virtualPhysicalConnectionStatuses;

    /**
     * @description The VLAN ID of the hosted connection.
     *
     * @example pc-xxx
     *
     * @var string[]
     */
    public $vlanIds;
    protected $_name = [
        'isConfirmed'                             => 'IsConfirmed',
        'maxResults'                              => 'MaxResults',
        'nextToken'                               => 'NextToken',
        'physicalConnectionId'                    => 'PhysicalConnectionId',
        'regionId'                                => 'RegionId',
        'resourceGroupId'                         => 'ResourceGroupId',
        'tags'                                    => 'Tags',
        'virtualPhysicalConnectionAliUids'        => 'VirtualPhysicalConnectionAliUids',
        'virtualPhysicalConnectionBusinessStatus' => 'VirtualPhysicalConnectionBusinessStatus',
        'virtualPhysicalConnectionIds'            => 'VirtualPhysicalConnectionIds',
        'virtualPhysicalConnectionStatuses'       => 'VirtualPhysicalConnectionStatuses',
        'vlanIds'                                 => 'VlanIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isConfirmed) {
            $res['IsConfirmed'] = $this->isConfirmed;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->virtualPhysicalConnectionAliUids) {
            $res['VirtualPhysicalConnectionAliUids'] = $this->virtualPhysicalConnectionAliUids;
        }
        if (null !== $this->virtualPhysicalConnectionBusinessStatus) {
            $res['VirtualPhysicalConnectionBusinessStatus'] = $this->virtualPhysicalConnectionBusinessStatus;
        }
        if (null !== $this->virtualPhysicalConnectionIds) {
            $res['VirtualPhysicalConnectionIds'] = $this->virtualPhysicalConnectionIds;
        }
        if (null !== $this->virtualPhysicalConnectionStatuses) {
            $res['VirtualPhysicalConnectionStatuses'] = $this->virtualPhysicalConnectionStatuses;
        }
        if (null !== $this->vlanIds) {
            $res['VlanIds'] = $this->vlanIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVirtualPhysicalConnectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsConfirmed'])) {
            $model->isConfirmed = $map['IsConfirmed'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['VirtualPhysicalConnectionAliUids'])) {
            if (!empty($map['VirtualPhysicalConnectionAliUids'])) {
                $model->virtualPhysicalConnectionAliUids = $map['VirtualPhysicalConnectionAliUids'];
            }
        }
        if (isset($map['VirtualPhysicalConnectionBusinessStatus'])) {
            $model->virtualPhysicalConnectionBusinessStatus = $map['VirtualPhysicalConnectionBusinessStatus'];
        }
        if (isset($map['VirtualPhysicalConnectionIds'])) {
            if (!empty($map['VirtualPhysicalConnectionIds'])) {
                $model->virtualPhysicalConnectionIds = $map['VirtualPhysicalConnectionIds'];
            }
        }
        if (isset($map['VirtualPhysicalConnectionStatuses'])) {
            if (!empty($map['VirtualPhysicalConnectionStatuses'])) {
                $model->virtualPhysicalConnectionStatuses = $map['VirtualPhysicalConnectionStatuses'];
            }
        }
        if (isset($map['VlanIds'])) {
            if (!empty($map['VlanIds'])) {
                $model->vlanIds = $map['VlanIds'];
            }
        }

        return $model;
    }
}
