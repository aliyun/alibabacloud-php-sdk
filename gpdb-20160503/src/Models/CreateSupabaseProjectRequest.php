<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateSupabaseProjectRequest extends Model
{
    /**
     * @var string
     */
    public $accountPassword;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $diskPerformanceLevel;

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
    public $projectName;

    /**
     * @var string
     */
    public $projectSpec;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var string
     */
    public $usedTime;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountPassword' => 'AccountPassword',
        'clientToken' => 'ClientToken',
        'diskPerformanceLevel' => 'DiskPerformanceLevel',
        'payType' => 'PayType',
        'period' => 'Period',
        'projectName' => 'ProjectName',
        'projectSpec' => 'ProjectSpec',
        'regionId' => 'RegionId',
        'securityIPList' => 'SecurityIPList',
        'storageSize' => 'StorageSize',
        'usedTime' => 'UsedTime',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->diskPerformanceLevel) {
            $res['DiskPerformanceLevel'] = $this->diskPerformanceLevel;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->projectSpec) {
            $res['ProjectSpec'] = $this->projectSpec;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DiskPerformanceLevel'])) {
            $model->diskPerformanceLevel = $map['DiskPerformanceLevel'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['ProjectSpec'])) {
            $model->projectSpec = $map['ProjectSpec'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
