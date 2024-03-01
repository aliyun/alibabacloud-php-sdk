<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInternetDnsLogsResponseBody\logs;
use AlibabaCloud\Tea\Model;

class DescribeInternetDnsLogsResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $complete;

    /**
     * @example 1
     *
     * @var int
     */
    public $curPage;

    /**
     * @var logs
     */
    public $logs;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalPage;

    /**
     * @example 48
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'complete'  => 'Complete',
        'curPage'   => 'CurPage',
        'logs'      => 'Logs',
        'pageSize'  => 'PageSize',
        'requestId' => 'RequestId',
        'totalPage' => 'TotalPage',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complete) {
            $res['Complete'] = $this->complete;
        }
        if (null !== $this->curPage) {
            $res['CurPage'] = $this->curPage;
        }
        if (null !== $this->logs) {
            $res['Logs'] = null !== $this->logs ? $this->logs->toMap() : null;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInternetDnsLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Complete'])) {
            $model->complete = $map['Complete'];
        }
        if (isset($map['CurPage'])) {
            $model->curPage = $map['CurPage'];
        }
        if (isset($map['Logs'])) {
            $model->logs = logs::fromMap($map['Logs']);
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
