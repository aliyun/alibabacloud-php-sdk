<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectTasksResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $taskgroupId;

    /**
     * @var string
     */
    public $tasklistId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $modifierId;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'taskgroupId' => 'TaskgroupId',
        'tasklistId'  => 'TasklistId',
        'projectId'   => 'ProjectId',
        'modifierId'  => 'ModifierId',
        'updated'     => 'Updated',
        'creatorId'   => 'CreatorId',
        'created'     => 'Created',
        'name'        => 'Name',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskgroupId) {
            $res['TaskgroupId'] = $this->taskgroupId;
        }
        if (null !== $this->tasklistId) {
            $res['TasklistId'] = $this->tasklistId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }
        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskgroupId'])) {
            $model->taskgroupId = $map['TaskgroupId'];
        }
        if (isset($map['TasklistId'])) {
            $model->tasklistId = $map['TasklistId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }
        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
