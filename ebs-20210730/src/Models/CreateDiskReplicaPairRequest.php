<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaPairRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDiskReplicaPairRequest extends Model
{
    /**
     * @description The bandwidth to use to asynchronously replicate data between the primary disk and secondary disk. Unit: Kbit/s. Valid values:
     *
     *   10240 : equal to 10 Mbit/s
     *   20480 : equal to 20 Mbit/s
     *   51200 : equal to 50 Mbit/s
     *   102400 : equal to 100 Mbit/s
     *
     * When you set the ChargeType parameter to POSTPAY, the Bandwidth parameter is automatically set to 0 and cannot be modified. The value 0 indicates that bandwidth is dynamically allocated based on the volume of data that is asynchronously replicated from the primary disk to the secondary disk.
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
     * Default value: POSTPAY.
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the replication pair. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the secondary disk.
     *
     * @example d-sa1f82p58p1tdw9g****
     *
     * @var string
     */
    public $destinationDiskId;

    /**
     * @description The region ID of the secondary disk. You can call the [DescribeRegions](~~354276~~) operation to query the most recent list of regions in which async replication is supported.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $destinationRegionId;

    /**
     * @description The zone ID of the secondary disk.
     *
     * @example cn-shanghai-e
     *
     * @var string
     */
    public $destinationZoneId;

    /**
     * @description The ID of the primary disk.
     *
     * @example d-iq80sgp4d0xbk24q****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The name of the replication pair. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), periods (.), and hyphens (-).
     *
     * @example TestReplicaPair
     *
     * @var string
     */
    public $pairName;

    /**
     * @description The subscription duration of the replication pair. This parameter is required when the `ChargeType` parameter is set to PREPAY. The unit of the subscription duration is specified by the `PeriodUnit` parameter.
     *
     *   Valid values when the `PeriodUnit` parameter is set to Week: 1, 2, 3, and 4.
     *   Valid values when the `PeriodUnit` parameter is set to Month: 1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36, 48, and 60.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration of the replication pair. Valid values:
     *
     *   Week.
     *   Month
     *
     * Default value: Month.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The recovery point objective (RPO) of the replication pair. Unit: seconds. Set the value to 900.
     *
     * @example 900
     *
     * @var int
     */
    public $RPO;

    /**
     * @description The ID of the region in which to create the replication pair.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the replication group.
     *
     * @example rg-acfmvs****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The zone ID of the primary disk.
     *
     * @example cn-beijing-f
     *
     * @var string
     */
    public $sourceZoneId;

    /**
     * @description The resource tags. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;
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
        'resourceGroupId'     => 'ResourceGroupId',
        'sourceZoneId'        => 'SourceZoneId',
        'tag'                 => 'Tag',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceZoneId) {
            $res['SourceZoneId'] = $this->sourceZoneId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceZoneId'])) {
            $model->sourceZoneId = $map['SourceZoneId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
