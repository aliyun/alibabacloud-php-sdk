<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceLicenseResponseBody;

use AlibabaCloud\Dara\Model;

class license extends Model
{
    /**
     * @var string
     */
    public $edition;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $licenseChargeType;
    /**
     * @var string
     */
    public $licenseConfigJson;
    /**
     * @var int
     */
    public $licenseCreateTime;
    /**
     * @var string
     */
    public $licenseId;
    /**
     * @var string
     */
    public $licenseStatus;
    /**
     * @var string
     */
    public $purchaseChannel;
    /**
     * @var string
     */
    public $purchaseInstanceId;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var int
     */
    public $userQuota;
    protected $_name = [
        'edition'            => 'Edition',
        'endTime'            => 'EndTime',
        'licenseChargeType'  => 'LicenseChargeType',
        'licenseConfigJson'  => 'LicenseConfigJson',
        'licenseCreateTime'  => 'LicenseCreateTime',
        'licenseId'          => 'LicenseId',
        'licenseStatus'      => 'LicenseStatus',
        'purchaseChannel'    => 'PurchaseChannel',
        'purchaseInstanceId' => 'PurchaseInstanceId',
        'startTime'          => 'StartTime',
        'userQuota'          => 'UserQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->licenseChargeType) {
            $res['LicenseChargeType'] = $this->licenseChargeType;
        }

        if (null !== $this->licenseConfigJson) {
            $res['LicenseConfigJson'] = $this->licenseConfigJson;
        }

        if (null !== $this->licenseCreateTime) {
            $res['LicenseCreateTime'] = $this->licenseCreateTime;
        }

        if (null !== $this->licenseId) {
            $res['LicenseId'] = $this->licenseId;
        }

        if (null !== $this->licenseStatus) {
            $res['LicenseStatus'] = $this->licenseStatus;
        }

        if (null !== $this->purchaseChannel) {
            $res['PurchaseChannel'] = $this->purchaseChannel;
        }

        if (null !== $this->purchaseInstanceId) {
            $res['PurchaseInstanceId'] = $this->purchaseInstanceId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->userQuota) {
            $res['UserQuota'] = $this->userQuota;
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
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LicenseChargeType'])) {
            $model->licenseChargeType = $map['LicenseChargeType'];
        }

        if (isset($map['LicenseConfigJson'])) {
            $model->licenseConfigJson = $map['LicenseConfigJson'];
        }

        if (isset($map['LicenseCreateTime'])) {
            $model->licenseCreateTime = $map['LicenseCreateTime'];
        }

        if (isset($map['LicenseId'])) {
            $model->licenseId = $map['LicenseId'];
        }

        if (isset($map['LicenseStatus'])) {
            $model->licenseStatus = $map['LicenseStatus'];
        }

        if (isset($map['PurchaseChannel'])) {
            $model->purchaseChannel = $map['PurchaseChannel'];
        }

        if (isset($map['PurchaseInstanceId'])) {
            $model->purchaseInstanceId = $map['PurchaseInstanceId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UserQuota'])) {
            $model->userQuota = $map['UserQuota'];
        }

        return $model;
    }
}
