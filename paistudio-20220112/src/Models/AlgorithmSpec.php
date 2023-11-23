<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec\computeResource;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec\customization;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec\progressDefinitions;
use AlibabaCloud\Tea\Model;

class AlgorithmSpec extends Model
{
    /**
     * @var Location
     */
    public $codeDir;

    /**
     * @var string[]
     */
    public $command;

    /**
     * @var computeResource
     */
    public $computeResource;

    /**
     * @var customization
     */
    public $customization;

    /**
     * @var HyperParameterDefinition[]
     */
    public $hyperParameters;

    /**
     * @var string
     */
    public $image;

    /**
     * @var Channel[]
     */
    public $inputChannels;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var MetricDefinition[]
     */
    public $metricDefinitions;

    /**
     * @var Channel[]
     */
    public $outputChannels;

    /**
     * @var progressDefinitions
     */
    public $progressDefinitions;

    /**
     * @var ConditionExpression[]
     */
    public $resourceRequirements;

    /**
     * @deprecated
     *
     * @var string[]
     */
    public $supportedInstanceTypes;

    /**
     * @var bool
     */
    public $supportsDistributedTraining;
    protected $_name = [
        'codeDir'                     => 'CodeDir',
        'command'                     => 'Command',
        'computeResource'             => 'ComputeResource',
        'customization'               => 'Customization',
        'hyperParameters'             => 'HyperParameters',
        'image'                       => 'Image',
        'inputChannels'               => 'InputChannels',
        'jobType'                     => 'JobType',
        'metricDefinitions'           => 'MetricDefinitions',
        'outputChannels'              => 'OutputChannels',
        'progressDefinitions'         => 'ProgressDefinitions',
        'resourceRequirements'        => 'ResourceRequirements',
        'supportedInstanceTypes'      => 'SupportedInstanceTypes',
        'supportsDistributedTraining' => 'SupportsDistributedTraining',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeDir) {
            $res['CodeDir'] = null !== $this->codeDir ? $this->codeDir->toMap() : null;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = null !== $this->computeResource ? $this->computeResource->toMap() : null;
        }
        if (null !== $this->customization) {
            $res['Customization'] = null !== $this->customization ? $this->customization->toMap() : null;
        }
        if (null !== $this->hyperParameters) {
            $res['HyperParameters'] = [];
            if (null !== $this->hyperParameters && \is_array($this->hyperParameters)) {
                $n = 0;
                foreach ($this->hyperParameters as $item) {
                    $res['HyperParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->inputChannels) {
            $res['InputChannels'] = [];
            if (null !== $this->inputChannels && \is_array($this->inputChannels)) {
                $n = 0;
                foreach ($this->inputChannels as $item) {
                    $res['InputChannels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->metricDefinitions) {
            $res['MetricDefinitions'] = [];
            if (null !== $this->metricDefinitions && \is_array($this->metricDefinitions)) {
                $n = 0;
                foreach ($this->metricDefinitions as $item) {
                    $res['MetricDefinitions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputChannels) {
            $res['OutputChannels'] = [];
            if (null !== $this->outputChannels && \is_array($this->outputChannels)) {
                $n = 0;
                foreach ($this->outputChannels as $item) {
                    $res['OutputChannels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->progressDefinitions) {
            $res['ProgressDefinitions'] = null !== $this->progressDefinitions ? $this->progressDefinitions->toMap() : null;
        }
        if (null !== $this->resourceRequirements) {
            $res['ResourceRequirements'] = [];
            if (null !== $this->resourceRequirements && \is_array($this->resourceRequirements)) {
                $n = 0;
                foreach ($this->resourceRequirements as $item) {
                    $res['ResourceRequirements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportedInstanceTypes) {
            $res['SupportedInstanceTypes'] = $this->supportedInstanceTypes;
        }
        if (null !== $this->supportsDistributedTraining) {
            $res['SupportsDistributedTraining'] = $this->supportsDistributedTraining;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlgorithmSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeDir'])) {
            $model->codeDir = Location::fromMap($map['CodeDir']);
        }
        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = $map['Command'];
            }
        }
        if (isset($map['ComputeResource'])) {
            $model->computeResource = computeResource::fromMap($map['ComputeResource']);
        }
        if (isset($map['Customization'])) {
            $model->customization = customization::fromMap($map['Customization']);
        }
        if (isset($map['HyperParameters'])) {
            if (!empty($map['HyperParameters'])) {
                $model->hyperParameters = [];
                $n                      = 0;
                foreach ($map['HyperParameters'] as $item) {
                    $model->hyperParameters[$n++] = null !== $item ? HyperParameterDefinition::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['InputChannels'])) {
            if (!empty($map['InputChannels'])) {
                $model->inputChannels = [];
                $n                    = 0;
                foreach ($map['InputChannels'] as $item) {
                    $model->inputChannels[$n++] = null !== $item ? Channel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MetricDefinitions'])) {
            if (!empty($map['MetricDefinitions'])) {
                $model->metricDefinitions = [];
                $n                        = 0;
                foreach ($map['MetricDefinitions'] as $item) {
                    $model->metricDefinitions[$n++] = null !== $item ? MetricDefinition::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutputChannels'])) {
            if (!empty($map['OutputChannels'])) {
                $model->outputChannels = [];
                $n                     = 0;
                foreach ($map['OutputChannels'] as $item) {
                    $model->outputChannels[$n++] = null !== $item ? Channel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProgressDefinitions'])) {
            $model->progressDefinitions = progressDefinitions::fromMap($map['ProgressDefinitions']);
        }
        if (isset($map['ResourceRequirements'])) {
            if (!empty($map['ResourceRequirements'])) {
                $model->resourceRequirements = [];
                $n                           = 0;
                foreach ($map['ResourceRequirements'] as $item) {
                    $model->resourceRequirements[$n++] = null !== $item ? ConditionExpression::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupportedInstanceTypes'])) {
            if (!empty($map['SupportedInstanceTypes'])) {
                $model->supportedInstanceTypes = $map['SupportedInstanceTypes'];
            }
        }
        if (isset($map['SupportsDistributedTraining'])) {
            $model->supportsDistributedTraining = $map['SupportsDistributedTraining'];
        }

        return $model;
    }
}
