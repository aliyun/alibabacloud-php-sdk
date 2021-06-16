<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result;

use AlibabaCloud\Tea\Model;

class taskFlowStatus extends Model
{
    /**
     * @var string
     */
    public $taskFlowId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pos;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'taskFlowId' => 'TaskFlowId',
        'name'       => 'Name',
        'pos'        => 'Pos',
        'kind'       => 'Kind',
        'id'         => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskFlowId) {
            $res['TaskFlowId'] = $this->taskFlowId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pos) {
            $res['Pos'] = $this->pos;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskFlowStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskFlowId'])) {
            $model->taskFlowId = $map['TaskFlowId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pos'])) {
            $model->pos = $map['Pos'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
