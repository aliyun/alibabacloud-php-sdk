<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody\outputs;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody\resources;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody\resourceTypes;
use AlibabaCloud\SDK\ROS\V20190910\Models\ValidateTemplateResponseBody\updateInfo;

class ValidateTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var outputs[]
     */
    public $outputs;
    /**
     * @var mixed[][]
     */
    public $parameters;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var resourceTypes
     */
    public $resourceTypes;
    /**
     * @var resources[]
     */
    public $resources;
    /**
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
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (null !== $this->resourceTypes) {
            $this->resourceTypes->validate();
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        if (null !== $this->updateInfo) {
            $this->updateInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['Outputs'] = [];
                $n1             = 0;
                foreach ($this->outputs as $item1) {
                    $res['Outputs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1                = 0;
                foreach ($this->parameters as $item1) {
                    if (\is_array($item1)) {
                        $res['Parameters'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Parameters'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = null !== $this->resourceTypes ? $this->resourceTypes->toArray($noStream) : $this->resourceTypes;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1               = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->updateInfo) {
            $res['UpdateInfo'] = null !== $this->updateInfo ? $this->updateInfo->toArray($noStream) : $this->updateInfo;
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

        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n1             = 0;
                foreach ($map['Outputs'] as $item1) {
                    $model->outputs[$n1++] = outputs::fromMap($item1);
                }
            }
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1                = 0;
                foreach ($map['Parameters'] as $item1) {
                    if (!empty($item1)) {
                        $model->parameters[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->parameters[$n1++][$key2] = $value2;
                        }
                    }
                }
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
                $n1               = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1++] = resources::fromMap($item1);
                }
            }
        }

        if (isset($map['UpdateInfo'])) {
            $model->updateInfo = updateInfo::fromMap($map['UpdateInfo']);
        }

        return $model;
    }
}
