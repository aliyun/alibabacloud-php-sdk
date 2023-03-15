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
     * @description The description of the template.
     *
     * @example No description
     *
     * @var string
     */
    public $description;

    /**
     * @description The output items of the template.
     *
     * @var outputs[]
     */
    public $outputs;

    /**
     * @description The parameters in the Parameters section of the template.
     *
     * The Parameters section contains the parameters that you must specify when you use the template to create a stack. You can use the parameters to specify the stack details, such as the username, the password, and the Elastic Compute Service (ECS) instance type in the specified region.
     * @var mixed[][]
     */
    public $parameters;

    /**
     * @description The ID of the request.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource types that are used in the template.
     *
     * @var resourceTypes
     */
    public $resourceTypes;

    /**
     * @description The regular resources that are defined in the template.
     *
     * >
     *   For a Resource Orchestration Service (ROS) template, the resource whose definition contains the `Count` parameter is not displayed as a list.
     *   For a Terraform template, the resource whose definition contains the `count` or `for_each` parameter is not displayed as a list.
     *
     * @var resources[]
     */
    public $resources;

    /**
     * @description The update information about the stack.
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
