<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateTeamRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateTeamRequest\body\agents;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateTeamRequest\body\users;

class body extends Model
{
    /**
     * @var agents[]
     */
    public $agents;

    /**
     * @var string
     */
    public $description;

    /**
     * @var users[]
     */
    public $users;
    protected $_name = [
        'agents' => 'agents',
        'description' => 'description',
        'users' => 'users',
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

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        return $model;
    }
}
