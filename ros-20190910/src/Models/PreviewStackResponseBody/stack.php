<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack\log;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack\resources;
use AlibabaCloud\Tea\Model;

class stack extends Model
{
    /**
     * @description The description of the stack.
     *
     * @example One ECS instance.
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether rollback is disabled for the resources when the stack fails to be created.
     *
     * @example false
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description The log that is generated when the stack is run.
     *
     * @var log
     */
    public $log;

    /**
     * @description The parameters of the stack.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The region where the stack resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resources in the stack.
     *
     * @var resources[]
     */
    public $resources;

    /**
     * @description The stack name.
     *
     * @example MyStack
     *
     * @var string
     */
    public $stackName;

    /**
     * @description The structure that contains the stack policy body.
     *
     * @example {   "Statement": [     {       "Action": "Update:*",       "Resource": "*",       "Effect": "Allow",       "Principal": "*"     },     {       "Action": "Update:*",       "Resource": "LogicalResourceId/apple1",       "Effect": "Deny",       "Principal": "*"     }   ] }
     *
     * @var mixed[]
     */
    public $stackPolicyBody;

    /**
     * @description The description of the template.
     *
     * @example One ECS instance.
     *
     * @var string
     */
    public $templateDescription;

    /**
     * @description The timeout period for creating the stack.
     *
     * Unit: minutes.
     * @example 60
     *
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'description'         => 'Description',
        'disableRollback'     => 'DisableRollback',
        'log'                 => 'Log',
        'parameters'          => 'Parameters',
        'regionId'            => 'RegionId',
        'resources'           => 'Resources',
        'stackName'           => 'StackName',
        'stackPolicyBody'     => 'StackPolicyBody',
        'templateDescription' => 'TemplateDescription',
        'timeoutInMinutes'    => 'TimeoutInMinutes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->log) {
            $res['Log'] = null !== $this->log ? $this->log->toMap() : null;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stack
     */
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
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
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
