<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateTeamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateTeamResponseBody\data\agents;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateTeamResponseBody\data\users;

class data extends Model
{
    /**
     * @var agents[]
     */
    public $agents;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $teamId;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var users[]
     */
    public $users;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agents' => 'agents',
        'createdAt' => 'createdAt',
        'description' => 'description',
        'name' => 'name',
        'status' => 'status',
        'teamId' => 'teamId',
        'updatedAt' => 'updatedAt',
        'users' => 'users',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->agents)) {
            Model::validateArray($this->agents);
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agents) {
            if (\is_array($this->agents)) {
                $res['agents'] = [];
                $n1 = 0;
                foreach ($this->agents as $item1) {
                    $res['agents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->teamId) {
            $res['teamId'] = $this->teamId;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['users'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['agents'])) {
            if (!empty($map['agents'])) {
                $model->agents = [];
                $n1 = 0;
                foreach ($map['agents'] as $item1) {
                    $model->agents[$n1] = agents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['teamId'])) {
            $model->teamId = $map['teamId'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['users'])) {
            if (!empty($map['users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['users'] as $item1) {
                    $model->users[$n1] = users::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
