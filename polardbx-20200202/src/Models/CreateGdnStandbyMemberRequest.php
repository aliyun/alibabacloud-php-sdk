<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class CreateGdnStandbyMemberRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $CNNodeCount;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cloneInstanceName;

    /**
     * @var string
     */
    public $cnClass;

    /**
     * @var string
     */
    public $DNNodeCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dnClass;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $primaryZone;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $secondaryZone;

    /**
     * @var string
     */
    public $series;

    /**
     * @var string
     */
    public $sourceInstanceRegion;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $tertiaryZone;

    /**
     * @var string
     */
    public $topologyType;

    /**
     * @var int
     */
    public $usedTime;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'CNNodeCount' => 'CNNodeCount',
        'clientToken' => 'ClientToken',
        'cloneInstanceName' => 'CloneInstanceName',
        'cnClass' => 'CnClass',
        'DNNodeCount' => 'DNNodeCount',
        'description' => 'Description',
        'dnClass' => 'DnClass',
        'engineVersion' => 'EngineVersion',
        'networkType' => 'NetworkType',
        'payType' => 'PayType',
        'period' => 'Period',
        'primaryZone' => 'PrimaryZone',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'secondaryZone' => 'SecondaryZone',
        'series' => 'Series',
        'sourceInstanceRegion' => 'SourceInstanceRegion',
        'storageType' => 'StorageType',
        'tertiaryZone' => 'TertiaryZone',
        'topologyType' => 'TopologyType',
        'usedTime' => 'UsedTime',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->CNNodeCount) {
            $res['CNNodeCount'] = $this->CNNodeCount;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->cloneInstanceName) {
            $res['CloneInstanceName'] = $this->cloneInstanceName;
        }

        if (null !== $this->cnClass) {
            $res['CnClass'] = $this->cnClass;
        }

        if (null !== $this->DNNodeCount) {
            $res['DNNodeCount'] = $this->DNNodeCount;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dnClass) {
            $res['DnClass'] = $this->dnClass;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->secondaryZone) {
            $res['SecondaryZone'] = $this->secondaryZone;
        }

        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }

        if (null !== $this->sourceInstanceRegion) {
            $res['SourceInstanceRegion'] = $this->sourceInstanceRegion;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->tertiaryZone) {
            $res['TertiaryZone'] = $this->tertiaryZone;
        }

        if (null !== $this->topologyType) {
            $res['TopologyType'] = $this->topologyType;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['CNNodeCount'])) {
            $model->CNNodeCount = $map['CNNodeCount'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CloneInstanceName'])) {
            $model->cloneInstanceName = $map['CloneInstanceName'];
        }

        if (isset($map['CnClass'])) {
            $model->cnClass = $map['CnClass'];
        }

        if (isset($map['DNNodeCount'])) {
            $model->DNNodeCount = $map['DNNodeCount'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DnClass'])) {
            $model->dnClass = $map['DnClass'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecondaryZone'])) {
            $model->secondaryZone = $map['SecondaryZone'];
        }

        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }

        if (isset($map['SourceInstanceRegion'])) {
            $model->sourceInstanceRegion = $map['SourceInstanceRegion'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['TertiaryZone'])) {
            $model->tertiaryZone = $map['TertiaryZone'];
        }

        if (isset($map['TopologyType'])) {
            $model->topologyType = $map['TopologyType'];
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
