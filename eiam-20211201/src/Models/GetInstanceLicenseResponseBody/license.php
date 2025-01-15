<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceLicenseResponseBody;

use AlibabaCloud\Tea\Model;

class license extends Model
{
    /**
     * @description Edition of the License
     *
     * @example free
     *
     * @var string
     */
    public $edition;

    /**
     * @description End date of the validity period of the License, timestamp
     *
     * @example 1723996800000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Payment type of the License
     *
     * @example prepay
     *
     * @var string
     */
    public $licenseChargeType;

    /**
     * @description Detailed configuration JSON string of the License
     *
     * @example {"modules":[{"features":[{"name":"urn:alibaba:idaas:license:module:ud:customField","status":"enabled"}]……{"name":"urn:alibaba:idaas:license:tag:enterprise","status":"enabled"}],"version":"1.0"}
     *
     * @var string
     */
    public $licenseConfigJson;

    /**
     * @description Creation time of the License, timestamp
     *
     * @example 1720509699000
     *
     * @var int
     */
    public $licenseCreateTime;

    /**
     * @description Unique identifier of the License
     *
     * @example license_1234xxxx
     *
     * @var string
     */
    public $licenseId;

    /**
     * @description Status of the License
     *
     * @example valid
     *
     * @var string
     */
    public $licenseStatus;

    /**
     * @description Purchase channel of the License
     *
     * @example alibaba_cloud
     *
     * @var string
     */
    public $purchaseChannel;

    /**
     * @description Unique external product identifier corresponding to the License
     *
     * @example eiam-cn-xxxxx
     *
     * @var string
     */
    public $purchaseInstanceId;

    /**
     * @description Start date of the validity period of the License, timestamp
     *
     * @example 1720509699000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description User quota of the License
     *
     * @example 100
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return license
     */
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
