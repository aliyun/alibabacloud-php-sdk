<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigureDtsJobRequest extends Model
{
    /**
     * @var string
     */
    public $checkpoint;

    /**
     * @var bool
     */
    public $dataInitialization;

    /**
     * @var bool
     */
    public $dataSynchronization;

    /**
     * @var string
     */
    public $dbList;

    /**
     * @var bool
     */
    public $delayNotice;

    /**
     * @var string
     */
    public $delayPhone;

    /**
     * @var int
     */
    public $delayRuleTime;

    /**
     * @var string
     */
    public $destinationEndpointDataBaseName;

    /**
     * @var string
     */
    public $destinationEndpointEngineName;

    /**
     * @var string
     */
    public $destinationEndpointIP;

    /**
     * @var string
     */
    public $destinationEndpointInstanceID;

    /**
     * @var string
     */
    public $destinationEndpointInstanceType;

    /**
     * @var string
     */
    public $destinationEndpointOracleSID;

    /**
     * @var string
     */
    public $destinationEndpointPassword;

    /**
     * @var string
     */
    public $destinationEndpointPort;

    /**
     * @var string
     */
    public $destinationEndpointRegion;

    /**
     * @var string
     */
    public $destinationEndpointUserName;

    /**
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $dtsJobName;

    /**
     * @var bool
     */
    public $errorNotice;

    /**
     * @var string
     */
    public $errorPhone;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reserve;

    /**
     * @var string
     */
    public $sourceEndpointDatabaseName;

    /**
     * @var string
     */
    public $sourceEndpointEngineName;

    /**
     * @var string
     */
    public $sourceEndpointIP;

    /**
     * @var string
     */
    public $sourceEndpointInstanceID;

    /**
     * @var string
     */
    public $sourceEndpointInstanceType;

    /**
     * @var string
     */
    public $sourceEndpointOracleSID;

    /**
     * @var string
     */
    public $sourceEndpointOwnerID;

    /**
     * @var string
     */
    public $sourceEndpointPassword;

    /**
     * @var string
     */
    public $sourceEndpointPort;

    /**
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @var string
     */
    public $sourceEndpointRole;

    /**
     * @var string
     */
    public $sourceEndpointUserName;

    /**
     * @var bool
     */
    public $structureInitialization;

    /**
     * @var string
     */
    public $synchronizationDirection;
    protected $_name = [
        'checkpoint'                      => 'Checkpoint',
        'dataInitialization'              => 'DataInitialization',
        'dataSynchronization'             => 'DataSynchronization',
        'dbList'                          => 'DbList',
        'delayNotice'                     => 'DelayNotice',
        'delayPhone'                      => 'DelayPhone',
        'delayRuleTime'                   => 'DelayRuleTime',
        'destinationEndpointDataBaseName' => 'DestinationEndpointDataBaseName',
        'destinationEndpointEngineName'   => 'DestinationEndpointEngineName',
        'destinationEndpointIP'           => 'DestinationEndpointIP',
        'destinationEndpointInstanceID'   => 'DestinationEndpointInstanceID',
        'destinationEndpointInstanceType' => 'DestinationEndpointInstanceType',
        'destinationEndpointOracleSID'    => 'DestinationEndpointOracleSID',
        'destinationEndpointPassword'     => 'DestinationEndpointPassword',
        'destinationEndpointPort'         => 'DestinationEndpointPort',
        'destinationEndpointRegion'       => 'DestinationEndpointRegion',
        'destinationEndpointUserName'     => 'DestinationEndpointUserName',
        'dtsInstanceId'                   => 'DtsInstanceId',
        'dtsJobId'                        => 'DtsJobId',
        'dtsJobName'                      => 'DtsJobName',
        'errorNotice'                     => 'ErrorNotice',
        'errorPhone'                      => 'ErrorPhone',
        'jobType'                         => 'JobType',
        'ownerId'                         => 'OwnerId',
        'regionId'                        => 'RegionId',
        'reserve'                         => 'Reserve',
        'sourceEndpointDatabaseName'      => 'SourceEndpointDatabaseName',
        'sourceEndpointEngineName'        => 'SourceEndpointEngineName',
        'sourceEndpointIP'                => 'SourceEndpointIP',
        'sourceEndpointInstanceID'        => 'SourceEndpointInstanceID',
        'sourceEndpointInstanceType'      => 'SourceEndpointInstanceType',
        'sourceEndpointOracleSID'         => 'SourceEndpointOracleSID',
        'sourceEndpointOwnerID'           => 'SourceEndpointOwnerID',
        'sourceEndpointPassword'          => 'SourceEndpointPassword',
        'sourceEndpointPort'              => 'SourceEndpointPort',
        'sourceEndpointRegion'            => 'SourceEndpointRegion',
        'sourceEndpointRole'              => 'SourceEndpointRole',
        'sourceEndpointUserName'          => 'SourceEndpointUserName',
        'structureInitialization'         => 'StructureInitialization',
        'synchronizationDirection'        => 'SynchronizationDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->dataInitialization) {
            $res['DataInitialization'] = $this->dataInitialization;
        }
        if (null !== $this->dataSynchronization) {
            $res['DataSynchronization'] = $this->dataSynchronization;
        }
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }
        if (null !== $this->delayNotice) {
            $res['DelayNotice'] = $this->delayNotice;
        }
        if (null !== $this->delayPhone) {
            $res['DelayPhone'] = $this->delayPhone;
        }
        if (null !== $this->delayRuleTime) {
            $res['DelayRuleTime'] = $this->delayRuleTime;
        }
        if (null !== $this->destinationEndpointDataBaseName) {
            $res['DestinationEndpointDataBaseName'] = $this->destinationEndpointDataBaseName;
        }
        if (null !== $this->destinationEndpointEngineName) {
            $res['DestinationEndpointEngineName'] = $this->destinationEndpointEngineName;
        }
        if (null !== $this->destinationEndpointIP) {
            $res['DestinationEndpointIP'] = $this->destinationEndpointIP;
        }
        if (null !== $this->destinationEndpointInstanceID) {
            $res['DestinationEndpointInstanceID'] = $this->destinationEndpointInstanceID;
        }
        if (null !== $this->destinationEndpointInstanceType) {
            $res['DestinationEndpointInstanceType'] = $this->destinationEndpointInstanceType;
        }
        if (null !== $this->destinationEndpointOracleSID) {
            $res['DestinationEndpointOracleSID'] = $this->destinationEndpointOracleSID;
        }
        if (null !== $this->destinationEndpointPassword) {
            $res['DestinationEndpointPassword'] = $this->destinationEndpointPassword;
        }
        if (null !== $this->destinationEndpointPort) {
            $res['DestinationEndpointPort'] = $this->destinationEndpointPort;
        }
        if (null !== $this->destinationEndpointRegion) {
            $res['DestinationEndpointRegion'] = $this->destinationEndpointRegion;
        }
        if (null !== $this->destinationEndpointUserName) {
            $res['DestinationEndpointUserName'] = $this->destinationEndpointUserName;
        }
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->dtsJobName) {
            $res['DtsJobName'] = $this->dtsJobName;
        }
        if (null !== $this->errorNotice) {
            $res['ErrorNotice'] = $this->errorNotice;
        }
        if (null !== $this->errorPhone) {
            $res['ErrorPhone'] = $this->errorPhone;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reserve) {
            $res['Reserve'] = $this->reserve;
        }
        if (null !== $this->sourceEndpointDatabaseName) {
            $res['SourceEndpointDatabaseName'] = $this->sourceEndpointDatabaseName;
        }
        if (null !== $this->sourceEndpointEngineName) {
            $res['SourceEndpointEngineName'] = $this->sourceEndpointEngineName;
        }
        if (null !== $this->sourceEndpointIP) {
            $res['SourceEndpointIP'] = $this->sourceEndpointIP;
        }
        if (null !== $this->sourceEndpointInstanceID) {
            $res['SourceEndpointInstanceID'] = $this->sourceEndpointInstanceID;
        }
        if (null !== $this->sourceEndpointInstanceType) {
            $res['SourceEndpointInstanceType'] = $this->sourceEndpointInstanceType;
        }
        if (null !== $this->sourceEndpointOracleSID) {
            $res['SourceEndpointOracleSID'] = $this->sourceEndpointOracleSID;
        }
        if (null !== $this->sourceEndpointOwnerID) {
            $res['SourceEndpointOwnerID'] = $this->sourceEndpointOwnerID;
        }
        if (null !== $this->sourceEndpointPassword) {
            $res['SourceEndpointPassword'] = $this->sourceEndpointPassword;
        }
        if (null !== $this->sourceEndpointPort) {
            $res['SourceEndpointPort'] = $this->sourceEndpointPort;
        }
        if (null !== $this->sourceEndpointRegion) {
            $res['SourceEndpointRegion'] = $this->sourceEndpointRegion;
        }
        if (null !== $this->sourceEndpointRole) {
            $res['SourceEndpointRole'] = $this->sourceEndpointRole;
        }
        if (null !== $this->sourceEndpointUserName) {
            $res['SourceEndpointUserName'] = $this->sourceEndpointUserName;
        }
        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = $this->structureInitialization;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureDtsJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['DataInitialization'])) {
            $model->dataInitialization = $map['DataInitialization'];
        }
        if (isset($map['DataSynchronization'])) {
            $model->dataSynchronization = $map['DataSynchronization'];
        }
        if (isset($map['DbList'])) {
            $model->dbList = $map['DbList'];
        }
        if (isset($map['DelayNotice'])) {
            $model->delayNotice = $map['DelayNotice'];
        }
        if (isset($map['DelayPhone'])) {
            $model->delayPhone = $map['DelayPhone'];
        }
        if (isset($map['DelayRuleTime'])) {
            $model->delayRuleTime = $map['DelayRuleTime'];
        }
        if (isset($map['DestinationEndpointDataBaseName'])) {
            $model->destinationEndpointDataBaseName = $map['DestinationEndpointDataBaseName'];
        }
        if (isset($map['DestinationEndpointEngineName'])) {
            $model->destinationEndpointEngineName = $map['DestinationEndpointEngineName'];
        }
        if (isset($map['DestinationEndpointIP'])) {
            $model->destinationEndpointIP = $map['DestinationEndpointIP'];
        }
        if (isset($map['DestinationEndpointInstanceID'])) {
            $model->destinationEndpointInstanceID = $map['DestinationEndpointInstanceID'];
        }
        if (isset($map['DestinationEndpointInstanceType'])) {
            $model->destinationEndpointInstanceType = $map['DestinationEndpointInstanceType'];
        }
        if (isset($map['DestinationEndpointOracleSID'])) {
            $model->destinationEndpointOracleSID = $map['DestinationEndpointOracleSID'];
        }
        if (isset($map['DestinationEndpointPassword'])) {
            $model->destinationEndpointPassword = $map['DestinationEndpointPassword'];
        }
        if (isset($map['DestinationEndpointPort'])) {
            $model->destinationEndpointPort = $map['DestinationEndpointPort'];
        }
        if (isset($map['DestinationEndpointRegion'])) {
            $model->destinationEndpointRegion = $map['DestinationEndpointRegion'];
        }
        if (isset($map['DestinationEndpointUserName'])) {
            $model->destinationEndpointUserName = $map['DestinationEndpointUserName'];
        }
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['DtsJobName'])) {
            $model->dtsJobName = $map['DtsJobName'];
        }
        if (isset($map['ErrorNotice'])) {
            $model->errorNotice = $map['ErrorNotice'];
        }
        if (isset($map['ErrorPhone'])) {
            $model->errorPhone = $map['ErrorPhone'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Reserve'])) {
            $model->reserve = $map['Reserve'];
        }
        if (isset($map['SourceEndpointDatabaseName'])) {
            $model->sourceEndpointDatabaseName = $map['SourceEndpointDatabaseName'];
        }
        if (isset($map['SourceEndpointEngineName'])) {
            $model->sourceEndpointEngineName = $map['SourceEndpointEngineName'];
        }
        if (isset($map['SourceEndpointIP'])) {
            $model->sourceEndpointIP = $map['SourceEndpointIP'];
        }
        if (isset($map['SourceEndpointInstanceID'])) {
            $model->sourceEndpointInstanceID = $map['SourceEndpointInstanceID'];
        }
        if (isset($map['SourceEndpointInstanceType'])) {
            $model->sourceEndpointInstanceType = $map['SourceEndpointInstanceType'];
        }
        if (isset($map['SourceEndpointOracleSID'])) {
            $model->sourceEndpointOracleSID = $map['SourceEndpointOracleSID'];
        }
        if (isset($map['SourceEndpointOwnerID'])) {
            $model->sourceEndpointOwnerID = $map['SourceEndpointOwnerID'];
        }
        if (isset($map['SourceEndpointPassword'])) {
            $model->sourceEndpointPassword = $map['SourceEndpointPassword'];
        }
        if (isset($map['SourceEndpointPort'])) {
            $model->sourceEndpointPort = $map['SourceEndpointPort'];
        }
        if (isset($map['SourceEndpointRegion'])) {
            $model->sourceEndpointRegion = $map['SourceEndpointRegion'];
        }
        if (isset($map['SourceEndpointRole'])) {
            $model->sourceEndpointRole = $map['SourceEndpointRole'];
        }
        if (isset($map['SourceEndpointUserName'])) {
            $model->sourceEndpointUserName = $map['SourceEndpointUserName'];
        }
        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        return $model;
    }
}
