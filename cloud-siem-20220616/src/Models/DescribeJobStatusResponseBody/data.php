<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeJobStatusResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeJobStatusResponseBody\data\errTaskList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the task configuration.
     *
     * @example xxxx_folder_xxxx
     *
     * @var string
     */
    public $configId;

    /**
     * @description The list of failed task.
     *
     * @var errTaskList[]
     */
    public $errTaskList;

    /**
     * @description The number of failed tasks.
     *
     * @example 8
     *
     * @var int
     */
    public $failedCount;

    /**
     * @description The number of scan tasks that are complete.
     *
     * @example 52
     *
     * @var int
     */
    public $finishCount;

    /**
     * @description The ID of the folder.
     *
     * @example fd-xxxxx
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The number of existing tasks that are created to add logs within the data source.
     *
     * @example 60
     *
     * @var int
     */
    public $taskCount;

    /**
     * @description The status of submitted task.
     *
     * @example finish
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'configId'    => 'ConfigId',
        'errTaskList' => 'ErrTaskList',
        'failedCount' => 'FailedCount',
        'finishCount' => 'FinishCount',
        'folderId'    => 'FolderId',
        'taskCount'   => 'TaskCount',
        'taskStatus'  => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->errTaskList) {
            $res['ErrTaskList'] = [];
            if (null !== $this->errTaskList && \is_array($this->errTaskList)) {
                $n = 0;
                foreach ($this->errTaskList as $item) {
                    $res['ErrTaskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->taskCount) {
            $res['TaskCount'] = $this->taskCount;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['ErrTaskList'])) {
            if (!empty($map['ErrTaskList'])) {
                $model->errTaskList = [];
                $n                  = 0;
                foreach ($map['ErrTaskList'] as $item) {
                    $model->errTaskList[$n++] = null !== $item ? errTaskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['TaskCount'])) {
            $model->taskCount = $map['TaskCount'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
