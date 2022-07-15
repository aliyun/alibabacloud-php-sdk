<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class replicaGroups extends Model
{
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
     * @description 复制组中的复制对个数
     *
     * @var int
     */
    public $pairNumber;

    /**
     * @description 复制组的初始源地域。
     *
     * @var string
     */
    public $primaryRegion;

    /**
     * @description 复制组的初始源可用区。
     *
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
     * @description pair信息的后端站点来源，production或backup
     *
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
     * @description 复制组的初始目的地域。
     *
     * @var string
     */
    public $standbyRegion;

    /**
     * @description 复制组的初始目的可用区。
     *
     * @var string
     */
    public $standbyZone;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
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
        'site'                => 'Site',
        'sourceRegionId'      => 'SourceRegionId',
        'sourceZoneId'        => 'SourceZoneId',
        'standbyRegion'       => 'StandbyRegion',
        'standbyZone'         => 'StandbyZone',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $model;
    }
}
