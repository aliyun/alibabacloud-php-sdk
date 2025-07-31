<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityScanRequest\computeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityScanRequest\hooks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityScanRequest\parameters;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityScanRequest\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityScanRequest\trigger;
use AlibabaCloud\Tea\Model;

class UpdateDataQualityScanRequest extends Model
{
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
     * @example 10001
     *
     * @var int
     */
    public $id;

    /**
     * @example data_quality_scan_001
     *
     * @var string
     */
    public $name;

    /**
     * @example 231263586109857423
     *
     * @var string
     */
    public $owner;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @example 101
     *
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
        'computeResource' => 'ComputeResource',
        'description' => 'Description',
        'hooks' => 'Hooks',
        'id' => 'Id',
        'name' => 'Name',
        'owner' => 'Owner',
        'parameters' => 'Parameters',
        'projectId' => 'ProjectId',
        'runtimeResource' => 'RuntimeResource',
        'spec' => 'Spec',
        'trigger' => 'Trigger',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = null !== $this->computeResource ? $this->computeResource->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hooks) {
            $res['Hooks'] = [];
            if (null !== $this->hooks && \is_array($this->hooks)) {
                $n = 0;
                foreach ($this->hooks as $item) {
                    $res['Hooks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataQualityScanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeResource'])) {
            $model->computeResource = computeResource::fromMap($map['ComputeResource']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Hooks'])) {
            if (!empty($map['Hooks'])) {
                $model->hooks = [];
                $n = 0;
                foreach ($map['Hooks'] as $item) {
                    $model->hooks[$n++] = null !== $item ? hooks::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
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
