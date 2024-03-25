<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ListLifecycleRetrieveJobsRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the data retrieval task. Valid values:
     *
     *   active: The task is running.
     *   canceled: The task is canceled.
     *   completed: The task is completed.
     *   failed: The task has failed.
     *
     * @example completed
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'status'       => 'Status',
        'storageType'  => 'StorageType',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLifecycleRetrieveJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
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
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
