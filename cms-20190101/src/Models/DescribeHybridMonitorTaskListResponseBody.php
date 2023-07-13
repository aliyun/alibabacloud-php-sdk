<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody\taskList;
use AlibabaCloud\Tea\Model;

class DescribeHybridMonitorTaskListResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The configurations of the logs that are imported from Log Service.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The method that is used to aggregate on-premises log data.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The conditions that are used to match the instances in the application group.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The alias of the extended field that indicates the result of basic operations that are performed on aggregation results.
     *
     * @example 11145B76-566A-5D80-A8A3-FAD98D310079
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timeout period during which the CloudMonitor agent collects host monitoring data. Valid values:
     *
     *   0
     *   15
     *   30
     *   60
     *
     * Unit: seconds.
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The ID of the metric import task.
     *
     * @var taskList[]
     */
    public $taskList;

    /**
     * @description The method that is used to filter logs imported from Log Service. Valid values:
     *
     *   `contain`: contains
     *   `notContain`: does not contain
     *   `>`: greater than
     *   `<`: less than
     *   `=`: equal to
     *   `! =`: not equal to
     *   `>=`: greater than or equal to
     *   `<=`: less than or equal to
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'taskList'   => 'TaskList',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (null !== $this->taskList) {
            $res['TaskList'] = [];
            if (null !== $this->taskList && \is_array($this->taskList)) {
                $n = 0;
                foreach ($this->taskList as $item) {
                    $res['TaskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridMonitorTaskListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
        if (isset($map['TaskList'])) {
            if (!empty($map['TaskList'])) {
                $model->taskList = [];
                $n               = 0;
                foreach ($map['TaskList'] as $item) {
                    $model->taskList[$n++] = null !== $item ? taskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
