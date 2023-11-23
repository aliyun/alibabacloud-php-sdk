<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ComponentSpec extends Model
{
    /**
     * @var Location
     */
    public $codeDir;

    /**
     * @var string
     */
    public $command;

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
     * @var ConditionExpression[]
     */
    public $resourceRequirements;
    protected $_name = [
        'codeDir'              => 'CodeDir',
        'command'              => 'Command',
        'hyperParameters'      => 'HyperParameters',
        'image'                => 'Image',
        'inputChannels'        => 'InputChannels',
        'jobType'              => 'JobType',
        'metricDefinitions'    => 'MetricDefinitions',
        'outputChannels'       => 'OutputChannels',
        'resourceRequirements' => 'ResourceRequirements',
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
        if (null !== $this->resourceRequirements) {
            $res['ResourceRequirements'] = [];
            if (null !== $this->resourceRequirements && \is_array($this->resourceRequirements)) {
                $n = 0;
                foreach ($this->resourceRequirements as $item) {
                    $res['ResourceRequirements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ComponentSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeDir'])) {
            $model->codeDir = Location::fromMap($map['CodeDir']);
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
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
        if (isset($map['ResourceRequirements'])) {
            if (!empty($map['ResourceRequirements'])) {
                $model->resourceRequirements = [];
                $n                           = 0;
                foreach ($map['ResourceRequirements'] as $item) {
                    $model->resourceRequirements[$n++] = null !== $item ? ConditionExpression::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
