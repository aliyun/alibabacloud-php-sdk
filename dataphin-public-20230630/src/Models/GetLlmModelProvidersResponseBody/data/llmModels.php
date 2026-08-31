<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLlmModelProvidersResponseBody\data;

use AlibabaCloud\Dara\Model;

class llmModels extends Model
{
    /**
     * @var string
     */
    public $cnName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int[]
     */
    public $embeddingDimensions;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $invokeType;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string[]
     */
    public $modelTypes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serviceProvider;

    /**
     * @var string[]
     */
    public $tasks;
    protected $_name = [
        'cnName' => 'CnName',
        'description' => 'Description',
        'embeddingDimensions' => 'EmbeddingDimensions',
        'enabled' => 'Enabled',
        'invokeType' => 'InvokeType',
        'modelId' => 'ModelId',
        'modelTypes' => 'ModelTypes',
        'name' => 'Name',
        'serviceProvider' => 'ServiceProvider',
        'tasks' => 'Tasks',
    ];

    public function validate()
    {
        if (\is_array($this->embeddingDimensions)) {
            Model::validateArray($this->embeddingDimensions);
        }
        if (\is_array($this->modelTypes)) {
            Model::validateArray($this->modelTypes);
        }
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnName) {
            $res['CnName'] = $this->cnName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->embeddingDimensions) {
            if (\is_array($this->embeddingDimensions)) {
                $res['EmbeddingDimensions'] = [];
                $n1 = 0;
                foreach ($this->embeddingDimensions as $item1) {
                    $res['EmbeddingDimensions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->invokeType) {
            $res['InvokeType'] = $this->invokeType;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->modelTypes) {
            if (\is_array($this->modelTypes)) {
                $res['ModelTypes'] = [];
                $n1 = 0;
                foreach ($this->modelTypes as $item1) {
                    $res['ModelTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->serviceProvider) {
            $res['ServiceProvider'] = $this->serviceProvider;
        }

        if (null !== $this->tasks) {
            if (\is_array($this->tasks)) {
                $res['Tasks'] = [];
                $n1 = 0;
                foreach ($this->tasks as $item1) {
                    $res['Tasks'][$n1] = $item1;
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
        if (isset($map['CnName'])) {
            $model->cnName = $map['CnName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EmbeddingDimensions'])) {
            if (!empty($map['EmbeddingDimensions'])) {
                $model->embeddingDimensions = [];
                $n1 = 0;
                foreach ($map['EmbeddingDimensions'] as $item1) {
                    $model->embeddingDimensions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['InvokeType'])) {
            $model->invokeType = $map['InvokeType'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['ModelTypes'])) {
            if (!empty($map['ModelTypes'])) {
                $model->modelTypes = [];
                $n1 = 0;
                foreach ($map['ModelTypes'] as $item1) {
                    $model->modelTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ServiceProvider'])) {
            $model->serviceProvider = $map['ServiceProvider'];
        }

        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n1 = 0;
                foreach ($map['Tasks'] as $item1) {
                    $model->tasks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
