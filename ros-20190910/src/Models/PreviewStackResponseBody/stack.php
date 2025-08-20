<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack\log;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack\resources;

class stack extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var log
     */
    public $log;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var mixed[]
     */
    public $stackPolicyBody;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'description' => 'Description',
        'disableRollback' => 'DisableRollback',
        'log' => 'Log',
        'parameters' => 'Parameters',
        'regionId' => 'RegionId',
        'resources' => 'Resources',
        'stackName' => 'StackName',
        'stackPolicyBody' => 'StackPolicyBody',
        'templateDescription' => 'TemplateDescription',
        'timeoutInMinutes' => 'TimeoutInMinutes',
    ];

    public function validate()
    {
        if (null !== $this->log) {
            $this->log->validate();
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        if (\is_array($this->stackPolicyBody)) {
            Model::validateArray($this->stackPolicyBody);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }

        if (null !== $this->log) {
            $res['Log'] = null !== $this->log ? $this->log->toArray($noStream) : $this->log;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }

        if (null !== $this->stackPolicyBody) {
            if (\is_array($this->stackPolicyBody)) {
                $res['StackPolicyBody'] = [];
                foreach ($this->stackPolicyBody as $key1 => $value1) {
                    $res['StackPolicyBody'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }

        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }

        if (isset($map['Log'])) {
            $model->log = log::fromMap($map['Log']);
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1] = resources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }

        if (isset($map['StackPolicyBody'])) {
            if (!empty($map['StackPolicyBody'])) {
                $model->stackPolicyBody = [];
                foreach ($map['StackPolicyBody'] as $key1 => $value1) {
                    $model->stackPolicyBody[$key1] = $value1;
                }
            }
        }

        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }

        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        return $model;
    }
}
