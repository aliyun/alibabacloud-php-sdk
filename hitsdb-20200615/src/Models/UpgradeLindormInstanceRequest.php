<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Tea\Model;

class UpgradeLindormInstanceRequest extends Model
{
    /**
     * @description The storage capacity of the instance after it is upgraded. Unit: GB. Valid values: **480** to **1017600**.
     *
     * @example 480
     *
     * @var int
     */
    public $clusterStorage;

    /**
     * @description The cold storage capacity of the instance after it is upgraded. Unit: GB. Valid values: **800** to **1000000**.
     *
     * @example 800
     *
     * @var int
     */
    public $coldStorage;

    /**
     * @description The storage capacity of a single core node in the instance after the instance upgraded. This parameter is available only if the instance you want to upgrade is a multi-zone instance. Unit: GB. Valid values: 400 to 64000. **This parameter is optional**.
     *
     * @example 400
     *
     * @var int
     */
    public $coreSingleStorage;

    /**
     * @description The number of LindormDFS nodes in the instance after the instance is upgraded. Valid values: integers from **0** to **60**.
     *
     * @example 2
     *
     * @var int
     */
    public $filestoreNum;

    /**
     * @description The specification of LindormDFS nodes in the instance after the instance is upgraded. Valid values:
     *
     *   **lindorm.g.xlarge**: Each node has 4 dedicated CPU cores and 16 GB of dedicated memory.
     *   **lindorm.g.2xlarge**: Each node has 8 dedicated CPU cores and 32 GB of dedicated memory.
     *   **lindorm.g.4xlarge**: Each node has 16 dedicated CPU cores and 64 GB of dedicated memory.
     *   **lindorm.g.8xlarge**: Each node has 32 dedicated CPU cores and 128 GB of dedicated memory.
     *
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $filestoreSpec;

    /**
     * @description The ID of the instance that you want to upgrade, scale up, or enable cold storage. You can call the [GetLindormInstanceList](~~426069~~) operation to query the instance ID.
     *
     * @example ld-bp1o3y0yme2i2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of LindormTable nodes in the instance after the instance is upgraded. Valid values: integers from **0** to **90**.
     *
     * > This parameter must be specified together with the LindormSpec parameter.
     * @example 2
     *
     * @var int
     */
    public $lindormNum;

    /**
     * @description The specification of LindormTable nodes in the instance after the instance is upgraded. Valid values:
     *
     *   **lindorm.c.xlarge**: Each node has 4 dedicated CPU cores and 8 GB of dedicated memory.
     *   **lindorm.c.2xlarge**: Each node has 8 dedicated CPU cores and 16 GB of dedicated memory.
     *   **lindorm.c.4xlarge**: Each node has 16 dedicated CPU cores and 32 GB of dedicated memory.
     *   **lindorm.c.8xlarge**: Each node has 32 dedicated CPU cores and 64 GB of dedicated memory.
     *
     * @example lindorm.c.xlarge
     *
     * @var string
     */
    public $lindormSpec;

    /**
     * @description The number of log nodes in the instance after the instance is upgraded. This parameter is available only if the instance you want to upgrade is a multi-zone instance. **This parameter is optional**.
     *
     * @example 4
     *
     * @var int
     */
    public $logNum;

    /**
     * @description The storage capacity of a single log node in the instance after the instance upgraded. This parameter is available only if the instance you want to upgrade is a multi-zone instance. **This parameter is optional**.
     *
     * @example 400
     *
     * @var int
     */
    public $logSingleStorage;

    /**
     * @description The specification of log nodes in the instance after the instance is upgraded. This parameter is available only if the instance you want to upgrade is a multi-zone instance. Valid values:
     *
     *   **lindorm.sn1.large**: Each node has 4 dedicated CPU cores and 8 GB of dedicated memory.
     *   **lindorm.sn1.2xlarge**: Each node has 8 dedicated CPU cores and 16 GB of dedicated memory.
     *
     **This parameter is optional**.
     *
     * @example lindorm.sn1.large
     *
     * @var string
     */
    public $logSpec;

