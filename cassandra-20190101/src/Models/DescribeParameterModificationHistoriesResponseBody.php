<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeParameterModificationHistoriesResponseBody\histories;
use AlibabaCloud\Tea\Model;

class DescribeParameterModificationHistoriesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var histories
     */
    public $histories;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'pageSize'   => 'PageSize',
        'pageNumber' => 'PageNumber',
        'histories'  => 'Histories',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->histories) {
            $res['Histories'] = null !== $this->histories ? $this->histories->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterModificationHistoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Histories'])) {
            $model->histories = histories::fromMap($map['Histories']);
        }

        return $model;
    }
}
