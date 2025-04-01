<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class RenderServicesByTemplateRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string[]
     */
    public $serviceNameChanges;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var TemplateVariableValueMap
     */
    public $variableValues;
    protected $_name = [
        'parameters' => 'parameters',
        'projectName' => 'projectName',
        'serviceNameChanges' => 'serviceNameChanges',
        'templateName' => 'templateName',
        'variableValues' => 'variableValues',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->serviceNameChanges)) {
            Model::validateArray($this->serviceNameChanges);
        }
        if (null !== $this->variableValues) {
            $this->variableValues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        if (null !== $this->serviceNameChanges) {
            if (\is_array($this->serviceNameChanges)) {
                $res['serviceNameChanges'] = [];
                foreach ($this->serviceNameChanges as $key1 => $value1) {
                    $res['serviceNameChanges'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->variableValues) {
            $res['variableValues'] = null !== $this->variableValues ? $this->variableValues->toArray($noStream) : $this->variableValues;
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
        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        if (isset($map['serviceNameChanges'])) {
            if (!empty($map['serviceNameChanges'])) {
                $model->serviceNameChanges = [];
                foreach ($map['serviceNameChanges'] as $key1 => $value1) {
                    $model->serviceNameChanges[$key1] = $value1;
                }
            }
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['variableValues'])) {
            $model->variableValues = TemplateVariableValueMap::fromMap($map['variableValues']);
        }

        return $model;
    }
}