    /**
     * @description The number of LTS nodes in the instance after the instance is upgraded. Valid values: integers from **0** to **50**.
     *
     * @example 2
     *
     * @var int
     */
    public $ltsCoreNum;

    /**
     * @description The specification of Lindorm Tunnel Service (LTS) nodes in the instance after the instance is upgraded. Valid values:
     *
     *   **lindorm.g.xlarge**: Each node has 4 dedicated CPU cores and 16 GB of dedicated memory.
     *   **lindorm.g.2xlarge**: Each node has 8 dedicated CPU cores and 32 GB of dedicated memory.
     *
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
     * @description The ID of the region in which the instance that you want to upgrade, scale up, or enable cold storage is located. You can call the [DescribeRegions](~~426062~~) operation to query the region ID.
     *
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
     * @description The number of LindormSearch nodes in the instance after the instance is upgraded. Valid values: integers from **0** to **60**.
     *
     * @example 2
     *
     * @var int
     */
    public $solrNum;

    /**
     * @description The specification of LindormSearch nodes in the instance after the instance is upgraded. Valid values:
     *
     *   **lindorm.g.xlarge**: Each node has 4 dedicated CPU cores and 16 GB of dedicated memory.
     *   **lindorm.g.2xlarge**: Each node has 8 dedicated CPU cores and 32 GB of dedicated memory.
     *   **lindorm.g.4xlarge**: Each node has 16 dedicated CPU cores and 64 GB of dedicated memory.
     *   **lindorm.g.8xlarge**: Each node has 32 dedicated CPU cores and 128 GB of dedicated memory.
     *
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $solrSpec;

    /**
     * @description The number of LindormStream nodes in the instance after the instance is upgraded. Valid values: integers from **0** to **60**.
     *
     * @example 2
     *
     * @var int
     */
    public $streamNum;

    /**
     * @description The specification of LindormStream nodes in the instance after the instance is upgraded. Valid values:
     *
     *   **lindorm.g.xlarge**: Each node has 4 dedicated CPU cores and 16 GB of dedicated memory.
     *   **lindorm.g.2xlarge**: Each node has 8 dedicated CPU cores and 32 GB of dedicated memory.
     *   **lindorm.g.4xlarge**: Each node has 16 dedicated CPU cores and 64 GB of dedicated memory.
     *   **lindorm.g.8xlarge**: Each node has 32 dedicated CPU cores and 128 GB of dedicated memory.
     *
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $streamSpec;

    /**
     * @description The number of LindormTSDB nodes in the instance after the instance is upgraded. Valid values: integers from **0** to **24**.
     *
     * @example 2
     *
     * @var int
     */
    public $tsdbNum;

    /**
     * @description The specification of LindormTSDB nodes in the instance after the instance is upgraded. Valid values:
     *
     *   **lindorm.g.xlarge**: Each node has 4 dedicated CPU cores and 16 GB of dedicated memory.
     *   **lindorm.g.2xlarge**: Each node has 8 dedicated CPU cores and 32 GB of dedicated memory.
     *   **lindorm.g.4xlarge**: Each node has 16 dedicated CPU cores and 64 GB of dedicated memory.
     *   **lindorm.g.8xlarge**: Each node has 32 dedicated CPU cores and 128 GB of dedicated memory.
     *
     * @example lindorm.g.xlarge
     *
     * @var string
     */
    public $tsdbSpec;

    /**
     * @description The upgrade type of the operation. For more information about upgrade types, see the UpgradeType parameters section.
     *
     * @example upgrade-cold-storage
     *
     * @var string
     */
    public $upgradeType;

    /**
     * @description The ID of the zone in which the instance that you want to upgrade, scale up, or enable cold storage is located. You can call the [GetLindormInstance](~~426067~~) operation to query the zone ID.
     *
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
