<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOssScanConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $bucketNameList;

    /**
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @example 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $keySuffixList;

    /**
     * @var int[]
     */
    public $scanDayList;

    /**
     * @example 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'bucketNameList' => 'BucketNameList',
        'enable'         => 'Enable',
        'endTime'        => 'EndTime',
        'keySuffixList'  => 'KeySuffixList',
        'scanDayList'    => 'ScanDayList',
        'startTime'      => 'StartTime',
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
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keySuffixList) {
            $res['KeySuffixList'] = $this->keySuffixList;
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
        if (isset($map['KeySuffixList'])) {
            if (!empty($map['KeySuffixList'])) {
                $model->keySuffixList = $map['KeySuffixList'];
            }
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
