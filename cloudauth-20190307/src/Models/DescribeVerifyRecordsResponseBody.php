<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponseBody\recordsList;
use AlibabaCloud\Tea\Model;

class DescribeVerifyRecordsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $currentPage;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var recordsList[]
     */
    public $recordsList;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'currentPage' => 'CurrentPage',
        'queryId'     => 'QueryId',
        'recordsList' => 'RecordsList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }
        if (null !== $this->recordsList) {
            $res['RecordsList'] = [];
            if (null !== $this->recordsList && \is_array($this->recordsList)) {
                $n = 0;
                foreach ($this->recordsList as $item) {
                    $res['RecordsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifyRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }
        if (isset($map['RecordsList'])) {
            if (!empty($map['RecordsList'])) {
                $model->recordsList = [];
                $n                  = 0;
                foreach ($map['RecordsList'] as $item) {
                    $model->recordsList[$n++] = null !== $item ? recordsList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
