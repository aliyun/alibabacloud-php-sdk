<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityScanRequest\computeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityScanRequest\hooks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityScanRequest\parameters;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityScanRequest\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityScanRequest\trigger;

class CreateDataQualityScanRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var computeResource
     */
    public $computeResource;

    /**
     * @var string
     */
    public $description;

    /**
     * @var hooks[]
     */
    public $hooks;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'computeResource' => 'ComputeResource',
        'description' => 'Description',
        'hooks' => 'Hooks',
        'name' => 'Name',
        'owner' => 'Owner',
        'parameters' => 'Parameters',
        'projectId' => 'ProjectId',
        'runtimeResource' => 'RuntimeResource',
        'spec' => 'Spec',
        'trigger' => 'Trigger',
    ];

    public function validate()
    {
        if (null !== $this->computeResource) {
            $this->computeResource->validate();
        }
        if (\is_array($this->hooks)) {
            Model::validateArray($this->hooks);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (null !== $this->runtimeResource) {
            $this->runtimeResource->validate();
        }
        if (null !== $this->trigger) {
            $this->trigger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->computeResource) {
            $res['ComputeResource'] = null !== $this->computeResource ? $this->computeResource->toArray($noStream) : $this->computeResource;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hooks) {
            if (\is_array($this->hooks)) {
                $res['Hooks'] = [];
                $n1 = 0;
                foreach ($this->hooks as $item1) {
                    $res['Hooks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toArray($noStream) : $this->runtimeResource;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ComputeResource'])) {
            $model->computeResource = computeResource::fromMap($map['ComputeResource']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Hooks'])) {
            if (!empty($map['Hooks'])) {
                $model->hooks = [];
                $n1 = 0;
                foreach ($map['Hooks'] as $item1) {
                    $model->hooks[$n1] = hooks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1] = parameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        return $model;
    }
}
