<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateAPSJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example aps-xxxxx
     *
     * @var string
     */
    public $apsJobName;

    /**
     * @description This parameter is required.
     *
     * @example {"EntireInstance":true}
     *
     * @var string
     */
    public $dbList;

    /**
     * @description This parameter is required.
     *
     * @example amv-xxxxx
     *
     * @var string
     */
    public $destinationEndpointInstanceID;

    /**
     * @example ******
     *
     * @var string
     */
    public $destinationEndpointPassword;

    /**
     * @example ******
     *
     * @var string
     */
    public $destinationEndpointUserName;

    /**
     * @example {}
     *
     * @var string
     */
    public $partitionList;

    /**
     * @description This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example pc-xxxxx
     *
     * @var string
     */
    public $sourceEndpointInstanceID;

    /**
     * @example ******
     *
     * @var string
     */
    public $sourceEndpointPassword;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $sourceEndpointUserName;

    /**
     * @example 1
     *
     * @var string
     */
    public $targetTableMode;
    protected $_name = [
        'apsJobName'                    => 'ApsJobName',
        'dbList'                        => 'DbList',
        'destinationEndpointInstanceID' => 'DestinationEndpointInstanceID',
        'destinationEndpointPassword'   => 'DestinationEndpointPassword',
        'destinationEndpointUserName'   => 'DestinationEndpointUserName',
        'partitionList'                 => 'PartitionList',
        'regionId'                      => 'RegionId',
        'sourceEndpointInstanceID'      => 'SourceEndpointInstanceID',
        'sourceEndpointPassword'        => 'SourceEndpointPassword',
        'sourceEndpointRegion'          => 'SourceEndpointRegion',
        'sourceEndpointUserName'        => 'SourceEndpointUserName',
        'targetTableMode'               => 'TargetTableMode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateAPSJobRequest
     */
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
