<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\SDK\Bailian\V20230601\Models\GetText2ImageJobResponseBody\images;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetText2ImageJobResponseBody\taskMetrics;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetText2ImageJobResponseBody\usage;
use AlibabaCloud\Tea\Model;

class GetText2ImageJobResponseBody extends Model
{
    /**
     * @var images[]
     */
    public $images;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var taskMetrics
     */
    public $taskMetrics;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var usage[]
     */
    public $usage;
    protected $_name = [
        'images'      => 'Images',
        'requestId'   => 'RequestId',
        'taskId'      => 'TaskId',
        'taskMetrics' => 'TaskMetrics',
        'taskStatus'  => 'TaskStatus',
        'usage'       => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskMetrics) {
            $res['TaskMetrics'] = null !== $this->taskMetrics ? $this->taskMetrics->toMap() : null;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->usage) {
            $res['Usage'] = [];
            if (null !== $this->usage && \is_array($this->usage)) {
                $n = 0;
                foreach ($this->usage as $item) {
                    $res['Usage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetText2ImageJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n             = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskMetrics'])) {
            $model->taskMetrics = taskMetrics::fromMap($map['TaskMetrics']);
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Usage'])) {
            if (!empty($map['Usage'])) {
                $model->usage = [];
                $n            = 0;
                foreach ($map['Usage'] as $item) {
                    $model->usage[$n++] = null !== $item ? usage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
