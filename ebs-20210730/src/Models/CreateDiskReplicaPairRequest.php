<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class CreateDiskReplicaPairRequest extends Model
{
    /**
     * @example 10240
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example PrePay
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @example d-sa1f82p58p1tdw9g****
     *
     * @var string
     */
    public $destinationDiskId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $destinationRegionId;

    /**
     * @example cn-shanghai-e
     *
     * @var string
     */
    public $destinationZoneId;

    /**
     * @example d-iq80sgp4d0xbk24q****
     *
     * @var string
     */
    public $diskId;

    /**
     * @example TestReplicaPair
     *
     * @var string
     */
    public $pairName;

    /**
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @example 900
     *
     * @var int
     */
    public $RPO;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example cn-beijing-f
     *
     * @var string
     */
    public $sourceZoneId;
    protected $_name = [
        'bandwidth'           => 'Bandwidth',
        'chargeType'          => 'ChargeType',
        'clientToken'         => 'ClientToken',
        'description'         => 'Description',
        'destinationDiskId'   => 'DestinationDiskId',
        'destinationRegionId' => 'DestinationRegionId',
        'destinationZoneId'   => 'DestinationZoneId',
        'diskId'              => 'DiskId',
        'pairName'            => 'PairName',
        'period'              => 'Period',
        'periodUnit'          => 'PeriodUnit',
        'RPO'                 => 'RPO',
        'regionId'            => 'RegionId',
        'sourceZoneId'        => 'SourceZoneId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationDiskId) {
            $res['DestinationDiskId'] = $this->destinationDiskId;
        }
        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }
        if (null !== $this->destinationZoneId) {
            $res['DestinationZoneId'] = $this->destinationZoneId;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->pairName) {
            $res['PairName'] = $this->pairName;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->RPO) {
            $res['RPO'] = $this->RPO;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceZoneId) {
            $res['SourceZoneId'] = $this->sourceZoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiskReplicaPairRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationDiskId'])) {
            $model->destinationDiskId = $map['DestinationDiskId'];
        }
        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }
        if (isset($map['DestinationZoneId'])) {
            $model->destinationZoneId = $map['DestinationZoneId'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['PairName'])) {
            $model->pairName = $map['PairName'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RPO'])) {
            $model->RPO = $map['RPO'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceZoneId'])) {
            $model->sourceZoneId = $map['SourceZoneId'];
        }

        return $model;
    }
}
