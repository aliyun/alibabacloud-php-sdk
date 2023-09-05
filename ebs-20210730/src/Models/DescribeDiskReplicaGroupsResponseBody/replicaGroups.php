<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsResponseBody;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsResponseBody\replicaGroups\tags;
use AlibabaCloud\Tea\Model;

class replicaGroups extends Model
{
    /**
     * @description The bandwidth value. Unit: Mbit/s. This parameter is unavailable and has a system-preset value.
     *
     * @example 0
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The description of the replication pair-consistent group.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the region in which the secondary site is deployed.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $destinationRegionId;

    /**
     * @description The ID of the zone in which the secondary site is deployed.
     *
     * @example cn-shanghai-e
     *
     * @var string
     */
    public $destinationZoneId;

    /**
     * @description The name of the replication pair-consistent group.
     *
     * @example myreplicagrouptest
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The time when data was last replicated from the primary disks to the secondary disks in the replication pair-consistent group. The value of this parameter is a timestamp. Unit: seconds.
     *
     * @example 1637835114
     *
     * @var int
     */
    public $lastRecoverPoint;

    /**
     * @description The IDs of the replications pairs that belong to the replication pair-consistent group.
     *
     * @var int[][]
     */
    public $pairIds;

    /**
     * @description The number of replications pairs that belong to the replication pair-consistent group.
     *
     * @example 2
     *
     * @var int
     */
    public $pairNumber;

    /**
     * @description The initial source region (primary region) of the replication pair-consistent group.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $primaryRegion;

    /**
     * @description The initial source zone (primary zone) of the replication pair-consistent group.
     *
     * @example cn-beijing-h
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @description The recovery point objective (RPO) of the replication pair-consistent group. Unit: seconds.
     *
     * @example 180
     *
     * @var int
     */
    public $RPO;

    /**
     * @description The ID of the replication pair-consistent group.
     *
     * @example pg-myreplica****
     *
     * @var string
     */
    public $replicaGroupId;

    /**
     * @description The ID of the resource group to which the replication group belongs.
     *
     * @example rg-aek2a*******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the site from which the information of the replication pair and replication pair-consistent group is obtained. Valid values:
     *
     *   production: primary site
     *   backup: secondary site
     *
     * @example production
     *
     * @var string
     */
    public $site;

    /**
     * @description The ID of the region in which the primary site is deployed.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $sourceRegionId;

    /**
     * @description The ID of the zone in which the primary site is deployed.
     *
     * @example cn-beijing-f
     *
     * @var string
     */
    public $sourceZoneId;

    /**
     * @description The initial destination region (secondary region) of the replication pair-consistent group.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $standbyRegion;

    /**
     * @description The initial destination zone (secondary zone) of the replication pair-consistent group.
     *
     * @example cn-shanghai-e
     *
     * @var string
     */
    public $standbyZone;

