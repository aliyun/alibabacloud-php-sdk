<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOssScanConfigResponseBody;

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
     * @example 1
     *
     * @var int
     */
    public $bucketCount;

    /**
     * @description The name of the bucket.
     *
     * @example hz-new01****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The names of the buckets.
     *
     * @var string[]
     */
    public $bucketNameList;

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
     * @example 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the policy.
     *
     * @example 1274****
     *
     * @var string
     */
    public $id;

    /**
     * @description The prefixes of the object that you want to check.
     *
     * @var string[]
     */
    public $keyPrefixList;

    /**
     * @description The suffixes of the objects that are checked.
     *
     * @var string[]
     */
    public $keySuffixList;

    /**
     * @description The time when the policy last update.
     *
     * @example 1702025633079
     *
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @description The name of the policy.
     *
     * @example test0104
     *
     * @var string
     */
    public $name;

    /**
     * @description The days when the check is performed. The value indicates the days of the week.
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
        'allKeyPrefix'   => 'AllKeyPrefix',
        'bucketCount'    => 'BucketCount',
        'bucketName'     => 'BucketName',
        'bucketNameList' => 'BucketNameList',
        'enable'         => 'Enable',
        'endTime'        => 'EndTime',
        'id'             => 'Id',
        'keyPrefixList'  => 'KeyPrefixList',
        'keySuffixList'  => 'KeySuffixList',
        'lastUpdateTime' => 'LastUpdateTime',
        'name'           => 'Name',
        'scanDayList'    => 'ScanDayList',
        'startTime'      => 'StartTime',
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
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->bucketNameList) {
            $res['BucketNameList'] = $this->bucketNameList;
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['BucketNameList'])) {
            if (!empty($map['BucketNameList'])) {
                $model->bucketNameList = $map['BucketNameList'];
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
