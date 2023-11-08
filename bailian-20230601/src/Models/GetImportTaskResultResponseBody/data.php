<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\GetImportTaskResultResponseBody;

use AlibabaCloud\SDK\Bailian\V20230601\Models\GetImportTaskResultResponseBody\data\details;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var details[]
     */
    public $details;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskStatusText;
    protected $_name = [
        'details'        => 'Details',
        'taskId'         => 'TaskId',
        'taskStatus'     => 'TaskStatus',
        'taskStatusText' => 'TaskStatusText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskStatusText) {
            $res['TaskStatusText'] = $this->taskStatusText;
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
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskStatusText'])) {
            $model->taskStatusText = $map['TaskStatusText'];
        }

        return $model;
    }
}
