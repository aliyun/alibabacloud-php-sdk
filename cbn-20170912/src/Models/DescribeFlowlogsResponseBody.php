<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsResponseBody\flowLogs;
use AlibabaCloud\Tea\Model;

class DescribeFlowlogsResponseBody extends Model
{
    /**
     * @description The status of the flow log. Valid values:
     *
     *   **Active**: The flow log is enabled.
     *   **Inactive**: The flow log is disabled.
     *
     * @var flowLogs
     */
    public $flowLogs;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The ID of the request.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description Indicates whether the call is successful. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example F7DDDC17-FA06-4AC2-8F35-59D2470FCFC1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the flow log.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description A list of flow logs.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'flowLogs'   => 'FlowLogs',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowLogs) {
            $res['FlowLogs'] = null !== $this->flowLogs ? $this->flowLogs->toMap() : null;
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['FlowLogs'])) {
            $model->flowLogs = flowLogs::fromMap($map['FlowLogs']);
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
