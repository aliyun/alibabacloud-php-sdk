<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody\outputs;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody\resources;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody\resourceTypes;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody\updateInfo;
use AlibabaCloud\Tea\Model;

class ValidateTemplateResponseBody extends Model
{
    /**
     * @description The DataSource resource types.
     *
     * @example No description
     *
     * @var string
     */
    public $description;

    /**
     * @description The path of the regular resource. In most cases, the path of a regular resource is the same as the resource name.
     *
     * @var outputs[]
     */
    public $outputs;

    /**
     * @description The regular resources that are defined in the template.
     *
     * >
     *   For a Resource Orchestration Service (ROS) template, the resource whose definition contains the `Count` parameter is not displayed as a list.
     *   For a Terraform template, the resource whose definition contains the `count` or `for_each` parameter is not displayed as a list.
     *
     * @var mixed[][]
     */
    public $parameters;

    /**
     * @description The regular resource type.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The parameters that can be modified. If you change only values of the parameters in a stack template and use the template to update the stack, no validation errors are caused.
     *
     * @var resourceTypes
     */
    public $resourceTypes;

    /**
     * @description The parameters whose changes cause service interruptions under specific conditions. If you change only values of the parameters in a stack template and use the template to update the stack, the new values and the update type determine whether service interruptions are caused.
     *
     * >
     *   This parameter is supported only for a small number of resource types.
     *   This parameter is valid only for changes that are made on ROS stacks.
     *
     * @var resources[]
     */
    public $resources;

    /**
     * @description The parameters that can be modified under uncertain conditions. If you change only values of the parameters in a stack template and use the template to update the stack, the actual running environment determines whether validation errors are caused.
     *
     * @var updateInfo
     */
    public $updateInfo;
    protected $_name = [
        'description'   => 'Description',
        'outputs'       => 'Outputs',
        'parameters'    => 'Parameters',
        'requestId'     => 'RequestId',
        'resourceTypes' => 'ResourceTypes',
        'resources'     => 'Resources',
        'updateInfo'    => 'UpdateInfo',
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
        if (null !== $this->outputs) {
            $res['Outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['Outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = null !== $this->resourceTypes ? $this->resourceTypes->toMap() : null;
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
        if (null !== $this->updateInfo) {
            $res['UpdateInfo'] = null !== $this->updateInfo ? $this->updateInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['Outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? outputs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = $map['Parameters'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = resourceTypes::fromMap($map['ResourceTypes']);
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
        if (isset($map['UpdateInfo'])) {
            $model->updateInfo = updateInfo::fromMap($map['UpdateInfo']);
        }

        return $model;
    }
}
