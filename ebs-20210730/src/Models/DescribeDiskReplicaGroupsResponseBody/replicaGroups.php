<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsResponseBody\replicaGroups\tags;

class replicaGroups extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationRegionId;

    /**
     * @var string
     */
    public $destinationZoneId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $lastRecoverPoint;

    /**
     * @var int[][]
     */
    public $pairIds;

    /**
     * @var int
     */
    public $pairNumber;

    /**
     * @var string
     */
    public $primaryRegion;

    /**
     * @var string
     */
    public $primaryZone;

    /**
     * @var int
     */
    public $RPO;

    /**
     * @var string
     */
    public $replicaGroupId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $site;

    /**
     * @var string
     */
    public $sourceRegionId;

    /**
     * @var string
     */
    public $sourceZoneId;

    /**
     * @var string
     */
    public $standbyRegion;

    /**
     * @var string
     */
    public $standbyZone;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'description' => 'Description',
        'destinationRegionId' => 'DestinationRegionId',
        'destinationZoneId' => 'DestinationZoneId',
        'groupName' => 'GroupName',
        'lastRecoverPoint' => 'LastRecoverPoint',
        'pairIds' => 'PairIds',
        'pairNumber' => 'PairNumber',
        'primaryRegion' => 'PrimaryRegion',
        'primaryZone' => 'PrimaryZone',
        'RPO' => 'RPO',
        'replicaGroupId' => 'ReplicaGroupId',
        'resourceGroupId' => 'ResourceGroupId',
        'site' => 'Site',
        'sourceRegionId' => 'SourceRegionId',
        'sourceZoneId' => 'SourceZoneId',
        'standbyRegion' => 'StandbyRegion',
        'standbyZone' => 'StandbyZone',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->pairIds)) {
            Model::validateArray($this->pairIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->pairIds)) {
                $res['PairIds'] = [];
                $n1 = 0;
                foreach ($this->pairIds as $item1) {
                    $res['PairIds'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $model->pairIds = [];
                $n1 = 0;
                foreach ($map['PairIds'] as $item1) {
                    $model->pairIds[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
