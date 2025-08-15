<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssMfd\V20231017\Models\ListOssBucketScanInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var int
     */
    public $configStatus;

    /**
     * @var int
     */
    public $decompressStatus;

    /**
     * @var int
     */
    public $highRisk;

    /**
     * @var int
     */
    public $lastScanEndTime;

    /**
     * @var int
     */
    public $lastScanTime;

    /**
     * @var int
     */
    public $lowRisk;

    /**
     * @var int
     */
    public $mediumRisk;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $scanObject;

    /**
     * @var bool
     */
    public $scanned;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var bool
     */
    public $support;

    /**
     * @var int
     */
    public $totalObject;
    protected $_name = [
        'bucketName' => 'BucketName',
        'configStatus' => 'ConfigStatus',
        'decompressStatus' => 'DecompressStatus',
        'highRisk' => 'HighRisk',
        'lastScanEndTime' => 'LastScanEndTime',
        'lastScanTime' => 'LastScanTime',
        'lowRisk' => 'LowRisk',
        'mediumRisk' => 'MediumRisk',
        'message' => 'Message',
        'regionId' => 'RegionId',
        'scanObject' => 'ScanObject',
        'scanned' => 'Scanned',
        'status' => 'Status',
        'storageClass' => 'StorageClass',
        'support' => 'Support',
        'totalObject' => 'TotalObject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->configStatus) {
            $res['ConfigStatus'] = $this->configStatus;
        }

        if (null !== $this->decompressStatus) {
            $res['DecompressStatus'] = $this->decompressStatus;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['ConfigStatus'])) {
            $model->configStatus = $map['ConfigStatus'];
        }

        if (isset($map['DecompressStatus'])) {
            $model->decompressStatus = $map['DecompressStatus'];
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
