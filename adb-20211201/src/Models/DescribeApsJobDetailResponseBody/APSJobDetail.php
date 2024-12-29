<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class APSJobDetail extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $dbList;

    /**
     * @example amv-******
     *
     * @var string
     */
    public $destinationEndpointInstanceID;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $destinationEndpointRegion;

    /**
     * @example {}
     *
     * @var string
     */
    public $partitionList;

    /**
     * @example pc-*******
     *
     * @var string
     */
    public $sourceEndpointInstanceID;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 0
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return APSJobDetail
     */
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
