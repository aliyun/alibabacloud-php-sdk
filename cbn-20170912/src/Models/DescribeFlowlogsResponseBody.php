<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsResponseBody\flowLogs;
use AlibabaCloud\Tea\Model;

class DescribeFlowlogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var string
     */
    public $success;

    /**
     * @var flowLogs
     */
    public $flowLogs;
    protected $_name = [
        'pageSize'   => 'PageSize',
        'pageNumber' => 'PageNumber',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'success'    => 'Success',
        'flowLogs'   => 'FlowLogs',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->flowLogs) {
            $res['FlowLogs'] = null !== $this->flowLogs ? $this->flowLogs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowlogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['FlowLogs'])) {
            $model->flowLogs = flowLogs::fromMap($map['FlowLogs']);
        }

        return $model;
    }
}
