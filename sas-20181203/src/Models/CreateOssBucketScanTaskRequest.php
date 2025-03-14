<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateOssBucketScanTaskRequest extends Model
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
     * This parameter is required.
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
     * @description The suffixes of the objects that you do not want to check.
     *
     * @var string[]
     */
    public $excludeKeySuffixList;

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
     * @description The timestamp when the object was last modified. The time must be later than the timestamp that you specify. Unit: milliseconds.
     *
     * @example 1724301769834
     *
     * @var int
     */
    public $lastModifiedStartTime;

    /**
     * @description The check mode. Valid values:
     *
     *   **1**: checks all objects in the bucket.
     *   **2**: checks only new objects in the bucket.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $scanMode;
    protected $_name = [
        'allKeyPrefix' => 'AllKeyPrefix',
        'bucketNameList' => 'BucketNameList',
        'decompressMaxFileCount' => 'DecompressMaxFileCount',
        'decompressMaxLayer' => 'DecompressMaxLayer',
        'decryptionList' => 'DecryptionList',
        'excludeKeySuffixList' => 'ExcludeKeySuffixList',
        'keyPrefixList' => 'KeyPrefixList',
        'keySuffixList' => 'KeySuffixList',
        'lastModifiedStartTime' => 'LastModifiedStartTime',
        'scanMode' => 'ScanMode',
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
        if (null !== $this->excludeKeySuffixList) {
            $res['ExcludeKeySuffixList'] = $this->excludeKeySuffixList;
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
        if (null !== $this->scanMode) {
            $res['ScanMode'] = $this->scanMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOssBucketScanTaskRequest
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
        if (isset($map['ExcludeKeySuffixList'])) {
            if (!empty($map['ExcludeKeySuffixList'])) {
                $model->excludeKeySuffixList = $map['ExcludeKeySuffixList'];
            }
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
        if (isset($map['ScanMode'])) {
            $model->scanMode = $map['ScanMode'];
        }

        return $model;
    }
}
