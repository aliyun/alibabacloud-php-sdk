<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryRobotTaskListResponseBody extends Model
{
    /**
     * @description The response code.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The robocall tasks, in the JSON format.
     *
     *   **id**: the unique ID of the robocall task.
     *   **taskName**: the task name.
     *   **robotId**: the robot ID.
     *   **robotName**: the robot name.
     *   **status**: the task state.
     *   **scheduleType**: the scheduling type. Valid values: **SINGLE** and **ORDER**. The value SINGLE indicates that the task was started immediately after it was created. The value ORDER indicates that the task was started at a scheduled time.
     *   **createTime**: the time when the task was created, in the yyyy.MM.dd HH:mm:ss format.
     *   **completeTime**: the time when the task was completed, in the yyyy.MM.dd HH:mm:ss format.
     *   **fireTime**: the time when the task was started, in the yyyy.MM.dd HH:mm:ss format.
     *   **totalCount**: the total number of calls processed.
     *   **finishCount**: the number of calls completed.
     *
     * @example [ {"id": 1045001, "taskName": "Test Template", "robotId": 1000000075003, "robotName": "robot", "status": "INIT","scheduleType": "SINGLE", "createTime": "2019.06.14 14:55:23", "completeTime": "2019.06.14 14:55:23", "fireTime": "2019.06.14 14:55:23", "totalCount": 1000, "finishCount": 998} ]
     *
     * @var string
     */
    public $data;

    /**
     * @description The returned message.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries per page.
     *
     * @example 1
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example D9CB3933-9FE3-4870-BA8E-2BEE91B69D23
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of tasks.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'code'       => 'Code',
        'data'       => 'Data',
        'message'    => 'Message',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return QueryRobotTaskListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
