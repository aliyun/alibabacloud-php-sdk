<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystemStatistics;

use AlibabaCloud\Dara\Model;

class fileSystemStatistic extends Model
{
    /**
     * @var int
     */
    public $expiredCount;

    /**
     * @var int
     */
    public $expiringCount;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var int
     */
    public $meteredSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'expiredCount' => 'ExpiredCount',
        'expiringCount' => 'ExpiringCount',
        'fileSystemType' => 'FileSystemType',
        'meteredSize' => 'MeteredSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiredCount) {
            $res['ExpiredCount'] = $this->expiredCount;
        }

        if (null !== $this->expiringCount) {
            $res['ExpiringCount'] = $this->expiringCount;
        }

        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }

        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ExpiredCount'])) {
            $model->expiredCount = $map['ExpiredCount'];
        }

        if (isset($map['ExpiringCount'])) {
            $model->expiringCount = $map['ExpiringCount'];
        }

        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }

        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
