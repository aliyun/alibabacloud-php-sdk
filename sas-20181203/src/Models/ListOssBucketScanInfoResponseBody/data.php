<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOssBucketScanInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the bucket.
     *
     * @example hz-new02****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description Configuration status, valid values:
     *
     * - **0**: No Configuration.
     * - **1**: Not Open.
     * - **2**: Open.
     * @example 1
     *
     * @var int
     */
    public $configStatus;

    /**
     * @description The number of high-risk objects.
     *
     * @example 0
     *
     * @var int
     */
    public $highRisk;

    /**
     * @description The time when the most recent check ended. Unit: milliseconds.
     *
     * @example 1698388233883
     *
     * @var int
     */
    public $lastScanEndTime;

    /**
     * @description The time when the bucket was last checked. Unit: milliseconds.
     *
     * @example 1698388233883
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description The number of low-risk objects.
     *
     * @example 0
     *
     * @var int
     */
    public $lowRisk;

    /**
     * @description The number of medium-risk objects.
     *
     * @example 0
     *
     * @var int
     */
    public $mediumRisk;

    /**
     * @description The reason why the bucket cannot be checked.
     *
     * @example Unsupported Region。
     *
     * @var string
     */
    public $message;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of objects that are checked.
     *
     * @example 100
     *
     * @var int
     */
    public $scanObject;

    /**
     * @description Indicates whether the bucket is checked. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $scanned;

    /**
     * @description The check status of the bucket. Valid values:
     *
     *   **1**: The bucket is not checked.
     *   **2**: All objects in the bucket are being checked.
     *   **3**: Only new objects are being checked.
     *   **4**: The bucket is checked.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The storage class of the bucket. Valid values:
     *
     *   **Standard**
     *   **IA**
     *   **Archive**
     *   **ColdArchive**
     *
     * @example Archive
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description Indicates whether the bucket can be checked. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $support;

    /**
     * @description The total number of objects in the bucket.
     *
     * @example 100
     *
     * @var int
     */
    public $totalObject;
    protected $_name = [
        'bucketName'      => 'BucketName',
        'configStatus'    => 'ConfigStatus',
        'highRisk'        => 'HighRisk',
        'lastScanEndTime' => 'LastScanEndTime',
        'lastScanTime'    => 'LastScanTime',
        'lowRisk'         => 'LowRisk',
        'mediumRisk'      => 'MediumRisk',
        'message'         => 'Message',
        'regionId'        => 'RegionId',
        'scanObject'      => 'ScanObject',
        'scanned'         => 'Scanned',
        'status'          => 'Status',
        'storageClass'    => 'StorageClass',
        'support'         => 'Support',
        'totalObject'     => 'TotalObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->configStatus) {
            $res['ConfigStatus'] = $this->configStatus;
        }
        if (null !== $this->highRisk) {
            $res['HighRisk'] = $this->highRisk;
        }
        if (null !== $this->lastScanEndTime) {
            $res['LastScanEndTime'] = $this->lastScanEndTime;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->lowRisk) {
            $res['LowRisk'] = $this->lowRisk;
        }
        if (null !== $this->mediumRisk) {
            $res['MediumRisk'] = $this->mediumRisk;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scanObject) {
            $res['ScanObject'] = $this->scanObject;
        }
        if (null !== $this->scanned) {
            $res['Scanned'] = $this->scanned;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->support) {
            $res['Support'] = $this->support;
        }
        if (null !== $this->totalObject) {
            $res['TotalObject'] = $this->totalObject;
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['ConfigStatus'])) {
            $model->configStatus = $map['ConfigStatus'];
        }
        if (isset($map['HighRisk'])) {
            $model->highRisk = $map['HighRisk'];
        }
        if (isset($map['LastScanEndTime'])) {
            $model->lastScanEndTime = $map['LastScanEndTime'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['LowRisk'])) {
            $model->lowRisk = $map['LowRisk'];
        }
        if (isset($map['MediumRisk'])) {
            $model->mediumRisk = $map['MediumRisk'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScanObject'])) {
            $model->scanObject = $map['ScanObject'];
        }
        if (isset($map['Scanned'])) {
            $model->scanned = $map['Scanned'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['Support'])) {
            $model->support = $map['Support'];
        }
        if (isset($map['TotalObject'])) {
            $model->totalObject = $map['TotalObject'];
        }

        return $model;
    }
}
