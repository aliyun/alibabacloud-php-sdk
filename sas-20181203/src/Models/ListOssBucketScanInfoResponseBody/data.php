<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOssBucketScanInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example hz-new02****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example 0
     *
     * @var int
     */
    public $highRisk;

    /**
     * @example 1698388233883
     *
     * @var int
     */
    public $lastScanEndTime;

    /**
     * @example 1698388233883
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $lowRisk;

    /**
     * @example 0
     *
     * @var int
     */
    public $mediumRisk;

    /**
     * @example Unsupported Region。
     *
     * @var string
     */
    public $message;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 100
     *
     * @var int
     */
    public $scanObject;

    /**
     * @example false
     *
     * @var bool
     */
    public $scanned;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example Archive
     *
     * @var string
     */
    public $storageClass;

    /**
     * @example true
     *
     * @var bool
     */
    public $support;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalObject;
    protected $_name = [
        'bucketName'      => 'BucketName',
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
