<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateOssScanConfigRequest extends Model
{
    /**
     * @description Specifies whether to match the prefixes of all objects.
     *
     * @example true
     *
     * @var bool
     */
    public $allKeyPrefix;

    /**
     * @description The names of the buckets.
     *
     * @var string[]
     */
    public $bucketNameList;

    /**
     * @description The maximum number of objects that can be extracted from a package. Valid values: 1 to 1000. If the value is reached, the decompression operation immediately finishes. The detection of extracted objects is not affected.
     *
     * @example 100
     *
     * @var int
     */
    public $decompressMaxFileCount;

    /**
     * @description The maximum number of decompression levels when multi-level packages are decompressed. Valid values: 1 to 5. If the value is reached, the decompression operation immediately finishes. The detection of extracted objects is not affected.
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
     * @description Specifies whether to enable the bucket check policy. Valid values:
     *
     *   **1**: enables the bucket check policy.
     *   **0**: disables the bucket check policy.
     *
     * @example 0
     *
     * @var int
     */
    public $enable;

    /**
     * @description The end time of the check. Specify the time in the HH:mm:ss format.
     *
     * @example 00:00:01
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The policy ID.
     *
     * @example 65778
     *
     * @var string
     */
    public $id;

    /**
     * @description The prefixes of the objects.
     *
     * @var string[]
     */
    public $keyPrefixList;

    /**
     * @description The suffixes of the objects that you want to check.
     *
     * @var string[]
     */
    public $keySuffixList;

    /**
     * @description The timestamp. The objects whose last modification time is later than the specified value are detected. Unit: milliseconds.
     *
     * @example 1724301769834
     *
     * @var int
     */
    public $lastModifiedStartTime;

    /**
     * @description The policy name.
     *
     * @example nacos****
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the check is performed. The value specifies the days of the week.
     *
     * @var int[]
     */
    public $scanDayList;

    /**
     * @description The start time of the check. Specify the time in the HH:mm:ss format.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'allKeyPrefix' => 'AllKeyPrefix',
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
     * @return UpdateOssScanConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllKeyPrefix'])) {
            $model->allKeyPrefix = $map['AllKeyPrefix'];
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
