<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class ConfigureDtsJobAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $checkpoint;

    /**
     * @var string
     */
    public $dataCheckConfigure;

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
     * @var string
     */
    public $dedicatedClusterId;

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
    public $destCaCertificateOssUrl;

    /**
     * @var string
     */
    public $destCaCertificatePassword;

    /**
     * @var string
     */
    public $destClientCertOssUrl;

    /**
     * @var string
     */
    public $destClientKeyOssUrl;

    /**
     * @var string
     */
    public $destClientPassword;

    /**
     * @var string
     */
    public $destPrimaryVswId;

    /**
     * @var string
     */
    public $destSecondaryVswId;

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
    public $destinationEndpointOwnerID;

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
    public $destinationEndpointRole;

    /**
     * @var string
     */
    public $destinationEndpointUserName;

    /**
     * @var bool
     */
    public $disasterRecoveryJob;

    /**
     * @var string
     */
    public $dtsBisLabel;

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
     * @var Stream
     */
    public $fileOssUrlObject;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var float
     */
    public $maxDu;

    /**
     * @var float
     */
    public $minDu;

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
    public $resourceGroupId;

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
     * @var string
     */
    public $sourceEndpointVSwitchID;

    /**
     * @var string
     */
    public $srcCaCertificateOssUrl;

    /**
     * @var string
     */
    public $srcCaCertificatePassword;

    /**
     * @var string
     */
    public $srcClientCertOssUrl;

    /**
     * @var string
     */
    public $srcClientKeyOssUrl;

    /**
     * @var string
     */
    public $srcClientPassword;

    /**
     * @var string
     */
    public $srcPrimaryVswId;

    /**
     * @var string
     */
    public $srcSecondaryVswId;

    /**
     * @var bool
     */
    public $structureInitialization;

    /**
     * @var string
     */
    public $synchronizationDirection;
    protected $_name = [
        'checkpoint' => 'Checkpoint',
        'dataCheckConfigure' => 'DataCheckConfigure',
        'dataInitialization' => 'DataInitialization',
        'dataSynchronization' => 'DataSynchronization',
        'dbList' => 'DbList',
        'dedicatedClusterId' => 'DedicatedClusterId',
        'delayNotice' => 'DelayNotice',
        'delayPhone' => 'DelayPhone',
        'delayRuleTime' => 'DelayRuleTime',
        'destCaCertificateOssUrl' => 'DestCaCertificateOssUrl',
        'destCaCertificatePassword' => 'DestCaCertificatePassword',
        'destClientCertOssUrl' => 'DestClientCertOssUrl',
        'destClientKeyOssUrl' => 'DestClientKeyOssUrl',
        'destClientPassword' => 'DestClientPassword',
        'destPrimaryVswId' => 'DestPrimaryVswId',
        'destSecondaryVswId' => 'DestSecondaryVswId',
        'destinationEndpointDataBaseName' => 'DestinationEndpointDataBaseName',
        'destinationEndpointEngineName' => 'DestinationEndpointEngineName',
        'destinationEndpointIP' => 'DestinationEndpointIP',
        'destinationEndpointInstanceID' => 'DestinationEndpointInstanceID',
        'destinationEndpointInstanceType' => 'DestinationEndpointInstanceType',
        'destinationEndpointOracleSID' => 'DestinationEndpointOracleSID',
        'destinationEndpointOwnerID' => 'DestinationEndpointOwnerID',
        'destinationEndpointPassword' => 'DestinationEndpointPassword',
        'destinationEndpointPort' => 'DestinationEndpointPort',
        'destinationEndpointRegion' => 'DestinationEndpointRegion',
        'destinationEndpointRole' => 'DestinationEndpointRole',
        'destinationEndpointUserName' => 'DestinationEndpointUserName',
        'disasterRecoveryJob' => 'DisasterRecoveryJob',
        'dtsBisLabel' => 'DtsBisLabel',
        'dtsInstanceId' => 'DtsInstanceId',
        'dtsJobId' => 'DtsJobId',
        'dtsJobName' => 'DtsJobName',
        'errorNotice' => 'ErrorNotice',
        'errorPhone' => 'ErrorPhone',
        'fileOssUrlObject' => 'FileOssUrl',
        'jobType' => 'JobType',
        'maxDu' => 'MaxDu',
        'minDu' => 'MinDu',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'reserve' => 'Reserve',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceEndpointDatabaseName' => 'SourceEndpointDatabaseName',
        'sourceEndpointEngineName' => 'SourceEndpointEngineName',
        'sourceEndpointIP' => 'SourceEndpointIP',
        'sourceEndpointInstanceID' => 'SourceEndpointInstanceID',
        'sourceEndpointInstanceType' => 'SourceEndpointInstanceType',
        'sourceEndpointOracleSID' => 'SourceEndpointOracleSID',
        'sourceEndpointOwnerID' => 'SourceEndpointOwnerID',
        'sourceEndpointPassword' => 'SourceEndpointPassword',
        'sourceEndpointPort' => 'SourceEndpointPort',
        'sourceEndpointRegion' => 'SourceEndpointRegion',
        'sourceEndpointRole' => 'SourceEndpointRole',
        'sourceEndpointUserName' => 'SourceEndpointUserName',
        'sourceEndpointVSwitchID' => 'SourceEndpointVSwitchID',
        'srcCaCertificateOssUrl' => 'SrcCaCertificateOssUrl',
        'srcCaCertificatePassword' => 'SrcCaCertificatePassword',
        'srcClientCertOssUrl' => 'SrcClientCertOssUrl',
        'srcClientKeyOssUrl' => 'SrcClientKeyOssUrl',
        'srcClientPassword' => 'SrcClientPassword',
        'srcPrimaryVswId' => 'SrcPrimaryVswId',
        'srcSecondaryVswId' => 'SrcSecondaryVswId',
        'structureInitialization' => 'StructureInitialization',
        'synchronizationDirection' => 'SynchronizationDirection',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }

        if (null !== $this->dataCheckConfigure) {
            $res['DataCheckConfigure'] = $this->dataCheckConfigure;
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

        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
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

        if (null !== $this->destCaCertificateOssUrl) {
            $res['DestCaCertificateOssUrl'] = $this->destCaCertificateOssUrl;
        }

        if (null !== $this->destCaCertificatePassword) {
            $res['DestCaCertificatePassword'] = $this->destCaCertificatePassword;
        }

        if (null !== $this->destClientCertOssUrl) {
            $res['DestClientCertOssUrl'] = $this->destClientCertOssUrl;
        }

        if (null !== $this->destClientKeyOssUrl) {
            $res['DestClientKeyOssUrl'] = $this->destClientKeyOssUrl;
        }

        if (null !== $this->destClientPassword) {
            $res['DestClientPassword'] = $this->destClientPassword;
        }

        if (null !== $this->destPrimaryVswId) {
            $res['DestPrimaryVswId'] = $this->destPrimaryVswId;
        }

        if (null !== $this->destSecondaryVswId) {
            $res['DestSecondaryVswId'] = $this->destSecondaryVswId;
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

        if (null !== $this->destinationEndpointOwnerID) {
            $res['DestinationEndpointOwnerID'] = $this->destinationEndpointOwnerID;
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

        if (null !== $this->destinationEndpointRole) {
            $res['DestinationEndpointRole'] = $this->destinationEndpointRole;
        }

        if (null !== $this->destinationEndpointUserName) {
            $res['DestinationEndpointUserName'] = $this->destinationEndpointUserName;
        }

        if (null !== $this->disasterRecoveryJob) {
            $res['DisasterRecoveryJob'] = $this->disasterRecoveryJob;
        }

        if (null !== $this->dtsBisLabel) {
            $res['DtsBisLabel'] = $this->dtsBisLabel;
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

        if (null !== $this->fileOssUrlObject) {
            $res['FileOssUrl'] = $this->fileOssUrlObject;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->maxDu) {
            $res['MaxDu'] = $this->maxDu;
        }

        if (null !== $this->minDu) {
            $res['MinDu'] = $this->minDu;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        if (null !== $this->sourceEndpointVSwitchID) {
            $res['SourceEndpointVSwitchID'] = $this->sourceEndpointVSwitchID;
        }

        if (null !== $this->srcCaCertificateOssUrl) {
            $res['SrcCaCertificateOssUrl'] = $this->srcCaCertificateOssUrl;
        }

        if (null !== $this->srcCaCertificatePassword) {
            $res['SrcCaCertificatePassword'] = $this->srcCaCertificatePassword;
        }

        if (null !== $this->srcClientCertOssUrl) {
            $res['SrcClientCertOssUrl'] = $this->srcClientCertOssUrl;
        }

        if (null !== $this->srcClientKeyOssUrl) {
            $res['SrcClientKeyOssUrl'] = $this->srcClientKeyOssUrl;
        }

        if (null !== $this->srcClientPassword) {
            $res['SrcClientPassword'] = $this->srcClientPassword;
        }

        if (null !== $this->srcPrimaryVswId) {
            $res['SrcPrimaryVswId'] = $this->srcPrimaryVswId;
        }

        if (null !== $this->srcSecondaryVswId) {
            $res['SrcSecondaryVswId'] = $this->srcSecondaryVswId;
        }

        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = $this->structureInitialization;
        }

        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
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
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }

        if (isset($map['DataCheckConfigure'])) {
            $model->dataCheckConfigure = $map['DataCheckConfigure'];
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

        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
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

        if (isset($map['DestCaCertificateOssUrl'])) {
            $model->destCaCertificateOssUrl = $map['DestCaCertificateOssUrl'];
        }

        if (isset($map['DestCaCertificatePassword'])) {
            $model->destCaCertificatePassword = $map['DestCaCertificatePassword'];
        }

        if (isset($map['DestClientCertOssUrl'])) {
            $model->destClientCertOssUrl = $map['DestClientCertOssUrl'];
        }

        if (isset($map['DestClientKeyOssUrl'])) {
            $model->destClientKeyOssUrl = $map['DestClientKeyOssUrl'];
        }

        if (isset($map['DestClientPassword'])) {
            $model->destClientPassword = $map['DestClientPassword'];
        }

        if (isset($map['DestPrimaryVswId'])) {
            $model->destPrimaryVswId = $map['DestPrimaryVswId'];
        }

        if (isset($map['DestSecondaryVswId'])) {
            $model->destSecondaryVswId = $map['DestSecondaryVswId'];
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

        if (isset($map['DestinationEndpointOwnerID'])) {
            $model->destinationEndpointOwnerID = $map['DestinationEndpointOwnerID'];
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

        if (isset($map['DestinationEndpointRole'])) {
            $model->destinationEndpointRole = $map['DestinationEndpointRole'];
        }

        if (isset($map['DestinationEndpointUserName'])) {
            $model->destinationEndpointUserName = $map['DestinationEndpointUserName'];
        }

        if (isset($map['DisasterRecoveryJob'])) {
            $model->disasterRecoveryJob = $map['DisasterRecoveryJob'];
        }

        if (isset($map['DtsBisLabel'])) {
            $model->dtsBisLabel = $map['DtsBisLabel'];
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

        if (isset($map['FileOssUrl'])) {
            $model->fileOssUrlObject = $map['FileOssUrl'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['MaxDu'])) {
            $model->maxDu = $map['MaxDu'];
        }

        if (isset($map['MinDu'])) {
            $model->minDu = $map['MinDu'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        if (isset($map['SourceEndpointVSwitchID'])) {
            $model->sourceEndpointVSwitchID = $map['SourceEndpointVSwitchID'];
        }

        if (isset($map['SrcCaCertificateOssUrl'])) {
            $model->srcCaCertificateOssUrl = $map['SrcCaCertificateOssUrl'];
        }

        if (isset($map['SrcCaCertificatePassword'])) {
            $model->srcCaCertificatePassword = $map['SrcCaCertificatePassword'];
        }

        if (isset($map['SrcClientCertOssUrl'])) {
            $model->srcClientCertOssUrl = $map['SrcClientCertOssUrl'];
        }

        if (isset($map['SrcClientKeyOssUrl'])) {
            $model->srcClientKeyOssUrl = $map['SrcClientKeyOssUrl'];
        }

        if (isset($map['SrcClientPassword'])) {
            $model->srcClientPassword = $map['SrcClientPassword'];
        }

        if (isset($map['SrcPrimaryVswId'])) {
            $model->srcPrimaryVswId = $map['SrcPrimaryVswId'];
        }

        if (isset($map['SrcSecondaryVswId'])) {
            $model->srcSecondaryVswId = $map['SrcSecondaryVswId'];
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
