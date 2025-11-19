<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ModelInfoConfig extends Model
{
    /**
     * @var ModelFeatures
     */
    public $modelFeatures;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var ModelParameterRule[]
     */
    public $modelParameterRules;

    /**
     * @var ModelProperties
     */
    public $modelProperties;
    protected $_name = [
        'modelFeatures' => 'modelFeatures',
        'modelName' => 'modelName',
        'modelParameterRules' => 'modelParameterRules',
        'modelProperties' => 'modelProperties',
    ];

    public function validate()
    {
        if (null !== $this->modelFeatures) {
            $this->modelFeatures->validate();
        }
        if (\is_array($this->modelParameterRules)) {
            Model::validateArray($this->modelParameterRules);
        }
        if (null !== $this->modelProperties) {
            $this->modelProperties->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelFeatures) {
            $res['modelFeatures'] = null !== $this->modelFeatures ? $this->modelFeatures->toArray($noStream) : $this->modelFeatures;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelParameterRules) {
            if (\is_array($this->modelParameterRules)) {
                $res['modelParameterRules'] = [];
                $n1 = 0;
                foreach ($this->modelParameterRules as $item1) {
                    $res['modelParameterRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelProperties) {
            $res['modelProperties'] = null !== $this->modelProperties ? $this->modelProperties->toArray($noStream) : $this->modelProperties;
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
        if (isset($map['modelFeatures'])) {
            $model->modelFeatures = ModelFeatures::fromMap($map['modelFeatures']);
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelParameterRules'])) {
            if (!empty($map['modelParameterRules'])) {
                $model->modelParameterRules = [];
                $n1 = 0;
                foreach ($map['modelParameterRules'] as $item1) {
                    $model->modelParameterRules[$n1] = ModelParameterRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['modelProperties'])) {
            $model->modelProperties = ModelProperties::fromMap($map['modelProperties']);
        }

        return $model;
    }
}
