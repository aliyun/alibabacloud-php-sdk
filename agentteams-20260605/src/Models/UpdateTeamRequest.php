<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateTeamRequest\teamMembers;

class UpdateTeamRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var teamMembers[]
     */
    public $teamMembers;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'teamMembers' => 'TeamMembers',
    ];

    public function validate()
    {
        if (\is_array($this->teamMembers)) {
            Model::validateArray($this->teamMembers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->teamMembers) {
            if (\is_array($this->teamMembers)) {
                $res['TeamMembers'] = [];
                $n1 = 0;
                foreach ($this->teamMembers as $item1) {
                    $res['TeamMembers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TeamMembers'])) {
            if (!empty($map['TeamMembers'])) {
                $model->teamMembers = [];
                $n1 = 0;
                foreach ($map['TeamMembers'] as $item1) {
                    $model->teamMembers[$n1] = teamMembers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
