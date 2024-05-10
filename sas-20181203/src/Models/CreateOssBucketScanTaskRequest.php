<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateOssBucketScanTaskRequest extends Model
{
    /**
     * @description Whether to match all prefixes.
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
     * @var string[]
     */
    public $bucketNameList;

    /**
     * @var int
     */
    public $decompressMaxFileCount;

    /**
     * @var int
     */
    public $decompressMaxLayer;

    /**
     * @description The suffixes of the objects that you do not want to check.
     *
     * @var string[]
     */
    public $excludeKeySuffixList;

    /**
     * @description The prefixes of the objects that you want to check.
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
     * @description The check mode. Valid values:
     *
     *   **1**: checks all objects in the bucket.
     *   **2**: checks only new objects in the bucket.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $scanMode;
    protected $_name = [
        'allKeyPrefix'           => 'AllKeyPrefix',
        'bucketNameList'         => 'BucketNameList',
        'decompressMaxFileCount' => 'DecompressMaxFileCount',
        'decompressMaxLayer'     => 'DecompressMaxLayer',
        'excludeKeySuffixList'   => 'ExcludeKeySuffixList',
        'keyPrefixList'          => 'KeyPrefixList',
        'keySuffixList'          => 'KeySuffixList',
        'scanMode'               => 'ScanMode',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->excludeKeySuffixList) {
            $res['ExcludeKeySuffixList'] = $this->excludeKeySuffixList;
        }
        if (null !== $this->keyPrefixList) {
            $res['KeyPrefixList'] = $this->keyPrefixList;
        }
        if (null !== $this->keySuffixList) {
            $res['KeySuffixList'] = $this->keySuffixList;
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
        if (isset($map['ScanMode'])) {
            $model->scanMode = $map['ScanMode'];
        }

        return $model;
    }
}
