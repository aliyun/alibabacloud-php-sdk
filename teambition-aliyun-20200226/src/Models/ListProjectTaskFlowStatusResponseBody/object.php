<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ListProjectTaskFlowStatusResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $taskflowId;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var int
     */
    public $pos;

    /**
     * @var bool
     */
    public $isDeleted;

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
    public $name;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $rejectStatusIds;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'taskflowId'      => 'TaskflowId',
        'kind'            => 'Kind',
        'pos'             => 'Pos',
        'isDeleted'       => 'IsDeleted',
        'updated'         => 'Updated',
        'creatorId'       => 'CreatorId',
        'name'            => 'Name',
        'created'         => 'Created',
        'rejectStatusIds' => 'RejectStatusIds',
        'id'              => 'Id',
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
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->pos) {
            $res['Pos'] = $this->pos;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->rejectStatusIds) {
            $res['RejectStatusIds'] = $this->rejectStatusIds;
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
        if (isset($map['TaskflowId'])) {
            $model->taskflowId = $map['TaskflowId'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['Pos'])) {
            $model->pos = $map['Pos'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['RejectStatusIds'])) {
            $model->rejectStatusIds = $map['RejectStatusIds'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
