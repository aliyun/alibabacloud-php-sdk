<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class AiRtcLicenseInfoDTO extends Model
{
    /**
     * @var int
     */
    public $availableCapacity;

    /**
     * @var string
     */
    public $beginOn;

    /**
     * @var string
     */
    public $contractNo;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $expiredOn;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $licenseCount;

    /**
     * @var string
     */
    public $licenseItemId;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $validDays;
    protected $_name = [
        'availableCapacity' => 'AvailableCapacity',
        'beginOn' => 'BeginOn',
        'contractNo' => 'ContractNo',
        'creationTime' => 'CreationTime',
        'expiredOn' => 'ExpiredOn',
        'instanceId' => 'InstanceId',
        'licenseCount' => 'LicenseCount',
        'licenseItemId' => 'LicenseItemId',
        'modificationTime' => 'ModificationTime',
        'status' => 'Status',
        'type' => 'Type',
        'validDays' => 'ValidDays',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableCapacity) {
            $res['AvailableCapacity'] = $this->availableCapacity;
        }

        if (null !== $this->beginOn) {
            $res['BeginOn'] = $this->beginOn;
        }

        if (null !== $this->contractNo) {
            $res['ContractNo'] = $this->contractNo;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->expiredOn) {
            $res['ExpiredOn'] = $this->expiredOn;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->licenseCount) {
            $res['LicenseCount'] = $this->licenseCount;
        }

        if (null !== $this->licenseItemId) {
            $res['LicenseItemId'] = $this->licenseItemId;
        }

        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->validDays) {
            $res['ValidDays'] = $this->validDays;
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
        if (isset($map['AvailableCapacity'])) {
            $model->availableCapacity = $map['AvailableCapacity'];
        }

        if (isset($map['BeginOn'])) {
            $model->beginOn = $map['BeginOn'];
        }

        if (isset($map['ContractNo'])) {
            $model->contractNo = $map['ContractNo'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['ExpiredOn'])) {
            $model->expiredOn = $map['ExpiredOn'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LicenseCount'])) {
            $model->licenseCount = $map['LicenseCount'];
        }

        if (isset($map['LicenseItemId'])) {
            $model->licenseItemId = $map['LicenseItemId'];
        }

        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['ValidDays'])) {
            $model->validDays = $map['ValidDays'];
        }

        return $model;
    }
}
