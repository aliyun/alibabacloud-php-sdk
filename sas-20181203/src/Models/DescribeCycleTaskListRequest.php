<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCycleTaskListRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the task. Valid values:
     *
     *   **VIRUS\_VUL\_SCHEDULE_SCAN**: virus scan task
     *   **IMAGE_SCAN**: image scan task
     *   **EMG\_VUL\_SCHEDULE_SCAN**: urgent vulnerability scan task
     *
     * @example IMAGE_SCAN
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the task. Valid values:
     *
     *   **VIRUS\_VUL\_SCHEDULE_SCAN**: virus scan task
     *   **IMAGE_SCAN**: image scan task
     *   **EMG\_VUL\_SCHEDULE_SCAN**: urgent vulnerability scan task
     *
     * @example IMAGE_SCAN
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'taskName'    => 'TaskName',
        'taskType'    => 'TaskType',
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
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCycleTaskListRequest
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
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
