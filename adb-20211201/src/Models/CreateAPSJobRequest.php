<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateAPSJobRequest extends Model
{
    /**
     * @var string
     */
    public $apsJobName;

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
    public $destinationEndpointPassword;

    /**
     * @var string
     */
    public $destinationEndpointUserName;

    /**
     * @var string
     */
    public $partitionList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceEndpointInstanceID;

    /**
     * @var string
     */
    public $sourceEndpointPassword;

    /**
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @var string
     */
    public $sourceEndpointUserName;

    /**
     * @var string
     */
    public $targetTableMode;
    protected $_name = [
        'apsJobName' => 'ApsJobName',
        'dbList' => 'DbList',
        'destinationEndpointInstanceID' => 'DestinationEndpointInstanceID',
        'destinationEndpointPassword' => 'DestinationEndpointPassword',
        'destinationEndpointUserName' => 'DestinationEndpointUserName',
        'partitionList' => 'PartitionList',
        'regionId' => 'RegionId',
        'sourceEndpointInstanceID' => 'SourceEndpointInstanceID',
        'sourceEndpointPassword' => 'SourceEndpointPassword',
        'sourceEndpointRegion' => 'SourceEndpointRegion',
        'sourceEndpointUserName' => 'SourceEndpointUserName',
        'targetTableMode' => 'TargetTableMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apsJobName) {
            $res['ApsJobName'] = $this->apsJobName;
        }

        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }

        if (null !== $this->destinationEndpointInstanceID) {
            $res['DestinationEndpointInstanceID'] = $this->destinationEndpointInstanceID;
        }

        if (null !== $this->destinationEndpointPassword) {
            $res['DestinationEndpointPassword'] = $this->destinationEndpointPassword;
        }

        if (null !== $this->destinationEndpointUserName) {
            $res['DestinationEndpointUserName'] = $this->destinationEndpointUserName;
        }

        if (null !== $this->partitionList) {
            $res['PartitionList'] = $this->partitionList;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sourceEndpointInstanceID) {
            $res['SourceEndpointInstanceID'] = $this->sourceEndpointInstanceID;
        }

        if (null !== $this->sourceEndpointPassword) {
            $res['SourceEndpointPassword'] = $this->sourceEndpointPassword;
        }

        if (null !== $this->sourceEndpointRegion) {
            $res['SourceEndpointRegion'] = $this->sourceEndpointRegion;
        }

        if (null !== $this->sourceEndpointUserName) {
            $res['SourceEndpointUserName'] = $this->sourceEndpointUserName;
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
        if (isset($map['ApsJobName'])) {
            $model->apsJobName = $map['ApsJobName'];
        }

        if (isset($map['DbList'])) {
            $model->dbList = $map['DbList'];
        }

        if (isset($map['DestinationEndpointInstanceID'])) {
            $model->destinationEndpointInstanceID = $map['DestinationEndpointInstanceID'];
        }

        if (isset($map['DestinationEndpointPassword'])) {
            $model->destinationEndpointPassword = $map['DestinationEndpointPassword'];
        }

        if (isset($map['DestinationEndpointUserName'])) {
            $model->destinationEndpointUserName = $map['DestinationEndpointUserName'];
        }

        if (isset($map['PartitionList'])) {
            $model->partitionList = $map['PartitionList'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SourceEndpointInstanceID'])) {
            $model->sourceEndpointInstanceID = $map['SourceEndpointInstanceID'];
        }

        if (isset($map['SourceEndpointPassword'])) {
            $model->sourceEndpointPassword = $map['SourceEndpointPassword'];
        }

        if (isset($map['SourceEndpointRegion'])) {
            $model->sourceEndpointRegion = $map['SourceEndpointRegion'];
        }

        if (isset($map['SourceEndpointUserName'])) {
            $model->sourceEndpointUserName = $map['SourceEndpointUserName'];
        }

        if (isset($map['TargetTableMode'])) {
            $model->targetTableMode = $map['TargetTableMode'];
        }

        return $model;
    }
}
