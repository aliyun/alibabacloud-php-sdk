<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOssScanConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Whether to match all file prefixes.
     *
     * @example true
     *
     * @var bool
     */
    public $allKeyPrefix;

    /**
     * @description The number of the buckets.
     *
     * @example 10
     *
     * @var int
     */
    public $bucketCount;

    /**
     * @description The name of the bucket.
     *
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
     * @description Indicates whether the check policy is enabled. Valid values:
     *
     *   **1**: enabled.
     *   **0**: disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @description The end time of the check. The time is in the HH:mm:ss format.
     *
     * @example 06:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the policy.
     *
     * @example 443496
     *
     * @var int
     */
    public $id;

    /**
     * @description The prefix of the object that you want to check.
     *
     * @var string[]
     */
    public $keyPrefixList;

    /**
     * @description The suffix of the object that is checked.
     *
     * @var string[]
     */
    public $keySuffixList;

    /**
     * @description The time when the policy last update.
     *
     * @example 1698388233883
     *
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @description The name of the policy.
     *
     * @example test****
     *
     * @var string
     */
    public $name;

    /**
     * @description The day when the check is performed. The value indicates the day of the week.
     *
     * @var int[]
     */
    public $scanDayList;

    /**
     * @description The start time of the check. The time is in the HH:mm:ss format.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'allKeyPrefix'           => 'AllKeyPrefix',
        'bucketCount'            => 'BucketCount',
        'bucketNameList'         => 'BucketNameList',
        'decompressMaxFileCount' => 'DecompressMaxFileCount',
        'decompressMaxLayer'     => 'DecompressMaxLayer',
        'enable'                 => 'Enable',
        'endTime'                => 'EndTime',
        'id'                     => 'Id',
        'keyPrefixList'          => 'KeyPrefixList',
        'keySuffixList'          => 'KeySuffixList',
        'lastUpdateTime'         => 'LastUpdateTime',
        'name'                   => 'Name',
        'scanDayList'            => 'ScanDayList',
        'startTime'              => 'StartTime',
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
