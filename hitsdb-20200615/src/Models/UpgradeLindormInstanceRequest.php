<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Tea\Model;

class UpgradeLindormInstanceRequest extends Model
{
    /**
     * @example 480
     *
     * @var int
     */
    public $clusterStorage;

    /**
     * @example 800
     *
     * @var int
     */
    public $coldStorage;

    /**
     * @var int
     */
    public $coreSingleStorage;

    /**
     * @example 2
     *
     * @var int
     */
    public $filestoreNum;

    /**
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $filestoreSpec;

    /**
     * @example ld-bp1o3y0yme2i2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 2
     *
     * @var int
     */
    public $lindormNum;

    /**
     * @example lindorm.c.xlarge
     *
     * @var string
     */
    public $lindormSpec;

    /**
     * @example 4
     *
     * @var int
     */
    public $logNum;

    /**
     * @var int
     */
    public $logSingleStorage;

    /**
     * @example lindorm.sn1.large
     *
     * @var string
     */
    public $logSpec;

    /**
     * @example 2
     *
     * @var int
     */
    public $ltsCoreNum;

    /**
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $ltsCoreSpec;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 2
     *
     * @var int
     */
    public $phoenixCoreNum;

    /**
     * @example lindorm.c.xlarge
     *
     * @var string
     */
    public $phoenixCoreSpec;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example 2
     *
     * @var int
     */
    public $solrNum;

    /**
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $solrSpec;

    /**
     * @description 变配后实例的流引擎节点数量，取值：**0**~**90**。
     *
     * @example 2
     *
     * @var int
     */
    public $streamNum;

    /**
     * @description 变配后实例的流引擎节点规格，取值：
     *
     * - **lindorm.c.2xlarge**：表示8核16GB（独享规格）。
     * - **lindorm.c.4xlarge**：表示16核32GB（独享规格）。
     * - **lindorm.c.8xlarge**：表示32核64GB（独享规格）。
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $streamSpec;

    /**
     * @example 2
     *
     * @var int
     */
    public $tsdbNum;

    /**
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $tsdbSpec;

    /**
     * @example upgrade-cold-storage
     *
     * @var string
     */
    public $upgradeType;

