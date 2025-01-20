<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystems;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystemStatistics;

class DescribeFileSystemStatisticsResponseBody extends Model
{
    /**
     * @var fileSystemStatistics
     */
    public $fileSystemStatistics;
    /**
     * @var fileSystems
     */
    public $fileSystems;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'fileSystemStatistics' => 'FileSystemStatistics',
        'fileSystems'          => 'FileSystems',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->fileSystemStatistics) {
            $this->fileSystemStatistics->validate();
        }
        if (null !== $this->fileSystems) {
            $this->fileSystems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemStatistics) {
            $res['FileSystemStatistics'] = null !== $this->fileSystemStatistics ? $this->fileSystemStatistics->toArray($noStream) : $this->fileSystemStatistics;
        }

        if (null !== $this->fileSystems) {
            $res['FileSystems'] = null !== $this->fileSystems ? $this->fileSystems->toArray($noStream) : $this->fileSystems;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FileSystemStatistics'])) {
            $model->fileSystemStatistics = fileSystemStatistics::fromMap($map['FileSystemStatistics']);
        }

        if (isset($map['FileSystems'])) {
            $model->fileSystems = fileSystems::fromMap($map['FileSystems']);
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
