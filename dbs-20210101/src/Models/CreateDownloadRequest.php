<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class CreateDownloadRequest extends Model
{
    /**
     * @description The ID of the backup set. You can call the [DescribeBackups](https://help.aliyun.com/document_detail/26273.html) operation to query the ID of the backup set.
     *
     * > This parameter is required if the BakSetType parameter is set to full.
     * @example 146005****
     *
     * @var string
     */
    public $bakSetId;

    /**
     * @description The size of the full backup set. Unit: bytes. You can call the [DescribeBackups](https://help.aliyun.com/document_detail/26273.html) operation to query the size of the full backup set.
     *
     * @example 216****
     *
     * @var string
     */
    public $bakSetSize;

    /**
     * @description The type of the download task. Valid values:
     *
     *   **full**: downloads a full backup set.
     *   **pitr**: downloads a backup set at a specific point in time.
     *
     * @example full
     *
     * @var string
     */
    public $bakSetType;

    /**
     * @description The point in time at which the backup set is downloaded. Specify a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * > This parameter is required if the BakSetType parameter is set to pitr.
     * @example 1661331864000
     *
     * @var string
     */
    public $downloadPointInTime;

    /**
     * @description The format to which the downloaded backup set is converted. Valid values:
     *
     *   **CSV**
     *   **SQL**
     *   **Parquet**
     *
     * > This parameter is required.
     * @example CSV
     *
     * @var string
     */
    public $formatType;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example rm-wz994c1t1****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the region in which the instance resides. You can call the [DescribeDBInstanceAttribute](https://help.aliyun.com/document_detail/26231.html) operation to query the region ID of the instance.
     *
     * This parameter is required.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionCode;

    /**
     * @description The name of the OSS bucket that is used to store the backup set.
     *
     *   This parameter is required if the TargetType parameter is set to OSS.
     *   Make sure that your account is granted the **AliyunDBSDefaultRole** permission. For more information, see [Use RAM for resource authorization](https://help.aliyun.com/document_detail/26307.html). You can also grant permissions based on the operation instructions in the Resource Access Management (RAM) console.
     *
     * @example test123
     *
     * @var string
     */
    public $targetBucket;

    /**
     * @description The region in which the OSS bucket resides.
     *
     * > This parameter is required if the TargetType parameter is set to OSS.
     * @example cn-beijing
     *
     * @var string
     */
    public $targetOssRegion;

    /**
     * @description The destination path to which the backup set is downloaded.
     *
     * > This parameter is required if the TargetType parameter is set to OSS.
     * @example test_db/path
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description The type of the destination to which the backup set is downloaded. Valid values:
     *
     *   **OSS**
     *   **URL**
     *
     * @example OSS
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'bakSetId'            => 'BakSetId',
        'bakSetSize'          => 'BakSetSize',
        'bakSetType'          => 'BakSetType',
        'downloadPointInTime' => 'DownloadPointInTime',
        'formatType'          => 'FormatType',
        'instanceName'        => 'InstanceName',
        'regionCode'          => 'RegionCode',
        'targetBucket'        => 'TargetBucket',
        'targetOssRegion'     => 'TargetOssRegion',
        'targetPath'          => 'TargetPath',
        'targetType'          => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bakSetId) {
            $res['BakSetId'] = $this->bakSetId;
        }
        if (null !== $this->bakSetSize) {
            $res['BakSetSize'] = $this->bakSetSize;
        }
        if (null !== $this->bakSetType) {
            $res['BakSetType'] = $this->bakSetType;
        }
        if (null !== $this->downloadPointInTime) {
            $res['DownloadPointInTime'] = $this->downloadPointInTime;
        }
        if (null !== $this->formatType) {
            $res['FormatType'] = $this->formatType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }
        if (null !== $this->targetBucket) {
            $res['TargetBucket'] = $this->targetBucket;
        }
        if (null !== $this->targetOssRegion) {
            $res['TargetOssRegion'] = $this->targetOssRegion;
        }
        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDownloadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BakSetId'])) {
            $model->bakSetId = $map['BakSetId'];
        }
        if (isset($map['BakSetSize'])) {
            $model->bakSetSize = $map['BakSetSize'];
        }
        if (isset($map['BakSetType'])) {
            $model->bakSetType = $map['BakSetType'];
        }
        if (isset($map['DownloadPointInTime'])) {
            $model->downloadPointInTime = $map['DownloadPointInTime'];
        }
        if (isset($map['FormatType'])) {
            $model->formatType = $map['FormatType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }
        if (isset($map['TargetBucket'])) {
            $model->targetBucket = $map['TargetBucket'];
        }
        if (isset($map['TargetOssRegion'])) {
            $model->targetOssRegion = $map['TargetOssRegion'];
        }
        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