    /**
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterStorage'       => 'ClusterStorage',
        'coldStorage'          => 'ColdStorage',
        'coreSingleStorage'    => 'CoreSingleStorage',
        'filestoreNum'         => 'FilestoreNum',
        'filestoreSpec'        => 'FilestoreSpec',
        'instanceId'           => 'InstanceId',
        'lindormNum'           => 'LindormNum',
        'lindormSpec'          => 'LindormSpec',
        'logNum'               => 'LogNum',
        'logSingleStorage'     => 'LogSingleStorage',
        'logSpec'              => 'LogSpec',
        'ltsCoreNum'           => 'LtsCoreNum',
        'ltsCoreSpec'          => 'LtsCoreSpec',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'phoenixCoreNum'       => 'PhoenixCoreNum',
        'phoenixCoreSpec'      => 'PhoenixCoreSpec',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'solrNum'              => 'SolrNum',
        'solrSpec'             => 'SolrSpec',
        'streamNum'            => 'StreamNum',
        'streamSpec'           => 'StreamSpec',
        'tsdbNum'              => 'TsdbNum',
        'tsdbSpec'             => 'TsdbSpec',
        'upgradeType'          => 'UpgradeType',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStorage) {
            $res['ClusterStorage'] = $this->clusterStorage;
        }
        if (null !== $this->coldStorage) {
            $res['ColdStorage'] = $this->coldStorage;
        }
        if (null !== $this->coreSingleStorage) {
            $res['CoreSingleStorage'] = $this->coreSingleStorage;
        }
        if (null !== $this->filestoreNum) {
            $res['FilestoreNum'] = $this->filestoreNum;
        }
        if (null !== $this->filestoreSpec) {
            $res['FilestoreSpec'] = $this->filestoreSpec;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lindormNum) {
            $res['LindormNum'] = $this->lindormNum;
        }
        if (null !== $this->lindormSpec) {
            $res['LindormSpec'] = $this->lindormSpec;
        }
        if (null !== $this->logNum) {
            $res['LogNum'] = $this->logNum;
        }
        if (null !== $this->logSingleStorage) {
            $res['LogSingleStorage'] = $this->logSingleStorage;
        }
        if (null !== $this->logSpec) {
            $res['LogSpec'] = $this->logSpec;
        }
        if (null !== $this->ltsCoreNum) {
            $res['LtsCoreNum'] = $this->ltsCoreNum;
        }
        if (null !== $this->ltsCoreSpec) {
            $res['LtsCoreSpec'] = $this->ltsCoreSpec;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoenixCoreNum) {
            $res['PhoenixCoreNum'] = $this->phoenixCoreNum;
        }
        if (null !== $this->phoenixCoreSpec) {
            $res['PhoenixCoreSpec'] = $this->phoenixCoreSpec;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->solrNum) {
            $res['SolrNum'] = $this->solrNum;
        }
        if (null !== $this->solrSpec) {
            $res['SolrSpec'] = $this->solrSpec;
        }
        if (null !== $this->streamNum) {
            $res['StreamNum'] = $this->streamNum;
        }
        if (null !== $this->streamSpec) {
            $res['StreamSpec'] = $this->streamSpec;
        }
        if (null !== $this->tsdbNum) {
            $res['TsdbNum'] = $this->tsdbNum;
        }
        if (null !== $this->tsdbSpec) {
            $res['TsdbSpec'] = $this->tsdbSpec;
        }
        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeLindormInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStorage'])) {
            $model->clusterStorage = $map['ClusterStorage'];
        }
        if (isset($map['ColdStorage'])) {
            $model->coldStorage = $map['ColdStorage'];
        }
        if (isset($map['CoreSingleStorage'])) {
            $model->coreSingleStorage = $map['CoreSingleStorage'];
        }
        if (isset($map['FilestoreNum'])) {
            $model->filestoreNum = $map['FilestoreNum'];
        }
        if (isset($map['FilestoreSpec'])) {
            $model->filestoreSpec = $map['FilestoreSpec'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LindormNum'])) {
            $model->lindormNum = $map['LindormNum'];
        }
        if (isset($map['LindormSpec'])) {
            $model->lindormSpec = $map['LindormSpec'];
        }
        if (isset($map['LogNum'])) {
            $model->logNum = $map['LogNum'];
        }
        if (isset($map['LogSingleStorage'])) {
            $model->logSingleStorage = $map['LogSingleStorage'];
        }
        if (isset($map['LogSpec'])) {
            $model->logSpec = $map['LogSpec'];
        }
        if (isset($map['LtsCoreNum'])) {
            $model->ltsCoreNum = $map['LtsCoreNum'];
        }
        if (isset($map['LtsCoreSpec'])) {
            $model->ltsCoreSpec = $map['LtsCoreSpec'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoenixCoreNum'])) {
            $model->phoenixCoreNum = $map['PhoenixCoreNum'];
        }
        if (isset($map['PhoenixCoreSpec'])) {
            $model->phoenixCoreSpec = $map['PhoenixCoreSpec'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SolrNum'])) {
            $model->solrNum = $map['SolrNum'];
        }
        if (isset($map['SolrSpec'])) {
            $model->solrSpec = $map['SolrSpec'];
        }
        if (isset($map['StreamNum'])) {
            $model->streamNum = $map['StreamNum'];
        }
        if (isset($map['StreamSpec'])) {
            $model->streamSpec = $map['StreamSpec'];
        }
        if (isset($map['TsdbNum'])) {
            $model->tsdbNum = $map['TsdbNum'];
        }
        if (isset($map['TsdbSpec'])) {
            $model->tsdbSpec = $map['TsdbSpec'];
        }
        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
