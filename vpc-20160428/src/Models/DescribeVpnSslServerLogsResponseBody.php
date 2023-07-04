<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnSslServerLogsResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeVpnSslServerLogsResponseBody extends Model
{
    /**
     * @description The number of log entries.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description An array of strings.
     *
     * Each item in the array is a log entry.
     * @var data
     */
    public $data;

    /**
     * @description Indicates whether the log is accurate. Valid values:
     *
     *   **true**: accurate
     *   **false**: inaccurate
     *
     * @example true
     *
     * @var bool
     */
    public $isCompleted;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example DEDAC5B1-9292-5BF7-BDDF-61BA58CFB2FB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'       => 'Count',
        'data'        => 'Data',
        'isCompleted' => 'IsCompleted',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->isCompleted) {
            $res['IsCompleted'] = $this->isCompleted;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpnSslServerLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['IsCompleted'])) {
            $model->isCompleted = $map['IsCompleted'];
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

        return $model;
    }
}
