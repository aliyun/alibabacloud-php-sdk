<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAdHocTaskLogResponseBody;

use AlibabaCloud\Tea\Model;

class logInfo extends Model
{
    /**
     * @example test
     *
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
     * @example 2021
     *
     * @var int
     */
    public $nextOffset;

    /**
     * @example 0
     *
     * @var int
     */
    public $subTaskId;

    /**
     * @example MaxCompute_SQL_300000843_1611548758327
     *
     * @var string
     */
    public $taskId;

    /**
     * @example WAIT_RESOURCE
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return logInfo
     */
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
