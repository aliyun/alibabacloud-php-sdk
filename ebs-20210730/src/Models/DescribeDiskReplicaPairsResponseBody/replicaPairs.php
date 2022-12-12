<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsResponseBody;

use AlibabaCloud\Tea\Model;

class replicaPairs extends Model
{
    /**
     * @example 10240
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 1649750977
     *
     * @var int
     */
    public $createTime;

    /**
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @example d-asdfjl2342kj2l3k4****
     *
     * @var string
     */
    public $destinationDiskId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $destinationRegion;

    /**
     * @example cn-shanghai-b
     *
     * @var string
     */
    public $destinationZoneId;

    /**
     * @example 1649750977
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @example 1649751977
     *
     * @var int
     */
    public $lastRecoverPoint;

    /**
     * @example TestReplicaPair
     *
     * @var string
     */
    public $pairName;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $primaryRegion;

    /**
     * @example cn-beijing-a
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @example 900
     *
     * @var int
     */
    public $RPO;

    /**
     * @example pg-xxxx****
     *
     * @var string
     */
    public $replicaGroupId;

    /**
     * @example pg-name****
     *
     * @var string
     */
    public $replicaGroupName;

    /**
     * @example pair-cn-dsa****
     *
     * @var string
     */
    public $replicaPairId;

    /**
     * @example production
     *
     * @var string
     */
    public $site;

    /**
     * @example d-bp131n0q38u3a4zi****
     *
     * @var string
     */
    public $sourceDiskId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $sourceRegion;

    /**
     * @example cn-beijing-a
     *
     * @var string
     */
    public $sourceZoneId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $standbyRegion;

    /**
     * @example cn-shanghai-b
     *
     * @var string
     */
    public $standbyZone;

    /**
     * @example created
     *
     * @var string
     */
    public $status;

    /**
     * @example PrePayOrderExpired
     *
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
