<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetCredentialResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetCredentialResponseBody\data\boundWorkers;

class data extends Model
{
    /**
     * @var boundWorkers[]
     */
    public $boundWorkers;

    /**
     * @var string
     */
    public $createTime;

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
    public $updateTime;
    protected $_name = [
        'boundWorkers' => 'BoundWorkers',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->boundWorkers)) {
            Model::validateArray($this->boundWorkers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundWorkers) {
            if (\is_array($this->boundWorkers)) {
                $res['BoundWorkers'] = [];
                $n1 = 0;
                foreach ($this->boundWorkers as $item1) {
                    $res['BoundWorkers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['BoundWorkers'])) {
            if (!empty($map['BoundWorkers'])) {
                $model->boundWorkers = [];
                $n1 = 0;
                foreach ($map['BoundWorkers'] as $item1) {
                    $model->boundWorkers[$n1] = boundWorkers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
