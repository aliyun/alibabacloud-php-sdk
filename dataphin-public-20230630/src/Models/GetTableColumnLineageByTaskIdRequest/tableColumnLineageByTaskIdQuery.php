<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableColumnLineageByTaskIdRequest;

use AlibabaCloud\Tea\Model;

class tableColumnLineageByTaskIdQuery extends Model
{
    /**
     * @var bool
     */
    public $needNotExistObject;

    /**
     * @example DEV
     *
     * @var string
     */
    public $taskEnv;

    /**
     * @description This parameter is required.
     *
     * @example n_123
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'needNotExistObject' => 'NeedNotExistObject',
        'taskEnv' => 'TaskEnv',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->needNotExistObject) {
            $res['NeedNotExistObject'] = $this->needNotExistObject;
        }
        if (null !== $this->taskEnv) {
            $res['TaskEnv'] = $this->taskEnv;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableColumnLineageByTaskIdQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedNotExistObject'])) {
            $model->needNotExistObject = $map['NeedNotExistObject'];
        }
        if (isset($map['TaskEnv'])) {
            $model->taskEnv = $map['TaskEnv'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
