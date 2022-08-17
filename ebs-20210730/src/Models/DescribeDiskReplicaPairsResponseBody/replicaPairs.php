<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsResponseBody;

use AlibabaCloud\Tea\Model;

class replicaPairs extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationDiskId;

    /**
     * @var string
     */
    public $destinationRegion;

    /**
     * @var string
     */
    public $destinationZoneId;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $lastRecoverPoint;

    /**
     * @var string
     */
    public $pairName;

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
    public $replicaGroupName;

    /**
     * @var string
     */
    public $replicaPairId;

    /**
     * @var string
     */
    public $site;

    /**
     * @var string
     */
    public $sourceDiskId;

    /**
     * @var string
     */
    public $sourceRegion;

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
     * @var string
     */
    public $statusMessage;
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
        'site'              => 'Site',
        'sourceDiskId'      => 'SourceDiskId',
        'sourceRegion'      => 'SourceRegion',
        'sourceZoneId'      => 'SourceZoneId',
        'standbyRegion'     => 'StandbyRegion',
        'standbyZone'       => 'StandbyZone',
        'status'            => 'Status',
        'statusMessage'     => 'StatusMessage',
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

        return $model;
    }
}
