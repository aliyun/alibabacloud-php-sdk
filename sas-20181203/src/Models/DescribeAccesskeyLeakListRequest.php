<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccesskeyLeakListRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page.\\
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The AccessKey ID that you want to query. Only exact match is supported.
     *
     * @example LTAI4Fytv7ALKzkNVBV6****
     *
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The beginning of the time range to query. You can query all AccessKey pair leaks that are detected later than this time point. The value of this parameter is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1614155361489
     *
     * @var int
     */
    public $startTs;

    /**
     * @description Specifies whether an AccessKey pair leak is handled. Valid values:
     *
     *   **pending**: unhandled
     *   **dealed**: handled
     *
     * @example pending
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage'                => 'CurrentPage',
        'pageSize'                   => 'PageSize',
        'query'                      => 'Query',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'startTs'                    => 'StartTs',
        'status'                     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccesskeyLeakListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
