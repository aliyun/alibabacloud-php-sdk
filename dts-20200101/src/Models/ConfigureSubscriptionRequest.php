<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ConfigureSubscriptionRequest extends Model
{
    /**
     * @var string
     */
    public $checkpoint;
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
     * @var bool
     */
    public $subscriptionDataTypeDDL;
    /**
     * @var bool
     */
    public $subscriptionDataTypeDML;
    /**
     * @var string
     */
    public $subscriptionInstanceNetworkType;
    /**
     * @var string
     */
    public $subscriptionInstanceVPCId;
    /**
     * @var string
     */
    public $subscriptionInstanceVSwitchId;
    protected $_name = [
        'checkpoint'                      => 'Checkpoint',
        'dbList'                          => 'DbList',
        'dedicatedClusterId'              => 'DedicatedClusterId',
        'delayNotice'                     => 'DelayNotice',
        'delayPhone'                      => 'DelayPhone',
        'delayRuleTime'                   => 'DelayRuleTime',
        'dtsBisLabel'                     => 'DtsBisLabel',
        'dtsInstanceId'                   => 'DtsInstanceId',
        'dtsJobId'                        => 'DtsJobId',
        'dtsJobName'                      => 'DtsJobName',
        'errorNotice'                     => 'ErrorNotice',
        'errorPhone'                      => 'ErrorPhone',
        'maxDu'                           => 'MaxDu',
        'minDu'                           => 'MinDu',
        'regionId'                        => 'RegionId',
        'reserve'                         => 'Reserve',
        'resourceGroupId'                 => 'ResourceGroupId',
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
        'srcCaCertificateOssUrl'          => 'SrcCaCertificateOssUrl',
        'srcCaCertificatePassword'        => 'SrcCaCertificatePassword',
        'srcClientCertOssUrl'             => 'SrcClientCertOssUrl',
        'srcClientKeyOssUrl'              => 'SrcClientKeyOssUrl',
        'srcClientPassword'               => 'SrcClientPassword',
        'subscriptionDataTypeDDL'         => 'SubscriptionDataTypeDDL',
        'subscriptionDataTypeDML'         => 'SubscriptionDataTypeDML',
        'subscriptionInstanceNetworkType' => 'SubscriptionInstanceNetworkType',
        'subscriptionInstanceVPCId'       => 'SubscriptionInstanceVPCId',
        'subscriptionInstanceVSwitchId'   => 'SubscriptionInstanceVSwitchId',
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

        if (null !== $this->maxDu) {
            $res['MaxDu'] = $this->maxDu;
        }

        if (null !== $this->minDu) {
            $res['MinDu'] = $this->minDu;
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

        if (null !== $this->subscriptionDataTypeDDL) {
            $res['SubscriptionDataTypeDDL'] = $this->subscriptionDataTypeDDL;
        }

        if (null !== $this->subscriptionDataTypeDML) {
            $res['SubscriptionDataTypeDML'] = $this->subscriptionDataTypeDML;
        }

        if (null !== $this->subscriptionInstanceNetworkType) {
            $res['SubscriptionInstanceNetworkType'] = $this->subscriptionInstanceNetworkType;
        }

        if (null !== $this->subscriptionInstanceVPCId) {
            $res['SubscriptionInstanceVPCId'] = $this->subscriptionInstanceVPCId;
        }

        if (null !== $this->subscriptionInstanceVSwitchId) {
            $res['SubscriptionInstanceVSwitchId'] = $this->subscriptionInstanceVSwitchId;
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

        if (isset($map['MaxDu'])) {
            $model->maxDu = $map['MaxDu'];
        }

        if (isset($map['MinDu'])) {
            $model->minDu = $map['MinDu'];
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

        if (isset($map['SubscriptionDataTypeDDL'])) {
            $model->subscriptionDataTypeDDL = $map['SubscriptionDataTypeDDL'];
        }

        if (isset($map['SubscriptionDataTypeDML'])) {
            $model->subscriptionDataTypeDML = $map['SubscriptionDataTypeDML'];
        }

        if (isset($map['SubscriptionInstanceNetworkType'])) {
            $model->subscriptionInstanceNetworkType = $map['SubscriptionInstanceNetworkType'];
        }

        if (isset($map['SubscriptionInstanceVPCId'])) {
            $model->subscriptionInstanceVPCId = $map['SubscriptionInstanceVPCId'];
        }

        if (isset($map['SubscriptionInstanceVSwitchId'])) {
            $model->subscriptionInstanceVSwitchId = $map['SubscriptionInstanceVSwitchId'];
        }

        return $model;
    }
}
