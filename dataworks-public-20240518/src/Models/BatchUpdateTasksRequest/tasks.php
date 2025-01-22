<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\BatchUpdateTasksRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\BatchUpdateTasksRequest\tasks\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\BatchUpdateTasksRequest\tasks\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\BatchUpdateTasksRequest\tasks\tags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\BatchUpdateTasksRequest\tasks\trigger;

class tasks extends Model
{
    /**
     * @var dataSource
     */
    public $dataSource;
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
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var int
     */
    public $rerunInterval;
    /**
     * @var string
     */
    public $rerunMode;
    /**
     * @var int
     */
    public $rerunTimes;
    /**
     * @var runtimeResource
     */
    public $runtimeResource;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var int
     */
    public $timeout;
    /**
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'dataSource'      => 'DataSource',
        'description'     => 'Description',
        'envType'         => 'EnvType',
        'id'              => 'Id',
        'name'            => 'Name',
        'owner'           => 'Owner',
        'rerunInterval'   => 'RerunInterval',
        'rerunMode'       => 'RerunMode',
        'rerunTimes'      => 'RerunTimes',
        'runtimeResource' => 'RuntimeResource',
        'tags'            => 'Tags',
        'timeout'         => 'Timeout',
        'trigger'         => 'Trigger',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (null !== $this->runtimeResource) {
            $this->runtimeResource->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->trigger) {
            $this->trigger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->rerunInterval) {
            $res['RerunInterval'] = $this->rerunInterval;
        }

        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }

        if (null !== $this->rerunTimes) {
            $res['RerunTimes'] = $this->rerunTimes;
        }

        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toArray($noStream) : $this->runtimeResource;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RerunInterval'])) {
            $model->rerunInterval = $map['RerunInterval'];
        }

        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }

        if (isset($map['RerunTimes'])) {
            $model->rerunTimes = $map['RerunTimes'];
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        return $model;
    }
}
