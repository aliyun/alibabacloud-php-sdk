<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystemStatistics;

use AlibabaCloud\Tea\Model;

class fileSystemStatistic extends Model
{
    /**
     * @description The number of expired file systems.
     *
     * @example 1
     *
     * @var int
     */
    public $expiredCount;

    /**
     * @description The number of expiring file systems.
     *
     * File systems whose expiration time is less than or equal to seven days away from the current time are counted.
     * @example 1
     *
     * @var int
     */
    public $expiringCount;

    /**
     * @description The type of the file system.
     *
     * @example standard
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The storage usage of the file system.
     *
     * Unit: bytes.
     * @example 1611
     *
     * @var int
     */
    public $meteredSize;

    /**
     * @description The number of file systems of the current type.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'expiredCount'   => 'ExpiredCount',
        'expiringCount'  => 'ExpiringCount',
        'fileSystemType' => 'FileSystemType',
        'meteredSize'    => 'MeteredSize',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return fileSystemStatistic
     */
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
