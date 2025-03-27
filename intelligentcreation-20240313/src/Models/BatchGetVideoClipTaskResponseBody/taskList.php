<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetVideoClipTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetVideoClipTaskResponseBody\taskList\videoList;

class taskList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var float
     */
    public $totalDuration;

    /**
     * @var int
     */
    public $totalToken;

    /**
     * @var videoList[]
     */
    public $videoList;
    protected $_name = [
        'status' => 'status',
        'taskId' => 'taskId',
        'totalDuration' => 'totalDuration',
        'totalToken' => 'totalToken',
        'videoList' => 'videoList',
    ];

    public function validate()
    {
        if (\is_array($this->videoList)) {
            Model::validateArray($this->videoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->videoList)) {
                $res['videoList'] = [];
                $n1 = 0;
                foreach ($this->videoList as $item1) {
                    $res['videoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['videoList'] as $item1) {
                    $model->videoList[$n1++] = videoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
