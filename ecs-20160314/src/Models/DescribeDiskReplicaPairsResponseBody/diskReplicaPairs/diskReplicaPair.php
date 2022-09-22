<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiskReplicaPairsResponseBody\diskReplicaPairs;

use AlibabaCloud\Tea\Model;

class diskReplicaPair extends Model
{
    /**
     * @var int
     */
    public $asyncCycle;

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
    public $destinationDiskId;

    /**
     * @var string
     */
    public $destinationRegion;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $pairName;

    /**
     * @var string
     */
    public $replicaPairId;

    /**
     * @var string
     */
    public $rpoTime;

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
    public $status;

    /**
     * @var int
     */
    public $totalCopiedSize;
    protected $_name = [
        'asyncCycle'        => 'AsyncCycle',
        'bandwidth'         => 'Bandwidth',
        'description'       => 'Description',
        'destinationDiskId' => 'DestinationDiskId',
        'destinationRegion' => 'DestinationRegion',
        'healthStatus'      => 'HealthStatus',
        'pairName'          => 'PairName',
        'replicaPairId'     => 'ReplicaPairId',
        'rpoTime'           => 'RpoTime',
        'sourceDiskId'      => 'SourceDiskId',
        'sourceRegion'      => 'SourceRegion',
        'status'            => 'Status',
        'totalCopiedSize'   => 'TotalCopiedSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncCycle) {
            $res['AsyncCycle'] = $this->asyncCycle;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
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
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->pairName) {
            $res['PairName'] = $this->pairName;
        }
        if (null !== $this->replicaPairId) {
            $res['ReplicaPairId'] = $this->replicaPairId;
        }
        if (null !== $this->rpoTime) {
            $res['RpoTime'] = $this->rpoTime;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCopiedSize) {
            $res['TotalCopiedSize'] = $this->totalCopiedSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskReplicaPair
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncCycle'])) {
            $model->asyncCycle = $map['AsyncCycle'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
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
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['PairName'])) {
            $model->pairName = $map['PairName'];
        }
        if (isset($map['ReplicaPairId'])) {
            $model->replicaPairId = $map['ReplicaPairId'];
        }
        if (isset($map['RpoTime'])) {
            $model->rpoTime = $map['RpoTime'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCopiedSize'])) {
            $model->totalCopiedSize = $map['TotalCopiedSize'];
        }

        return $model;
    }
}
