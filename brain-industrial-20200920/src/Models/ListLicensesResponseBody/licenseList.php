<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLicensesResponseBody;

use AlibabaCloud\Tea\Model;

class licenseList extends Model
{
    /**
     * @example 2024-10-14 14:15:45
     *
     * @var string
     */
    public $activateTime;

    /**
     * @var int
     */
    public $adaptiveMachine;

    /**
     * @var string
     */
    public $allDuration;

    /**
     * @example 2024-10-14 13:17:20
     *
     * @var string
     */
    public $buyTime;

    /**
     * @example 72
     *
     * @var int
     */
    public $cpuLimit;

    /**
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $duration;

    /**
     * @example 2024-10-14 14:15:45
     *
     * @var string
     */
    public $effectTime;

    /**
     * @example 2025-10-14 14:15:45
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @example 451f14ee73604aesdfe4da606764ce09
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example aics_1000
     *
     * @var string
     */
    public $licenseSpecCode;

    /**
     * @var string
     */
    public $licenseSpecName;

    /**
     * @example brainindustrial_aicsruntime_public_cn
     *
     * @var string
     */
    public $licenseSpecType;

    /**
     * @example 256
     *
     * @var int
     */
    public $memoryLimit;

    /**
     * @example activated
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $unActivateAllDuration;
    protected $_name = [
        'activateTime' => 'ActivateTime',
        'adaptiveMachine' => 'AdaptiveMachine',
        'allDuration' => 'AllDuration',
        'buyTime' => 'BuyTime',
        'cpuLimit' => 'CpuLimit',
        'description' => 'Description',
        'duration' => 'Duration',
        'effectTime' => 'EffectTime',
        'expireTime' => 'ExpireTime',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'licenseSpecCode' => 'LicenseSpecCode',
        'licenseSpecName' => 'LicenseSpecName',
        'licenseSpecType' => 'LicenseSpecType',
        'memoryLimit' => 'MemoryLimit',
        'status' => 'Status',
        'unActivateAllDuration' => 'UnActivateAllDuration',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activateTime) {
            $res['ActivateTime'] = $this->activateTime;
        }
        if (null !== $this->adaptiveMachine) {
            $res['AdaptiveMachine'] = $this->adaptiveMachine;
        }
        if (null !== $this->allDuration) {
            $res['AllDuration'] = $this->allDuration;
        }
        if (null !== $this->buyTime) {
            $res['BuyTime'] = $this->buyTime;
        }
        if (null !== $this->cpuLimit) {
            $res['CpuLimit'] = $this->cpuLimit;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->effectTime) {
            $res['EffectTime'] = $this->effectTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->licenseSpecCode) {
            $res['LicenseSpecCode'] = $this->licenseSpecCode;
        }
        if (null !== $this->licenseSpecName) {
            $res['LicenseSpecName'] = $this->licenseSpecName;
        }
        if (null !== $this->licenseSpecType) {
            $res['LicenseSpecType'] = $this->licenseSpecType;
        }
        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->unActivateAllDuration) {
            $res['UnActivateAllDuration'] = $this->unActivateAllDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return licenseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivateTime'])) {
            $model->activateTime = $map['ActivateTime'];
        }
        if (isset($map['AdaptiveMachine'])) {
            $model->adaptiveMachine = $map['AdaptiveMachine'];
        }
        if (isset($map['AllDuration'])) {
            $model->allDuration = $map['AllDuration'];
        }
        if (isset($map['BuyTime'])) {
            $model->buyTime = $map['BuyTime'];
        }
        if (isset($map['CpuLimit'])) {
            $model->cpuLimit = $map['CpuLimit'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EffectTime'])) {
            $model->effectTime = $map['EffectTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LicenseSpecCode'])) {
            $model->licenseSpecCode = $map['LicenseSpecCode'];
        }
        if (isset($map['LicenseSpecName'])) {
            $model->licenseSpecName = $map['LicenseSpecName'];
        }
        if (isset($map['LicenseSpecType'])) {
            $model->licenseSpecType = $map['LicenseSpecType'];
        }
        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UnActivateAllDuration'])) {
            $model->unActivateAllDuration = $map['UnActivateAllDuration'];
        }

        return $model;
    }
}
