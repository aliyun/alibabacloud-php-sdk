<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object;

use AlibabaCloud\Tea\Model;

class taskflowstatus extends Model
{
    /**
     * @var string
     */
    public $taskflowId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $kind;
    protected $_name = [
        'taskflowId' => 'TaskflowId',
        'name'       => 'Name',
        'id'         => 'Id',
        'kind'       => 'Kind',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskflowId) {
            $res['TaskflowId'] = $this->taskflowId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskflowstatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskflowId'])) {
            $model->taskflowId = $map['TaskflowId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        return $model;
    }
}
