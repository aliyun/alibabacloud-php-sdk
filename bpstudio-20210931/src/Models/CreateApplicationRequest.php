<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\CreateApplicationRequest\instances;

class CreateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $areaId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $configuration;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var mixed[]
     */
    public $variables;
    protected $_name = [
        'areaId' => 'AreaId',
        'clientToken' => 'ClientToken',
        'configuration' => 'Configuration',
        'instances' => 'Instances',
        'name' => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'templateId' => 'TemplateId',
        'variables' => 'Variables',
    ];

    public function validate()
    {
        if (\is_array($this->configuration)) {
            Model::validateArray($this->configuration);
        }
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->configuration) {
            if (\is_array($this->configuration)) {
                $res['Configuration'] = [];
                foreach ($this->configuration as $key1 => $value1) {
                    $res['Configuration'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['Variables'] = [];
                foreach ($this->variables as $key1 => $value1) {
                    $res['Variables'][$key1] = $value1;
                }
            }
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
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Configuration'])) {
            if (!empty($map['Configuration'])) {
                $model->configuration = [];
                foreach ($map['Configuration'] as $key1 => $value1) {
                    $model->configuration[$key1] = $value1;
                }
            }
        }

        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1++] = instances::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                foreach ($map['Variables'] as $key1 => $value1) {
                    $model->variables[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
