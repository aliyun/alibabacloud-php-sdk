<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec\computeResource;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec\customization;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec\progressDefinitions;

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
     * @var string[]
     */
    public $supportedInstanceTypes;

    /**
     * @var bool
     */
    public $supportsDistributedTraining;
    protected $_name = [
        'codeDir' => 'CodeDir',
        'command' => 'Command',
        'computeResource' => 'ComputeResource',
        'customization' => 'Customization',
        'hyperParameters' => 'HyperParameters',
        'image' => 'Image',
        'inputChannels' => 'InputChannels',
        'jobType' => 'JobType',
        'metricDefinitions' => 'MetricDefinitions',
        'outputChannels' => 'OutputChannels',
        'progressDefinitions' => 'ProgressDefinitions',
        'resourceRequirements' => 'ResourceRequirements',
        'supportedInstanceTypes' => 'SupportedInstanceTypes',
        'supportsDistributedTraining' => 'SupportsDistributedTraining',
    ];

    public function validate()
    {
        if (null !== $this->codeDir) {
            $this->codeDir->validate();
        }
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        if (null !== $this->computeResource) {
            $this->computeResource->validate();
        }
        if (null !== $this->customization) {
            $this->customization->validate();
        }
        if (\is_array($this->hyperParameters)) {
            Model::validateArray($this->hyperParameters);
        }
        if (\is_array($this->inputChannels)) {
            Model::validateArray($this->inputChannels);
        }
        if (\is_array($this->metricDefinitions)) {
            Model::validateArray($this->metricDefinitions);
        }
        if (\is_array($this->outputChannels)) {
            Model::validateArray($this->outputChannels);
        }
        if (null !== $this->progressDefinitions) {
            $this->progressDefinitions->validate();
        }
        if (\is_array($this->resourceRequirements)) {
            Model::validateArray($this->resourceRequirements);
        }
        if (\is_array($this->supportedInstanceTypes)) {
            Model::validateArray($this->supportedInstanceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeDir) {
            $res['CodeDir'] = null !== $this->codeDir ? $this->codeDir->toArray($noStream) : $this->codeDir;
        }

        if (null !== $this->command) {
            if (\is_array($this->command)) {
                $res['Command'] = [];
                $n1 = 0;
                foreach ($this->command as $item1) {
                    $res['Command'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->computeResource) {
            $res['ComputeResource'] = null !== $this->computeResource ? $this->computeResource->toArray($noStream) : $this->computeResource;
        }

        if (null !== $this->customization) {
            $res['Customization'] = null !== $this->customization ? $this->customization->toArray($noStream) : $this->customization;
        }

        if (null !== $this->hyperParameters) {
            if (\is_array($this->hyperParameters)) {
                $res['HyperParameters'] = [];
                $n1 = 0;
                foreach ($this->hyperParameters as $item1) {
                    $res['HyperParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->inputChannels) {
            if (\is_array($this->inputChannels)) {
                $res['InputChannels'] = [];
                $n1 = 0;
                foreach ($this->inputChannels as $item1) {
                    $res['InputChannels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->metricDefinitions) {
            if (\is_array($this->metricDefinitions)) {
                $res['MetricDefinitions'] = [];
                $n1 = 0;
                foreach ($this->metricDefinitions as $item1) {
                    $res['MetricDefinitions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outputChannels) {
            if (\is_array($this->outputChannels)) {
                $res['OutputChannels'] = [];
                $n1 = 0;
                foreach ($this->outputChannels as $item1) {
                    $res['OutputChannels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->progressDefinitions) {
            $res['ProgressDefinitions'] = null !== $this->progressDefinitions ? $this->progressDefinitions->toArray($noStream) : $this->progressDefinitions;
        }

        if (null !== $this->resourceRequirements) {
            if (\is_array($this->resourceRequirements)) {
                $res['ResourceRequirements'] = [];
                $n1 = 0;
                foreach ($this->resourceRequirements as $item1) {
                    $res['ResourceRequirements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportedInstanceTypes) {
            if (\is_array($this->supportedInstanceTypes)) {
                $res['SupportedInstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->supportedInstanceTypes as $item1) {
                    $res['SupportedInstanceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportsDistributedTraining) {
            $res['SupportsDistributedTraining'] = $this->supportsDistributedTraining;
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
        if (isset($map['CodeDir'])) {
            $model->codeDir = Location::fromMap($map['CodeDir']);
        }

        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = [];
                $n1 = 0;
                foreach ($map['Command'] as $item1) {
                    $model->command[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['HyperParameters'] as $item1) {
                    $model->hyperParameters[$n1] = HyperParameterDefinition::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['InputChannels'])) {
            if (!empty($map['InputChannels'])) {
                $model->inputChannels = [];
                $n1 = 0;
                foreach ($map['InputChannels'] as $item1) {
                    $model->inputChannels[$n1] = Channel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['MetricDefinitions'])) {
            if (!empty($map['MetricDefinitions'])) {
                $model->metricDefinitions = [];
                $n1 = 0;
                foreach ($map['MetricDefinitions'] as $item1) {
                    $model->metricDefinitions[$n1] = MetricDefinition::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OutputChannels'])) {
            if (!empty($map['OutputChannels'])) {
                $model->outputChannels = [];
                $n1 = 0;
                foreach ($map['OutputChannels'] as $item1) {
                    $model->outputChannels[$n1] = Channel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProgressDefinitions'])) {
            $model->progressDefinitions = progressDefinitions::fromMap($map['ProgressDefinitions']);
        }

        if (isset($map['ResourceRequirements'])) {
            if (!empty($map['ResourceRequirements'])) {
                $model->resourceRequirements = [];
                $n1 = 0;
                foreach ($map['ResourceRequirements'] as $item1) {
                    $model->resourceRequirements[$n1] = ConditionExpression::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportedInstanceTypes'])) {
            if (!empty($map['SupportedInstanceTypes'])) {
                $model->supportedInstanceTypes = [];
                $n1 = 0;
                foreach ($map['SupportedInstanceTypes'] as $item1) {
                    $model->supportedInstanceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportsDistributedTraining'])) {
            $model->supportsDistributedTraining = $map['SupportsDistributedTraining'];
        }

        return $model;
    }
}
