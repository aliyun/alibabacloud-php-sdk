<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ActivateLicenseResponseBody;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ActivateLicenseResponseBody\data\activateRecord;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var activateRecord[]
     */
    public $activateRecord;

    /**
     * @example 2024-04-29 15:03:12
     *
     * @var string
     */
    public $activateTime;

    /**
     * @var string
     */
    public $allDuration;

    /**
     * @var string
     */
    public $applicableSpecs;

    /**
     * @example 2024-04-29 15:00:15
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
     * @example 2024-05-01 00:00:00
     *
     * @var string
     */
    public $effectTime;

    /**
     * @example 2025-05-01 00:00:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example XXXX
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @description Id
     *
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @example c39128fcb74e482546a72de90cdsaba3
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example XXX
     *
     * @var string
     */
    public $licenseCode;

    /**
     * @var string
     */
    public $licenseSpecName;

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
        'activateRecord' => 'ActivateRecord',
        'activateTime' => 'ActivateTime',
        'allDuration' => 'AllDuration',
        'applicableSpecs' => 'ApplicableSpecs',
        'buyTime' => 'BuyTime',
        'cpuLimit' => 'CpuLimit',
        'description' => 'Description',
        'duration' => 'Duration',
        'effectTime' => 'EffectTime',
        'expireTime' => 'ExpireTime',
        'fingerprint' => 'Fingerprint',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'licenseCode' => 'LicenseCode',
        'licenseSpecName' => 'LicenseSpecName',
        'memoryLimit' => 'MemoryLimit',
        'status' => 'Status',
        'unActivateAllDuration' => 'UnActivateAllDuration',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activateRecord) {
            $res['ActivateRecord'] = [];
            if (null !== $this->activateRecord && \is_array($this->activateRecord)) {
                $n = 0;
                foreach ($this->activateRecord as $item) {
                    $res['ActivateRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->activateTime) {
            $res['ActivateTime'] = $this->activateTime;
        }
        if (null !== $this->allDuration) {
            $res['AllDuration'] = $this->allDuration;
        }
        if (null !== $this->applicableSpecs) {
            $res['ApplicableSpecs'] = $this->applicableSpecs;
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
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }
        if (null !== $this->licenseSpecName) {
            $res['LicenseSpecName'] = $this->licenseSpecName;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivateRecord'])) {
            if (!empty($map['ActivateRecord'])) {
                $model->activateRecord = [];
                $n = 0;
                foreach ($map['ActivateRecord'] as $item) {
                    $model->activateRecord[$n++] = null !== $item ? activateRecord::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ActivateTime'])) {
            $model->activateTime = $map['ActivateTime'];
        }
        if (isset($map['AllDuration'])) {
            $model->allDuration = $map['AllDuration'];
        }
        if (isset($map['ApplicableSpecs'])) {
            $model->applicableSpecs = $map['ApplicableSpecs'];
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
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }
        if (isset($map['LicenseSpecName'])) {
            $model->licenseSpecName = $map['LicenseSpecName'];
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
