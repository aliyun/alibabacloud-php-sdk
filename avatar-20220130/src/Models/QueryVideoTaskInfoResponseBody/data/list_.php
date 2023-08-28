<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\QueryVideoTaskInfoResponseBody\data;

use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryVideoTaskInfoResponseBody\data\list_\taskResult;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $status;

    /**
     * @var taskResult
     */
    public $taskResult;

    /**
     * @example 789c45a5-2dca-4cd2-8fa7-f70a77e335ad
     *
     * @var string
     */
    public $taskUuid;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'status'     => 'Status',
        'taskResult' => 'TaskResult',
        'taskUuid'   => 'TaskUuid',
        'title'      => 'Title',
        'type'       => 'Type',
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
        if (null !== $this->taskResult) {
            $res['TaskResult'] = null !== $this->taskResult ? $this->taskResult->toMap() : null;
        }
        if (null !== $this->taskUuid) {
            $res['TaskUuid'] = $this->taskUuid;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskResult'])) {
            $model->taskResult = taskResult::fromMap($map['TaskResult']);
        }
        if (isset($map['TaskUuid'])) {
            $model->taskUuid = $map['TaskUuid'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
