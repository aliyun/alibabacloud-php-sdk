<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ListRecycleBinJobsRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The job ID.
     *
     * @example rb-15****ed-r-1625****2441
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The page number.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the job. Valid values:
     *
     *   Running: The job is running.
     *   Defragmenting: The job is defragmenting data.
     *   PartialSuccess: The job is partially completed.
     *   Success: The job is completed.
     *   Fail: The job failed.
     *   Cancelled: The job is canceled.
     *   All: all.Default value:All.
     *
     * @example All
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'jobId'        => 'JobId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRecycleBinJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
