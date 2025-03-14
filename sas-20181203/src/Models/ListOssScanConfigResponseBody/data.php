<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOssScanConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the prefixes of all objects are matched.
     *
     * @example true
     *
     * @var bool
     */
    public $allKeyPrefix;

    /**
     * @description The number of buckets.
     *
     * @example 10
     *
     * @var int
     */
    public $bucketCount;

    /**
     * @description The names of the buckets.
     *
     * @var string[]
     */
    public $bucketNameList;

    /**
     * @description The maximum number of objects that can be extracted during decompression. Valid values: 1 to 1000. If the maximum number of objects that can be extracted is reached, the decompression operation immediately ends and the detection of extracted objects is not affected.
     *
     * @example 100
     *
     * @var int
     */
    public $decompressMaxFileCount;

    /**
     * @description The maximum number of decompression levels when multi-level packages are decompressed. Valid values: 1 to 5. If the maximum number of decompression levels is reached, the decompression operation immediately ends and the detection of extracted objects is not affected.
     *
     * @example 1
     *
     * @var int
     */
    public $decompressMaxLayer;

    /**
     * @description The decryption methods.
     *
     * @var string[]
     */
    public $decryptionList;

    /**
     * @description Indicates whether the policy is enabled. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @description The time when the scan ends. The time is in the HH:mm:ss format.
     *
     * @example 06:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The configuration ID.
     *
     * @example 443496
     *
     * @var int
     */
    public $id;

    /**
     * @description The prefixes of the objects that are scanned.
     *
     * @var string[]
     */
    public $keyPrefixList;

    /**
     * @description The suffixes of the objects that are scanned.
     *
     * @var string[]
     */
    public $keySuffixList;

    /**
     * @description The timestamp when the object was last modified. The time must be later than the timestamp that you specify. Unit: milliseconds.
     *
     * @example 1724301769834
     *
     * @var int
     */
    public $lastModifiedStartTime;

    /**
     * @description The timestamp when the configuration was last modified.
     *
     * @example 1698388233883
     *
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @description The configuration name.
     *
     * @example test****
     *
     * @var string
     */
    public $name;

    /**
     * @description The days on which the scan is executed in a week.
     *
     * @var int[]
     */
    public $scanDayList;

    /**
     * @description The time when the scan starts. The time is in the HH:mm:ss format.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'allKeyPrefix' => 'AllKeyPrefix',
        'bucketCount' => 'BucketCount',
        'bucketNameList' => 'BucketNameList',
        'decompressMaxFileCount' => 'DecompressMaxFileCount',
        'decompressMaxLayer' => 'DecompressMaxLayer',
        'decryptionList' => 'DecryptionList',
        'enable' => 'Enable',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'keyPrefixList' => 'KeyPrefixList',
        'keySuffixList' => 'KeySuffixList',
        'lastModifiedStartTime' => 'LastModifiedStartTime',
        'lastUpdateTime' => 'LastUpdateTime',
        'name' => 'Name',
        'scanDayList' => 'ScanDayList',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allKeyPrefix) {
            $res['AllKeyPrefix'] = $this->allKeyPrefix;
        }
        if (null !== $this->bucketCount) {
            $res['BucketCount'] = $this->bucketCount;
        }
        if (null !== $this->bucketNameList) {
            $res['BucketNameList'] = $this->bucketNameList;
        }
        if (null !== $this->decompressMaxFileCount) {
            $res['DecompressMaxFileCount'] = $this->decompressMaxFileCount;
        }
        if (null !== $this->decompressMaxLayer) {
            $res['DecompressMaxLayer'] = $this->decompressMaxLayer;
        }
        if (null !== $this->decryptionList) {
            $res['DecryptionList'] = $this->decryptionList;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->keyPrefixList) {
            $res['KeyPrefixList'] = $this->keyPrefixList;
        }
        if (null !== $this->keySuffixList) {
            $res['KeySuffixList'] = $this->keySuffixList;
        }
        if (null !== $this->lastModifiedStartTime) {
            $res['LastModifiedStartTime'] = $this->lastModifiedStartTime;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scanDayList) {
            $res['ScanDayList'] = $this->scanDayList;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AllKeyPrefix'])) {
            $model->allKeyPrefix = $map['AllKeyPrefix'];
        }
        if (isset($map['BucketCount'])) {
            $model->bucketCount = $map['BucketCount'];
        }
        if (isset($map['BucketNameList'])) {
            if (!empty($map['BucketNameList'])) {
                $model->bucketNameList = $map['BucketNameList'];
            }
        }
        if (isset($map['DecompressMaxFileCount'])) {
            $model->decompressMaxFileCount = $map['DecompressMaxFileCount'];
        }
        if (isset($map['DecompressMaxLayer'])) {
            $model->decompressMaxLayer = $map['DecompressMaxLayer'];
        }
        if (isset($map['DecryptionList'])) {
            if (!empty($map['DecryptionList'])) {
                $model->decryptionList = $map['DecryptionList'];
            }
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['KeyPrefixList'])) {
            if (!empty($map['KeyPrefixList'])) {
                $model->keyPrefixList = $map['KeyPrefixList'];
            }
        }
        if (isset($map['KeySuffixList'])) {
            if (!empty($map['KeySuffixList'])) {
                $model->keySuffixList = $map['KeySuffixList'];
            }
        }
        if (isset($map['LastModifiedStartTime'])) {
            $model->lastModifiedStartTime = $map['LastModifiedStartTime'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ScanDayList'])) {
            if (!empty($map['ScanDayList'])) {
                $model->scanDayList = $map['ScanDayList'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
