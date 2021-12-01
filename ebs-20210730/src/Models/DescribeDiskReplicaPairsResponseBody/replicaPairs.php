<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsResponseBody;

use AlibabaCloud\Tea\Model;

class replicaPairs extends Model
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
     * @var int
     */
    public $lastRPO;

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
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'asyncCycle'        => 'AsyncCycle',
        'bandwidth'         => 'Bandwidth',
        'description'       => 'Description',
        'destinationDiskId' => 'DestinationDiskId',
        'destinationRegion' => 'DestinationRegion',
        'lastRPO'           => 'LastRPO',
        'pairName'          => 'PairName',
        'replicaPairId'     => 'ReplicaPairId',
        'sourceDiskId'      => 'SourceDiskId',
        'sourceRegion'      => 'SourceRegion',
        'status'            => 'Status',
        'statusMessage'     => 'StatusMessage',
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
        if (null !== $this->lastRPO) {
            $res['LastRPO'] = $this->lastRPO;
        }
        if (null !== $this->pairName) {
            $res['PairName'] = $this->pairName;
        }
        if (null !== $this->replicaPairId) {
            $res['ReplicaPairId'] = $this->replicaPairId;
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
        if (isset($map['LastRPO'])) {
            $model->lastRPO = $map['LastRPO'];
        }
        if (isset($map['PairName'])) {
            $model->pairName = $map['PairName'];
        }
        if (isset($map['ReplicaPairId'])) {
            $model->replicaPairId = $map['ReplicaPairId'];
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
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        return $model;
    }
}
