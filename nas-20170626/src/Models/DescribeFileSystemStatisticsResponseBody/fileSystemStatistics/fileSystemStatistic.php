<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystemStatistics;

use AlibabaCloud\Tea\Model;

class fileSystemStatistic extends Model
{
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

    /**
     * @var int
     */
    public $expiredCount;
    protected $_name = [
        'expiringCount'  => 'ExpiringCount',
        'fileSystemType' => 'FileSystemType',
        'meteredSize'    => 'MeteredSize',
        'totalCount'     => 'TotalCount',
        'expiredCount'   => 'ExpiredCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->expiredCount) {
            $res['ExpiredCount'] = $this->expiredCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystemStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ExpiredCount'])) {
            $model->expiredCount = $map['ExpiredCount'];
        }

        return $model;
    }
}
