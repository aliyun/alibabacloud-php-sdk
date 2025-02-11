<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsJobDetailResponseBody;

use AlibabaCloud\Dara\Model;

class APSJobDetail extends Model
{
    /**
     * @var string
     */
    public $dbList;
    /**
     * @var string
     */
    public $destinationEndpointInstanceID;
    /**
     * @var string
     */
    public $destinationEndpointRegion;
    /**
     * @var string
     */
    public $partitionList;
    /**
     * @var string
     */
    public $sourceEndpointInstanceID;
    /**
     * @var string
     */
    public $sourceEndpointRegion;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $targetTableMode;
    protected $_name = [
        'dbList'                        => 'DbList',
        'destinationEndpointInstanceID' => 'DestinationEndpointInstanceID',
        'destinationEndpointRegion'     => 'DestinationEndpointRegion',
        'partitionList'                 => 'PartitionList',
        'sourceEndpointInstanceID'      => 'SourceEndpointInstanceID',
        'sourceEndpointRegion'          => 'SourceEndpointRegion',
        'status'                        => 'Status',
        'targetTableMode'               => 'TargetTableMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }

        if (null !== $this->destinationEndpointInstanceID) {
            $res['DestinationEndpointInstanceID'] = $this->destinationEndpointInstanceID;
        }

        if (null !== $this->destinationEndpointRegion) {
            $res['DestinationEndpointRegion'] = $this->destinationEndpointRegion;
        }

        if (null !== $this->partitionList) {
            $res['PartitionList'] = $this->partitionList;
        }

        if (null !== $this->sourceEndpointInstanceID) {
            $res['SourceEndpointInstanceID'] = $this->sourceEndpointInstanceID;
        }

        if (null !== $this->sourceEndpointRegion) {
            $res['SourceEndpointRegion'] = $this->sourceEndpointRegion;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetTableMode) {
            $res['TargetTableMode'] = $this->targetTableMode;
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
        if (isset($map['DbList'])) {
            $model->dbList = $map['DbList'];
        }

        if (isset($map['DestinationEndpointInstanceID'])) {
            $model->destinationEndpointInstanceID = $map['DestinationEndpointInstanceID'];
        }

        if (isset($map['DestinationEndpointRegion'])) {
            $model->destinationEndpointRegion = $map['DestinationEndpointRegion'];
        }

        if (isset($map['PartitionList'])) {
            $model->partitionList = $map['PartitionList'];
        }

        if (isset($map['SourceEndpointInstanceID'])) {
            $model->sourceEndpointInstanceID = $map['SourceEndpointInstanceID'];
        }

        if (isset($map['SourceEndpointRegion'])) {
            $model->sourceEndpointRegion = $map['SourceEndpointRegion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetTableMode'])) {
            $model->targetTableMode = $map['TargetTableMode'];
        }

        return $model;
    }
}
