<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetVideoClipTaskResponseBody;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetVideoClipTaskResponseBody\taskList\videoList;
use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @example FINISHED
     *
     * @var string
     */
    public $status;

    /**
     * @example 864413342857035776
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 43335
     *
     * @var float
     */
    public $totalDuration;

    /**
     * @example 11
     *
     * @var int
     */
    public $totalToken;

    /**
     * @var videoList[]
     */
    public $videoList;
    protected $_name = [
        'status'        => 'status',
        'taskId'        => 'taskId',
        'totalDuration' => 'totalDuration',
        'totalToken'    => 'totalToken',
        'videoList'     => 'videoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->totalDuration) {
            $res['totalDuration'] = $this->totalDuration;
        }
        if (null !== $this->totalToken) {
            $res['totalToken'] = $this->totalToken;
        }
        if (null !== $this->videoList) {
            $res['videoList'] = [];
            if (null !== $this->videoList && \is_array($this->videoList)) {
                $n = 0;
                foreach ($this->videoList as $item) {
                    $res['videoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['totalDuration'])) {
            $model->totalDuration = $map['totalDuration'];
        }
        if (isset($map['totalToken'])) {
            $model->totalToken = $map['totalToken'];
        }
        if (isset($map['videoList'])) {
            if (!empty($map['videoList'])) {
                $model->videoList = [];
                $n                = 0;
                foreach ($map['videoList'] as $item) {
                    $model->videoList[$n++] = null !== $item ? videoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
