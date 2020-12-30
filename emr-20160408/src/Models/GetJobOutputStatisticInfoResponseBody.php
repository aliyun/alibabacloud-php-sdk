<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetJobOutputStatisticInfoResponseBody\jobOutputList;
use AlibabaCloud\Tea\Model;

class GetJobOutputStatisticInfoResponseBody extends Model
{
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
    public $pageNumber;

    /**
     * @var int
     */
    public $total;

    /**
     * @var jobOutputList
     */
    public $jobOutputList;
    protected $_name = [
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'pageNumber'    => 'PageNumber',
        'total'         => 'Total',
        'jobOutputList' => 'JobOutputList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->jobOutputList) {
            $res['JobOutputList'] = null !== $this->jobOutputList ? $this->jobOutputList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobOutputStatisticInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['JobOutputList'])) {
            $model->jobOutputList = jobOutputList::fromMap($map['JobOutputList']);
        }

        return $model;
    }
}
