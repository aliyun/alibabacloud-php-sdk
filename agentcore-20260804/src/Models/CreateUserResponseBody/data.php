<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateUserResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agentCoreUserId;

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
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentCoreUserId' => 'agentCoreUserId',
        'authMethod' => 'authMethod',
        'createdAt' => 'createdAt',
        'displayName' => 'displayName',
        'email' => 'email',
        'initialPassword' => 'initialPassword',
        'name' => 'name',
        'note' => 'note',
        'regionId' => 'regionId',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCoreUserId) {
            $res['agentCoreUserId'] = $this->agentCoreUserId;
        }

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

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['agentCoreUserId'])) {
            $model->agentCoreUserId = $map['agentCoreUserId'];
        }

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

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
