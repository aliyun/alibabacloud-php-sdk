<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\source\dataset;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\source\trajectory;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config\source\versionPolicy;

class source extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var mixed[]
     */
    public $binding;

    /**
     * @var dataset
     */
    public $dataset;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $maxRecords;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var trajectory
     */
    public $trajectory;

    /**
     * @var string
     */
    public $type;

    /**
     * @var versionPolicy
     */
    public $versionPolicy;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'binding' => 'binding',
        'dataset' => 'dataset',
        'datasetName' => 'datasetName',
        'format' => 'format',
        'maxRecords' => 'maxRecords',
        'startTime' => 'startTime',
        'trajectory' => 'trajectory',
        'type' => 'type',
        'versionPolicy' => 'versionPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->binding)) {
            Model::validateArray($this->binding);
        }
        if (null !== $this->dataset) {
            $this->dataset->validate();
        }
        if (null !== $this->trajectory) {
            $this->trajectory->validate();
        }
        if (null !== $this->versionPolicy) {
            $this->versionPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->binding) {
            if (\is_array($this->binding)) {
                $res['binding'] = [];
                foreach ($this->binding as $key1 => $value1) {
                    $res['binding'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dataset) {
            $res['dataset'] = null !== $this->dataset ? $this->dataset->toArray($noStream) : $this->dataset;
        }

        if (null !== $this->datasetName) {
            $res['datasetName'] = $this->datasetName;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->maxRecords) {
            $res['maxRecords'] = $this->maxRecords;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->trajectory) {
            $res['trajectory'] = null !== $this->trajectory ? $this->trajectory->toArray($noStream) : $this->trajectory;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->versionPolicy) {
            $res['versionPolicy'] = null !== $this->versionPolicy ? $this->versionPolicy->toArray($noStream) : $this->versionPolicy;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['binding'])) {
            if (!empty($map['binding'])) {
                $model->binding = [];
                foreach ($map['binding'] as $key1 => $value1) {
                    $model->binding[$key1] = $value1;
                }
            }
        }

        if (isset($map['dataset'])) {
            $model->dataset = dataset::fromMap($map['dataset']);
        }

        if (isset($map['datasetName'])) {
            $model->datasetName = $map['datasetName'];
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['maxRecords'])) {
            $model->maxRecords = $map['maxRecords'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['trajectory'])) {
            $model->trajectory = trajectory::fromMap($map['trajectory']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['versionPolicy'])) {
            $model->versionPolicy = versionPolicy::fromMap($map['versionPolicy']);
        }

        return $model;
    }
}
