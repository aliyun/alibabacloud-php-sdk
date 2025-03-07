<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetSnapshotUrlsRequest extends Model
{
    /**
     * @description The job ID.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The order that you use to sort the query results. Valid values: Asc and Desc.
     *
     * - Desc
     * @example Asc
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 30. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The authentication timeout period. Unit: seconds Default value: 3600. Maximum value: 129600 (36 hours).
     *
     * @example 3600
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'jobId'      => 'JobId',
        'orderBy'    => 'OrderBy',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'timeout'    => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSnapshotUrlsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
