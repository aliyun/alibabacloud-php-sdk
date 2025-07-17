<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\dependencies;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\script;
use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The unique code of the client. This code uniquely identifies a task.
     *
     * This parameter is required.
     *
     * @example Task_0bc5213917368545132902xxxxxxxx
     *
     * @var string
     */
    public $clientUniqueCode;

    /**
     * @description The information about the associated data source.
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @description The dependency information.
     *
     * @var dependencies[]
     */
    public $dependencies;

    /**
     * @description The input information.
     *
     * @var inputs
     */
    public $inputs;

    /**
     * @description The name of the task.
     *
     * This parameter is required.
     *
     * @example SQL node.
     *
     * @var string
     */
    public $name;

    /**
     * @description The output information.
     *
     * @var outputs
     */
    public $outputs;

    /**
     * @description The account ID of the owner.
     *
     * This parameter is required.
     *
     * @example 1000
     *
     * @var string
     */
    public $owner;

    /**
     * @description The configurations of the runtime environment, such as the resource group information.
     *
     * This parameter is required.
     *
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @description The script information.
     *
     * @var script
     */
    public $script;

    /**
     * @description The timeout period of task running. Unit: seconds.
     *
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The type of the task.
     *
     * This parameter is required.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clientUniqueCode' => 'ClientUniqueCode',
        'dataSource' => 'DataSource',
        'dependencies' => 'Dependencies',
        'inputs' => 'Inputs',
        'name' => 'Name',
        'outputs' => 'Outputs',
        'owner' => 'Owner',
        'runtimeResource' => 'RuntimeResource',
        'script' => 'Script',
        'timeout' => 'Timeout',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientUniqueCode) {
            $res['ClientUniqueCode'] = $this->clientUniqueCode;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
        }
        if (null !== $this->dependencies) {
            $res['Dependencies'] = [];
            if (null !== $this->dependencies && \is_array($this->dependencies)) {
                $n = 0;
                foreach ($this->dependencies as $item) {
                    $res['Dependencies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = null !== $this->outputs ? $this->outputs->toMap() : null;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toMap() : null;
        }
        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toMap() : null;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientUniqueCode'])) {
            $model->clientUniqueCode = $map['ClientUniqueCode'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }
        if (isset($map['Dependencies'])) {
            if (!empty($map['Dependencies'])) {
                $model->dependencies = [];
                $n = 0;
                foreach ($map['Dependencies'] as $item) {
                    $model->dependencies[$n++] = null !== $item ? dependencies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Inputs'])) {
            $model->inputs = inputs::fromMap($map['Inputs']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = outputs::fromMap($map['Outputs']);
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }
        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