    /**
     * @description The state of the replication pair-consistent group. Valid values:
     *
     *   invalid: The replication pair-consistent group is invalid, which indicates that abnormal replication pairs are present in the replication pair-consistent group.
     *   creating: The replication pair-consistent group is being created.
     *   created: The replication pair-consistent group is created.
     *   create_failed: The replication pair-consistent group cannot be created.
     *   manual_syncing: Data is being manually synchronized between the disks in the replication pair-consistent group. The first time data is being manually synchronized between the disks in a replication pair-consistent group, the replication pair-consistent group is in this state.
     *   syncing: Data is being synchronized between the disks in the replication pair-consistent group. While data is being asynchronously replicated from the primary disks to the secondary disks not for the first time, the replication pair-consistent group is in this state.
     *   normal: The replication pair-consistent group is working as expected. When the system finishes replicating data from the primary disks to the secondary disks within the current replication cycle, the replication pair-consistent group enters this state.
     *   stopping: The replication pair-consistent group is being stopped.
     *   stopped: The replication pair-consistent group is stopped.
     *   stop_failed: The replication pair-consistent group cannot be stopped.
     *   failovering: A failover is being performed.
     *   failovered: A failover is performed.
     *   failover_failed: A failover cannot be performed.
     *   reprotecting: A reverse replication is being performed.
     *   reprotect_failed: A reverse replication cannot be performed.
     *   deleting: The replication pair-consistent group is being deleted.
     *   delete_failed: The replication pair-consistent group cannot be deleted.
     *   deleted: The replication pair-consistent group is deleted.
     *
     * @example created
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the replication pair.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'bandwidth'           => 'Bandwidth',
        'description'         => 'Description',
        'destinationRegionId' => 'DestinationRegionId',
        'destinationZoneId'   => 'DestinationZoneId',
        'groupName'           => 'GroupName',
        'lastRecoverPoint'    => 'LastRecoverPoint',
        'pairIds'             => 'PairIds',
        'pairNumber'          => 'PairNumber',
        'primaryRegion'       => 'PrimaryRegion',
        'primaryZone'         => 'PrimaryZone',
        'RPO'                 => 'RPO',
        'replicaGroupId'      => 'ReplicaGroupId',
        'resourceGroupId'     => 'ResourceGroupId',
        'site'                => 'Site',
        'sourceRegionId'      => 'SourceRegionId',
        'sourceZoneId'        => 'SourceZoneId',
        'standbyRegion'       => 'StandbyRegion',
        'standbyZone'         => 'StandbyZone',
        'status'              => 'Status',
        'tags'                => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }
        if (null !== $this->destinationZoneId) {
            $res['DestinationZoneId'] = $this->destinationZoneId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->lastRecoverPoint) {
            $res['LastRecoverPoint'] = $this->lastRecoverPoint;
        }
        if (null !== $this->pairIds) {
            $res['PairIds'] = $this->pairIds;
        }
        if (null !== $this->pairNumber) {
            $res['PairNumber'] = $this->pairNumber;
        }
        if (null !== $this->primaryRegion) {
            $res['PrimaryRegion'] = $this->primaryRegion;
        }
        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
        }
        if (null !== $this->RPO) {
            $res['RPO'] = $this->RPO;
        }
        if (null !== $this->replicaGroupId) {
            $res['ReplicaGroupId'] = $this->replicaGroupId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }
        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }
        if (null !== $this->sourceZoneId) {
            $res['SourceZoneId'] = $this->sourceZoneId;
        }
        if (null !== $this->standbyRegion) {
            $res['StandbyRegion'] = $this->standbyRegion;
        }
        if (null !== $this->standbyZone) {
            $res['StandbyZone'] = $this->standbyZone;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replicaGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }
        if (isset($map['DestinationZoneId'])) {
            $model->destinationZoneId = $map['DestinationZoneId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['LastRecoverPoint'])) {
            $model->lastRecoverPoint = $map['LastRecoverPoint'];
        }
        if (isset($map['PairIds'])) {
            if (!empty($map['PairIds'])) {
                $model->pairIds = $map['PairIds'];
            }
        }
        if (isset($map['PairNumber'])) {
            $model->pairNumber = $map['PairNumber'];
        }
        if (isset($map['PrimaryRegion'])) {
            $model->primaryRegion = $map['PrimaryRegion'];
        }
        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }
        if (isset($map['RPO'])) {
            $model->RPO = $map['RPO'];
        }
        if (isset($map['ReplicaGroupId'])) {
            $model->replicaGroupId = $map['ReplicaGroupId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }
        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }
        if (isset($map['SourceZoneId'])) {
            $model->sourceZoneId = $map['SourceZoneId'];
        }
        if (isset($map['StandbyRegion'])) {
            $model->standbyRegion = $map['StandbyRegion'];
        }
        if (isset($map['StandbyZone'])) {
            $model->standbyZone = $map['StandbyZone'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        return $model;
    }
}
