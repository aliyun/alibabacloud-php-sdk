<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListTeamsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListTeamsResponseBody\items\teamMembers;

class items extends Model
{
    /**
     * @var string
     */
    public $adminName;

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
    public $instanceId;

    /**
     * @var string
     */
    public $leaderName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var teamMembers[]
     */
    public $teamMembers;

    /**
     * @var string[]
     */
    public $workerNames;
    protected $_name = [
        'adminName' => 'AdminName',
        'createdAt' => 'CreatedAt',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'leaderName' => 'LeaderName',
        'name' => 'Name',
        'status' => 'Status',
        'teamMembers' => 'TeamMembers',
        'workerNames' => 'WorkerNames',
    ];

    public function validate()
    {
        if (\is_array($this->teamMembers)) {
            Model::validateArray($this->teamMembers);
        }
        if (\is_array($this->workerNames)) {
            Model::validateArray($this->workerNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminName) {
            $res['AdminName'] = $this->adminName;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->leaderName) {
            $res['LeaderName'] = $this->leaderName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (null !== $this->workerNames) {
            if (\is_array($this->workerNames)) {
                $res['WorkerNames'] = [];
                $n1 = 0;
                foreach ($this->workerNames as $item1) {
                    $res['WorkerNames'][$n1] = $item1;
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
        if (isset($map['AdminName'])) {
            $model->adminName = $map['AdminName'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LeaderName'])) {
            $model->leaderName = $map['LeaderName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        if (isset($map['WorkerNames'])) {
            if (!empty($map['WorkerNames'])) {
                $model->workerNames = [];
                $n1 = 0;
                foreach ($map['WorkerNames'] as $item1) {
                    $model->workerNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
