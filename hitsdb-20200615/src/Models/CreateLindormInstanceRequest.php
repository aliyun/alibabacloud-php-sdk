<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Tea\Model;

class CreateLindormInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $coldStorage;

    /**
     * @var string
     */
    public $coreSpec;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var int
     */
    public $filestoreNum;

    /**
     * @var string
     */
    public $filestoreSpec;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var string
     */
    public $instanceStorage;

    /**
     * @var int
     */
    public $lindormNum;

    /**
     * @var string
     */
    public $lindormSpec;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
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
     * @var int
     */
    public $solrNum;

    /**
     * @var string
     */
    public $solrSpec;

    /**
     * @var int
     */
    public $tsdbNum;

    /**
     * @var string
     */
    public $tsdbSpec;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'coldStorage'          => 'ColdStorage',
        'coreSpec'             => 'CoreSpec',
        'diskCategory'         => 'DiskCategory',
        'duration'             => 'Duration',
        'filestoreNum'         => 'FilestoreNum',
        'filestoreSpec'        => 'FilestoreSpec',
        'instanceAlias'        => 'InstanceAlias',
        'instanceStorage'      => 'InstanceStorage',
        'lindormNum'           => 'LindormNum',
        'lindormSpec'          => 'LindormSpec',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'payType'              => 'PayType',
        'pricingCycle'         => 'PricingCycle',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'solrNum'              => 'SolrNum',
        'solrSpec'             => 'SolrSpec',
        'tsdbNum'              => 'TsdbNum',
        'tsdbSpec'             => 'TsdbSpec',
        'VPCId'                => 'VPCId',
        'vSwitchId'            => 'VSwitchId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldStorage) {
            $res['ColdStorage'] = $this->coldStorage;
        }
        if (null !== $this->coreSpec) {
            $res['CoreSpec'] = $this->coreSpec;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->filestoreNum) {
            $res['FilestoreNum'] = $this->filestoreNum;
        }
        if (null !== $this->filestoreSpec) {
            $res['FilestoreSpec'] = $this->filestoreSpec;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceStorage) {
            $res['InstanceStorage'] = $this->instanceStorage;
        }
        if (null !== $this->lindormNum) {
            $res['LindormNum'] = $this->lindormNum;
        }
        if (null !== $this->lindormSpec) {
            $res['LindormSpec'] = $this->lindormSpec;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
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
        if (null !== $this->tsdbNum) {
            $res['TsdbNum'] = $this->tsdbNum;
        }
        if (null !== $this->tsdbSpec) {
            $res['TsdbSpec'] = $this->tsdbSpec;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLindormInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColdStorage'])) {
            $model->coldStorage = $map['ColdStorage'];
        }
        if (isset($map['CoreSpec'])) {
            $model->coreSpec = $map['CoreSpec'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FilestoreNum'])) {
            $model->filestoreNum = $map['FilestoreNum'];
        }
        if (isset($map['FilestoreSpec'])) {
            $model->filestoreSpec = $map['FilestoreSpec'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceStorage'])) {
            $model->instanceStorage = $map['InstanceStorage'];
        }
        if (isset($map['LindormNum'])) {
            $model->lindormNum = $map['LindormNum'];
        }
        if (isset($map['LindormSpec'])) {
            $model->lindormSpec = $map['LindormSpec'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
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
        if (isset($map['TsdbNum'])) {
            $model->tsdbNum = $map['TsdbNum'];
        }
        if (isset($map['TsdbSpec'])) {
            $model->tsdbSpec = $map['TsdbSpec'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
