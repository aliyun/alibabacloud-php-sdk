<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\dependencies;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks\script;

class tasks extends Model
{
    /**
     * @var string
     */
    public $clientUniqueCode;
    /**
     * @var dataSource
     */
    public $dataSource;
    /**
     * @var dependencies[]
     */
    public $dependencies;
    /**
     * @var inputs
     */
    public $inputs;
    /**
     * @var string
     */
    public $name;
    /**
     * @var outputs
     */
    public $outputs;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var runtimeResource
     */
    public $runtimeResource;
    /**
     * @var script
     */
    public $script;
    /**
     * @var int
     */
    public $timeout;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clientUniqueCode' => 'ClientUniqueCode',
        'dataSource'       => 'DataSource',
        'dependencies'     => 'Dependencies',
        'inputs'           => 'Inputs',
        'name'             => 'Name',
        'outputs'          => 'Outputs',
        'owner'            => 'Owner',
        'runtimeResource'  => 'RuntimeResource',
        'script'           => 'Script',
        'timeout'          => 'Timeout',
        'type'             => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (\is_array($this->dependencies)) {
            Model::validateArray($this->dependencies);
        }
        if (null !== $this->inputs) {
            $this->inputs->validate();
        }
        if (null !== $this->outputs) {
            $this->outputs->validate();
        }
        if (null !== $this->runtimeResource) {
            $this->runtimeResource->validate();
        }
        if (null !== $this->script) {
            $this->script->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientUniqueCode) {
            $res['ClientUniqueCode'] = $this->clientUniqueCode;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->dependencies) {
            if (\is_array($this->dependencies)) {
                $res['Dependencies'] = [];
                $n1                  = 0;
                foreach ($this->dependencies as $item1) {
                    $res['Dependencies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toArray($noStream) : $this->inputs;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputs) {
            $res['Outputs'] = null !== $this->outputs ? $this->outputs->toArray($noStream) : $this->outputs;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toArray($noStream) : $this->runtimeResource;
        }

        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toArray($noStream) : $this->script;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ClientUniqueCode'])) {
            $model->clientUniqueCode = $map['ClientUniqueCode'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }

        if (isset($map['Dependencies'])) {
            if (!empty($map['Dependencies'])) {
                $model->dependencies = [];
                $n1                  = 0;
                foreach ($map['Dependencies'] as $item1) {
                    $model->dependencies[$n1++] = dependencies::fromMap($item1);
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
