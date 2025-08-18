<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableLineageByTaskIdRequest;

use AlibabaCloud\Dara\Model;

class tableLineageByTaskIdQuery extends Model
{
    /**
     * @var bool
     */
    public $needNotExistObject;

    /**
     * @var string
     */
    public $taskEnv;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'needNotExistObject' => 'NeedNotExistObject',
        'taskEnv' => 'TaskEnv',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
