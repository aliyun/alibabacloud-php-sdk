<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedMaliciousFilesResponseBody;

use AlibabaCloud\Dara\Model;

class groupedMaliciousFileResponse extends Model
{
    /**
     * @var int
     */
    public $firstScanTimestamp;
    /**
     * @var int
     */
    public $imageCount;
    /**
     * @var int
     */
    public $latestScanTimestamp;
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $maliciousKey;
    /**
     * @var string
     */
    public $maliciousMd5;
    /**
     * @var string
     */
    public $maliciousName;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'firstScanTimestamp'  => 'FirstScanTimestamp',
        'imageCount'          => 'ImageCount',
        'latestScanTimestamp' => 'LatestScanTimestamp',
        'level'               => 'Level',
        'maliciousKey'        => 'MaliciousKey',
        'maliciousMd5'        => 'MaliciousMd5',
        'maliciousName'       => 'MaliciousName',
        'status'              => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstScanTimestamp) {
            $res['FirstScanTimestamp'] = $this->firstScanTimestamp;
        }

        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }

        if (null !== $this->latestScanTimestamp) {
            $res['LatestScanTimestamp'] = $this->latestScanTimestamp;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->maliciousKey) {
            $res['MaliciousKey'] = $this->maliciousKey;
        }

        if (null !== $this->maliciousMd5) {
            $res['MaliciousMd5'] = $this->maliciousMd5;
        }

        if (null !== $this->maliciousName) {
            $res['MaliciousName'] = $this->maliciousName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirstScanTimestamp'])) {
            $model->firstScanTimestamp = $map['FirstScanTimestamp'];
        }

        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }

        if (isset($map['LatestScanTimestamp'])) {
            $model->latestScanTimestamp = $map['LatestScanTimestamp'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['MaliciousKey'])) {
            $model->maliciousKey = $map['MaliciousKey'];
        }

        if (isset($map['MaliciousMd5'])) {
            $model->maliciousMd5 = $map['MaliciousMd5'];
        }

        if (isset($map['MaliciousName'])) {
            $model->maliciousName = $map['MaliciousName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
