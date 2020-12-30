<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetJobRunningTimeStatisticInfoResponseBody\runningTimeList;
use AlibabaCloud\Tea\Model;

class GetJobRunningTimeStatisticInfoResponseBody extends Model
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
     * @var runningTimeList
     */
    public $runningTimeList;
    protected $_name = [
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'pageNumber'      => 'PageNumber',
        'total'           => 'Total',
        'runningTimeList' => 'RunningTimeList',
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
        if (null !== $this->runningTimeList) {
            $res['RunningTimeList'] = null !== $this->runningTimeList ? $this->runningTimeList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobRunningTimeStatisticInfoResponseBody
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
        if (isset($map['RunningTimeList'])) {
            $model->runningTimeList = runningTimeList::fromMap($map['RunningTimeList']);
        }

        return $model;
    }
}
