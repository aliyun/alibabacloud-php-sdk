<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsResponseBody;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsResponseBody\replicaPairs\tags;
use AlibabaCloud\Tea\Model;

class replicaPairs extends Model
{
    /**
     * @description The bandwidth used to asynchronously replicate data from the primary disk to the secondary disk. Unit: Kbit/s.
     *
     * @example 10240
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The billing method of the replication pair. Valid values:
     *
     *   PREPAY: subscription
     *   POSTPAY: pay-as-you-go
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the replication pair was created. The value of this parameter is a timestamp. Unit: seconds.
     *
     * @example 1649750977
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the replication pair.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the secondary disk.
     *
     * @example d-asdfjl2342kj2l3k4****
     *
     * @var string
     */
    public $destinationDiskId;

    /**
     * @description The region ID of the secondary disk.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $destinationRegion;

    /**
     * @description The zone ID of the secondary disk.
     *
     * @example cn-shanghai-b
     *
     * @var string
     */
    public $destinationZoneId;

    /**
     * @description The time when the replication pair expires. The value of this parameter is a timestamp. Unit: seconds.
     *
     * @example 1649750977
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description The time when data was last replicated from the primary disk to the secondary disk in the replication pair. The value of this parameter is a timestamp. Unit: seconds. 86,400 seconds is equivalent to 24 hours.
     *
     * @example 1649751977
     *
     * @var int
     */
    public $lastRecoverPoint;

    /**
     * @description The name of the replication pair.
     *
     * @example TestReplicaPair
     *
     * @var string
     */
    public $pairName;

    /**
     * @description The initial source region (primary region) of the replication pair.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $primaryRegion;

    /**
     * @description The initial source zone (primary zone) of the replication pair.
     *
     * @example cn-beijing-a
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @description The recovery point objective (RPO) of the replication pair. Unit: seconds.
     *
     * @example 900
     *
     * @var int
     */
    public $RPO;

    /**
     * @description The ID of the replication pair-consistent group to which the replication pair belongs.
     *
     * @example pg-xxxx****
     *
     * @var string
     */
    public $replicaGroupId;

    /**
     * @description The name of the replication pair-consistent group to which the replication pair belongs.
     *
     * @example pg-name****
     *
     * @var string
     */
    public $replicaGroupName;

    /**
     * @description The ID of the replication pair.
     *
     * @example pair-cn-dsa****
     *
     * @var string
     */
    public $replicaPairId;

    /**
     * @description The ID of the resource group to which the replication pair belongs.
     *
     * @example rg-acfmvs*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the site from which the information about the replication pairs and replication pair-consistent group was obtained. Valid values:
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
     * @description The ID of the primary disk.
     *
     * @example d-bp131n0q38u3a4zi****
     *
     * @var string
     */
    public $sourceDiskId;

    /**
     * @description The region ID of the primary disk.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $sourceRegion;

    /**
     * @description The zone ID of the primary disk.
     *
     * @example cn-beijing-a
     *
     * @var string
     */
    public $sourceZoneId;

    /**
     * @description The initial destination region (secondary region) of the replication pair.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $standbyRegion;

    /**
     * @description The initial destination zone (secondary zone) of the replication pair.
     *
     * @example cn-shanghai-b
     *
     * @var string
     */
    public $standbyZone;

    /**
     * @description The status of the replication pair. Valid values:
     *
     *   invalid: The replication pair was invalid. When a replication pair becomes abnormal, it enters this state.
     *   creating: The replication pair was being created.
     *   created: The replication pair was created.
     *   create_failed: The replication pair failed to be created.
     *   initial_syncing: Data was synchronized from the primary disk to the secondary disk for the first time. After a replication pair is created and activated, the replication pair is in this state the first time data is synchronized from the primary disk to the secondary disk.
     *   manual_syncing: Data was being manually synchronized from the primary disk to the secondary disk. After data is manually synchronized from the primary disk to the secondary disk, the replication pair returns to the stopped state. The first time data is manually synchronized from the primary disk to the secondary disk, the replication pair is in the manual_syncing state during the synchronization.
     *   syncing: Data was being synchronized from the primary disk to the secondary disk. When data is being asynchronously replicated from the primary disk to the secondary disk again in subsequent operations, the replication pair is in this state.
     *   normal: The replication pair was working as expected. When the system finishes replicating data from the primary disk to the secondary disk within the current replication cycle, the replication pair enters this state.
     *   stopping: The replication pair was being stopped.
     *   stopped: The replication pair was stopped.
     *   stop_failed: The replication pair failed to be stopped.
     *   failovering: A failover was being performed.
     *   failovered: A failover was performed.
     *   failover_failed: A failover failed to be performed.
     *   reprotecting: A reverse replication was being performed.
     *   reprotect_failed: A reverse replication failed to be performed.
     *   deleting: The replication pair was being deleted.
     *   delete_failed: The replication pair failed to be deleted.
     *   deleted: The replication pair was deleted.
     *
     * @example created
     *
     * @var string
     */
    public $status;

