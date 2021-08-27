<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskReplicaPairsResponseBody\diskReplicaPairs;

use AlibabaCloud\Tea\Model;

class diskReplicaPair extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $sourceDiskId;

    /**
     * @var string
     */
    public $replicaPairId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationRegion;

    /**
     * @var string
     */
    public $pairName;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $destinationDiskId;
    protected $_name = [
        'status'            => 'Status',
        'sourceDiskId'      => 'SourceDiskId',
        'replicaPairId'     => 'ReplicaPairId',
        'description'       => 'Description',
        'destinationRegion' => 'DestinationRegion',
        'pairName'          => 'PairName',
        'sourceRegion'      => 'SourceRegion',
        'destinationDiskId' => 'DestinationDiskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }
        if (null !== $this->replicaPairId) {
            $res['ReplicaPairId'] = $this->replicaPairId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationRegion) {
            $res['DestinationRegion'] = $this->destinationRegion;
        }
        if (null !== $this->pairName) {
            $res['PairName'] = $this->pairName;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->destinationDiskId) {
            $res['DestinationDiskId'] = $this->destinationDiskId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }
        if (isset($map['ReplicaPairId'])) {
            $model->replicaPairId = $map['ReplicaPairId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationRegion'])) {
            $model->destinationRegion = $map['DestinationRegion'];
        }
        if (isset($map['PairName'])) {
            $model->pairName = $map['PairName'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['DestinationDiskId'])) {
            $model->destinationDiskId = $map['DestinationDiskId'];
        }

        return $model;
    }
}
