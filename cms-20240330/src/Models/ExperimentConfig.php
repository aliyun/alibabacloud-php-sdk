<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ExperimentConfig extends Model
{
    /**
     * @var string
     */
    public $endpointConnectorId;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var ModelParameters
     */
    public $modelParameters;

    /**
     * @var string
     */
    public $modelProvider;

    /**
     * @var string
     */
    public $name;

    /**
     * @var PromptTemplateItem[]
     */
    public $promptTemplate;
    protected $_name = [
        'endpointConnectorId' => 'endpointConnectorId',
        'label' => 'label',
        'modelName' => 'modelName',
        'modelParameters' => 'modelParameters',
        'modelProvider' => 'modelProvider',
        'name' => 'name',
        'promptTemplate' => 'promptTemplate',
    ];

    public function validate()
    {
        if (null !== $this->modelParameters) {
            $this->modelParameters->validate();
        }
        if (\is_array($this->promptTemplate)) {
            Model::validateArray($this->promptTemplate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointConnectorId) {
            $res['endpointConnectorId'] = $this->endpointConnectorId;
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelParameters) {
            $res['modelParameters'] = null !== $this->modelParameters ? $this->modelParameters->toArray($noStream) : $this->modelParameters;
        }

        if (null !== $this->modelProvider) {
            $res['modelProvider'] = $this->modelProvider;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->promptTemplate) {
            if (\is_array($this->promptTemplate)) {
                $res['promptTemplate'] = [];
                $n1 = 0;
                foreach ($this->promptTemplate as $item1) {
                    $res['promptTemplate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['endpointConnectorId'])) {
            $model->endpointConnectorId = $map['endpointConnectorId'];
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelParameters'])) {
            $model->modelParameters = ModelParameters::fromMap($map['modelParameters']);
        }

        if (isset($map['modelProvider'])) {
            $model->modelProvider = $map['modelProvider'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['promptTemplate'])) {
            if (!empty($map['promptTemplate'])) {
                $model->promptTemplate = [];
                $n1 = 0;
                foreach ($map['promptTemplate'] as $item1) {
                    $model->promptTemplate[$n1] = PromptTemplateItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
