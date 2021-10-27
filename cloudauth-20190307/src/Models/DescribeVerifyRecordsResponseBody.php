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
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryId;

    /**
     * @var recordsList[]
     */
    public $recordsList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'queryId'     => 'QueryId',
        'recordsList' => 'RecordsList',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
