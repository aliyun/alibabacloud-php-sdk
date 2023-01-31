<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsRequest\tags;
use AlibabaCloud\Tea\Model;

class ListVirtualPhysicalConnectionsRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isConfirmed;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example dd20****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example pc-bp1ciz7ekd2grn1as****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 189xxx
     *
     * @var string[]
     */
    public $virtualPhysicalConnectionAliUids;

    /**
     * @example Normal
     *
     * @var string
     */
    public $virtualPhysicalConnectionBusinessStatus;

    /**
     * @example pc-xxx
     *
     * @var string[]
     */
    public $virtualPhysicalConnectionIds;

    /**
     * @example pc-xxx
     *
     * @var string[]
     */
    public $virtualPhysicalConnectionStatuses;

    /**
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
