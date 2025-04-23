<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInternetDnsLogsResponseBody\logs;

class DescribeInternetDnsLogsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $complete;

    /**
     * @var int
     */
    public $curPage;

    /**
     * @var logs
     */
    public $logs;

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
    public $totalPage;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'complete' => 'Complete',
        'curPage' => 'CurPage',
        'logs' => 'Logs',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalPage' => 'TotalPage',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
        if (null !== $this->logs) {
            $this->logs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complete) {
            $res['Complete'] = $this->complete;
        }

        if (null !== $this->curPage) {
            $res['CurPage'] = $this->curPage;
        }

        if (null !== $this->logs) {
            $res['Logs'] = null !== $this->logs ? $this->logs->toArray($noStream) : $this->logs;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
