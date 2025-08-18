<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAdHocTaskLogResponseBody;

use AlibabaCloud\Dara\Model;

class logInfo extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $hasNext;

    /**
     * @var bool
     */
    public $hasResult;

    /**
     * @var int
     */
    public $nextOffset;

    /**
     * @var int
     */
    public $subTaskId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'content' => 'Content',
        'hasNext' => 'HasNext',
        'hasResult' => 'HasResult',
        'nextOffset' => 'NextOffset',
        'subTaskId' => 'SubTaskId',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }

        if (null !== $this->hasResult) {
            $res['HasResult'] = $this->hasResult;
        }

        if (null !== $this->nextOffset) {
            $res['NextOffset'] = $this->nextOffset;
        }

        if (null !== $this->subTaskId) {
            $res['SubTaskId'] = $this->subTaskId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }

        if (isset($map['HasResult'])) {
            $model->hasResult = $map['HasResult'];
        }

        if (isset($map['NextOffset'])) {
            $model->nextOffset = $map['NextOffset'];
        }

        if (isset($map['SubTaskId'])) {
            $model->subTaskId = $map['SubTaskId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
