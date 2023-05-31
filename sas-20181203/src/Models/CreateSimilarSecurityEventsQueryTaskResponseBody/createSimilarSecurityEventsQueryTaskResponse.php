<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateSimilarSecurityEventsQueryTaskResponseBody;

use AlibabaCloud\Tea\Model;

class createSimilarSecurityEventsQueryTaskResponse extends Model
{
    /**
     * @description The status of the task. Valid values:
     *
     *   **New**: The task is created.
     *   **RetrievingData**: Data is being retrieved.
     *   **DataRetrieved**: Data is retrieved.
     *   **Processing**: The task is running.
     *   **Success**: The task is successful.
     *   **Failed**: The task failed.
     *   **PartialFailed**: The task partially failed.
     *
     * @example New
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task.
     *
     * @example 2915
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createSimilarSecurityEventsQueryTaskResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
