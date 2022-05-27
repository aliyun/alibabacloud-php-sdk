<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsResponseBody;

use AlibabaCloud\Tea\Model;

class replicaPairs extends Model
{
    /**
     * @description 异步复制时使用的带宽。单位为Kbps。
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description 付费类型。PREPAY：预付费；POSTPAY：后付费。
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description 创建时间。1970年1月1日0点0分以来的秒数。
     *
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
     * @description 从盘所属的可用区。
     *
     * @var string
     */
    public $destinationZoneId;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @description 最近一次异步复制操作完成的时间。该参数以时间戳的形式提供返回值。单位为秒。
     *
     * @var int
     */
    public $lastRecoverPoint;

    /**
     * @var string
     */
    public $pairName;

    /**
     * @description 复制对的初始源地域。
     *
     * @var string
     */
    public $primaryRegion;

    /**
     * @description 复制对的初始源可用区。
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @description 复制对的RPO值。单位为秒。
     *
     * @var int
     */
    public $RPO;

    /**
     * @description 所属复制组id。
     *
     * @var string
     */
    public $replicaGroupId;

    /**
     * @description 所属复制组名称。
     *
     * @var string
     */
    public $replicaGroupName;

    /**
     * @var string
     */
    public $replicaPairId;

    /**
     * @description 复制对信息的后端站点来源，production或backup。
     *
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
     * @description 主盘所属的可用区。
     *
     * @var string
     */
    public $sourceZoneId;

    /**
     * @description 复制对的初始目的地域。
     *
     * @var string
     */
    public $standbyRegion;

    /**
     * @description 复制对的初始目的可用区。
     *
     * @var string
     */
    public $standbyZone;

    /**
     * @description 异步复制关系的状态。可能值：
     *
     * - deleted：已删除。
     * @var string
     */
    public $status;

    /**
     * @description 复制对的状态提示信息。比如invalid时，可能值：DeviceRemoved：主盘或者从盘被删除。DeviceKeyChanged：主盘或从盘的DeviceKey映射发生变化。
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