    /**
     * @description The message that describes the state of the replication pair. This parameter has a value when `Status` has a value of invalid or `create_failed`. Valid values:
     *
     *   PrePayOrderExpired: The replication pair has expired.
     *   PostPayOrderCeaseService: The pay-as-you-go replication pair has been stopped due to an overdue payment.
     *   DeviceRemoved: The primary or secondary disk has been deleted.
     *   DeviceKeyChanged: The `DeviceKey` mapping of the primary or secondary disk has changed.
     *   DeviceSizeChanged: The `DeviceSize` value of the primary or secondary disk has changed.
     *   OperationDenied.QuotaExceed: The maximum number of replication pairs that can be created has been reached.
     *
     * @example PrePayOrderExpired
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description The tags of the replication pair.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'bandwidth'         => 'Bandwidth',
        'chargeType'        => 'ChargeType',
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'destinationDiskId' => 'DestinationDiskId',
        'destinationRegion' => 'DestinationRegion',
        'destinationZoneId' => 'DestinationZoneId',
        'expiredTime'       => 'ExpiredTime',
        'lastRecoverPoint'  => 'LastRecoverPoint',
        'pairName'          => 'PairName',
        'primaryRegion'     => 'PrimaryRegion',
        'primaryZone'       => 'PrimaryZone',
        'RPO'               => 'RPO',
        'replicaGroupId'    => 'ReplicaGroupId',
        'replicaGroupName'  => 'ReplicaGroupName',
        'replicaPairId'     => 'ReplicaPairId',
        'resourceGroupId'   => 'ResourceGroupId',
        'site'              => 'Site',
        'sourceDiskId'      => 'SourceDiskId',
        'sourceRegion'      => 'SourceRegion',
        'sourceZoneId'      => 'SourceZoneId',
        'standbyRegion'     => 'StandbyRegion',
        'standbyZone'       => 'StandbyZone',
        'status'            => 'Status',
        'statusMessage'     => 'StatusMessage',
        'tags'              => 'Tags',
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationDiskId) {
            $res['DestinationDiskId'] = $this->destinationDiskId;
        }
        if (null !== $this->destinationRegion) {
            $res['DestinationRegion'] = $this->destinationRegion;
        }
        if (null !== $this->destinationZoneId) {
            $res['DestinationZoneId'] = $this->destinationZoneId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->lastRecoverPoint) {
            $res['LastRecoverPoint'] = $this->lastRecoverPoint;
        }
        if (null !== $this->pairName) {
            $res['PairName'] = $this->pairName;
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
        if (null !== $this->replicaGroupName) {
            $res['ReplicaGroupName'] = $this->replicaGroupName;
        }
        if (null !== $this->replicaPairId) {
            $res['ReplicaPairId'] = $this->replicaPairId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
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
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
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
     * @return replicaPairs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationDiskId'])) {
            $model->destinationDiskId = $map['DestinationDiskId'];
        }
        if (isset($map['DestinationRegion'])) {
            $model->destinationRegion = $map['DestinationRegion'];
        }
        if (isset($map['DestinationZoneId'])) {
            $model->destinationZoneId = $map['DestinationZoneId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['LastRecoverPoint'])) {
            $model->lastRecoverPoint = $map['LastRecoverPoint'];
        }
        if (isset($map['PairName'])) {
            $model->pairName = $map['PairName'];
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
        if (isset($map['ReplicaGroupName'])) {
            $model->replicaGroupName = $map['ReplicaGroupName'];
        }
        if (isset($map['ReplicaPairId'])) {
            $model->replicaPairId = $map['ReplicaPairId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
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
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
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
