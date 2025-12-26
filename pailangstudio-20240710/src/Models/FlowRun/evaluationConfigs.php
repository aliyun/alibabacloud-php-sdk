<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\FlowRun\evaluationConfigs\flowSource;

class evaluationConfigs extends Model
{
    /**
     * @var string[]
     */
    public $dataColumnMapping;

    /**
     * @var flowSource
     */
    public $flowSource;

    /**
     * @var string
     */
    public $inputsOverrideConfig;
    protected $_name = [
        'dataColumnMapping' => 'DataColumnMapping',
        'flowSource' => 'FlowSource',
        'inputsOverrideConfig' => 'InputsOverrideConfig',
    ];

    public function validate()
    {
        if (\is_array($this->dataColumnMapping)) {
            Model::validateArray($this->dataColumnMapping);
        }
        if (null !== $this->flowSource) {
            $this->flowSource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataColumnMapping) {
            if (\is_array($this->dataColumnMapping)) {
                $res['DataColumnMapping'] = [];
                foreach ($this->dataColumnMapping as $key1 => $value1) {
                    $res['DataColumnMapping'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->flowSource) {
            $res['FlowSource'] = null !== $this->flowSource ? $this->flowSource->toArray($noStream) : $this->flowSource;
        }

        if (null !== $this->inputsOverrideConfig) {
            $res['InputsOverrideConfig'] = $this->inputsOverrideConfig;
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
        if (isset($map['DataColumnMapping'])) {
            if (!empty($map['DataColumnMapping'])) {
                $model->dataColumnMapping = [];
                foreach ($map['DataColumnMapping'] as $key1 => $value1) {
                    $model->dataColumnMapping[$key1] = $value1;
                }
            }
        }

        if (isset($map['FlowSource'])) {
            $model->flowSource = flowSource::fromMap($map['FlowSource']);
        }

        if (isset($map['InputsOverrideConfig'])) {
            $model->inputsOverrideConfig = $map['InputsOverrideConfig'];
        }

        return $model;
    }
}
