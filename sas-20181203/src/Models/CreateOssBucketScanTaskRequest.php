<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateOssBucketScanTaskRequest extends Model
{
    /**
     * @var string[]
     */
    public $bucketNameList;

    /**
     * @var string[]
     */
    public $excludeKeySuffixList;

    /**
     * @var string[]
     */
    public $keySuffixList;

    /**
     * @example 1
     *
     * @var int
     */
    public $scanMode;
    protected $_name = [
        'bucketNameList'       => 'BucketNameList',
        'excludeKeySuffixList' => 'ExcludeKeySuffixList',
        'keySuffixList'        => 'KeySuffixList',
        'scanMode'             => 'ScanMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketNameList) {
            $res['BucketNameList'] = $this->bucketNameList;
        }
        if (null !== $this->excludeKeySuffixList) {
            $res['ExcludeKeySuffixList'] = $this->excludeKeySuffixList;
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
        if (isset($map['BucketNameList'])) {
            if (!empty($map['BucketNameList'])) {
                $model->bucketNameList = $map['BucketNameList'];
            }
        }
        if (isset($map['ExcludeKeySuffixList'])) {
            if (!empty($map['ExcludeKeySuffixList'])) {
                $model->excludeKeySuffixList = $map['ExcludeKeySuffixList'];
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
