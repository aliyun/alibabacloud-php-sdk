<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ListVirtualPhysicalConnectionsRequest extends Model
{
    /**
     * @description Vpconn是否被确认
     *
     * @var bool
     */
    public $isConfirmed;

    /**
     * @description 单次查询最大量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 单次查询最大量
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Vpconn的主Pconn
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Vpconn的OwnerUid
     *
     * @var string[]
     */
    public $virtualPhysicalConnectionAliUids;

    /**
     * @description Vpconn的商业状态
     *
     * @var string
     */
    public $virtualPhysicalConnectionBusinessStatus;

    /**
     * @description 根据Vpconn的ID列表过滤
     *
     * @var string[]
     */
    public $virtualPhysicalConnectionIds;

    /**
     * @description Vpconn的状态
     *
     * @var string[]
     */
    public $virtualPhysicalConnectionStatuses;

    /**
     * @description Vpconn的vlanId
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
