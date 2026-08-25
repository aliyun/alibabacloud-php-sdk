<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetTeamResponseBody\data;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $authMethod;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $initialPassword;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $teamRole;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'authMethod' => 'authMethod',
        'createdAt' => 'createdAt',
        'displayName' => 'displayName',
        'email' => 'email',
        'initialPassword' => 'initialPassword',
        'name' => 'name',
        'note' => 'note',
        'status' => 'status',
        'teamRole' => 'teamRole',
        'updatedAt' => 'updatedAt',
        'userId' => 'userId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authMethod) {
            $res['authMethod'] = $this->authMethod;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->initialPassword) {
            $res['initialPassword'] = $this->initialPassword;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->note) {
            $res['note'] = $this->note;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->teamRole) {
            $res['teamRole'] = $this->teamRole;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['authMethod'])) {
            $model->authMethod = $map['authMethod'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['initialPassword'])) {
            $model->initialPassword = $map['initialPassword'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['note'])) {
            $model->note = $map['note'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['teamRole'])) {
            $model->teamRole = $map['teamRole'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
