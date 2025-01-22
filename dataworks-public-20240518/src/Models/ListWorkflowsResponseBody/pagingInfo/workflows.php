<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowsResponseBody\pagingInfo\workflows\trigger;

class workflows extends Model
{
    /**
     * @var string
     */
    public $clientUniqueCode;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $createUser;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $envType;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $modifyTime;
    /**
     * @var string
     */
    public $modifyUser;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var string
     */
    public $parameters;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'clientUniqueCode' => 'ClientUniqueCode',
        'createTime'       => 'CreateTime',
        'createUser'       => 'CreateUser',
        'description'      => 'Description',
        'envType'          => 'EnvType',
        'id'               => 'Id',
        'modifyTime'       => 'ModifyTime',
        'modifyUser'       => 'ModifyUser',
        'name'             => 'Name',
        'owner'            => 'Owner',
        'parameters'       => 'Parameters',
        'projectId'        => 'ProjectId',
        'trigger'          => 'Trigger',
    ];

    public function validate()
    {
        if (null !== $this->trigger) {
            $this->trigger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientUniqueCode) {
            $res['ClientUniqueCode'] = $this->clientUniqueCode;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toArray($noStream) : $this->trigger;
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
        if (isset($map['ClientUniqueCode'])) {
            $model->clientUniqueCode = $map['ClientUniqueCode'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        return $model;
    }
}
