<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class EnableHBaseueModuleRequest extends Model
{
    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $bdsId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $coreInstanceType;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $hbaseueClusterId;

    /**
     * @var string
     */
    public $masterInstanceType;

    /**
     * @var string
     */
    public $moduleClusterName;

    /**
     * @var string
     */
    public $moduleTypeName;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenewPeriod'    => 'AutoRenewPeriod',
        'bdsId'              => 'BdsId',
        'clientToken'        => 'ClientToken',
        'coreInstanceType'   => 'CoreInstanceType',
        'diskSize'           => 'DiskSize',
        'diskType'           => 'DiskType',
        'hbaseueClusterId'   => 'HbaseueClusterId',
        'masterInstanceType' => 'MasterInstanceType',
        'moduleClusterName'  => 'ModuleClusterName',
        'moduleTypeName'     => 'ModuleTypeName',
        'nodeCount'          => 'NodeCount',
        'payType'            => 'PayType',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'regionId'           => 'RegionId',
        'vpcId'              => 'VpcId',
        'vswitchId'          => 'VswitchId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->bdsId) {
            $res['BdsId'] = $this->bdsId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->hbaseueClusterId) {
            $res['HbaseueClusterId'] = $this->hbaseueClusterId;
        }
        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }
        if (null !== $this->moduleClusterName) {
            $res['ModuleClusterName'] = $this->moduleClusterName;
        }
        if (null !== $this->moduleTypeName) {
            $res['ModuleTypeName'] = $this->moduleTypeName;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableHBaseueModuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['BdsId'])) {
            $model->bdsId = $map['BdsId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['HbaseueClusterId'])) {
            $model->hbaseueClusterId = $map['HbaseueClusterId'];
        }
        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }
        if (isset($map['ModuleClusterName'])) {
            $model->moduleClusterName = $map['ModuleClusterName'];
        }
        if (isset($map['ModuleTypeName'])) {
            $model->moduleTypeName = $map['ModuleTypeName'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
