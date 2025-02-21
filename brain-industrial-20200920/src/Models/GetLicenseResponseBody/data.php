<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLicenseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLicenseResponseBody\data\activateRecord;

class data extends Model
{
    /**
     * @var activateRecord[]
     */
    public $activateRecord;
    /**
     * @var string
     */
    public $activateTime;
    /**
     * @var string
     */
    public $adaptiveMachine;
    /**
     * @var string
     */
    public $allDuration;
    /**
     * @var string
     */
    public $applicableSpecs;
    /**
     * @var string
     */
    public $buyTime;
    /**
     * @var int
     */
    public $cpuLimit;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $duration;
    /**
     * @var string
     */
    public $effectTime;
    /**
     * @var string
     */
    public $expireTime;
    /**
     * @var string
     */
    public $fingerprint;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $licenseCode;
    /**
     * @var string
     */
    public $licenseSpecCode;
    /**
     * @var string
     */
    public $licenseSpecName;
    /**
     * @var string
     */
    public $licenseSpecType;
    /**
     * @var int
     */
    public $memoryLimit;
    /**
     * @var string
     */
    public $proposal;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $unActivateAllDuration;
    protected $_name = [
        'activateRecord'        => 'ActivateRecord',
        'activateTime'          => 'ActivateTime',
        'adaptiveMachine'       => 'AdaptiveMachine',
        'allDuration'           => 'AllDuration',
        'applicableSpecs'       => 'ApplicableSpecs',
        'buyTime'               => 'BuyTime',
        'cpuLimit'              => 'CpuLimit',
        'description'           => 'Description',
        'duration'              => 'Duration',
        'effectTime'            => 'EffectTime',
        'expireTime'            => 'ExpireTime',
        'fingerprint'           => 'Fingerprint',
        'id'                    => 'Id',
        'instanceId'            => 'InstanceId',
        'licenseCode'           => 'LicenseCode',
        'licenseSpecCode'       => 'LicenseSpecCode',
        'licenseSpecName'       => 'LicenseSpecName',
        'licenseSpecType'       => 'LicenseSpecType',
        'memoryLimit'           => 'MemoryLimit',
        'proposal'              => 'Proposal',
        'status'                => 'Status',
        'unActivateAllDuration' => 'UnActivateAllDuration',
    ];

    public function validate()
    {
        if (\is_array($this->activateRecord)) {
            Model::validateArray($this->activateRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activateRecord) {
            if (\is_array($this->activateRecord)) {
                $res['ActivateRecord'] = [];
                $n1                    = 0;
                foreach ($this->activateRecord as $item1) {
                    $res['ActivateRecord'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->activateTime) {
            $res['ActivateTime'] = $this->activateTime;
        }

        if (null !== $this->adaptiveMachine) {
            $res['AdaptiveMachine'] = $this->adaptiveMachine;
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

        if (null !== $this->proposal) {
            $res['Proposal'] = $this->proposal;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->unActivateAllDuration) {
            $res['UnActivateAllDuration'] = $this->unActivateAllDuration;
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
        if (isset($map['ActivateRecord'])) {
            if (!empty($map['ActivateRecord'])) {
                $model->activateRecord = [];
                $n1                    = 0;
                foreach ($map['ActivateRecord'] as $item1) {
                    $model->activateRecord[$n1++] = activateRecord::fromMap($item1);
                }
            }
        }

        if (isset($map['ActivateTime'])) {
            $model->activateTime = $map['ActivateTime'];
        }

        if (isset($map['AdaptiveMachine'])) {
            $model->adaptiveMachine = $map['AdaptiveMachine'];
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

        if (isset($map['Proposal'])) {
            $model->proposal = $map['Proposal'];
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
