<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class Evaluator extends Model
{
    /**
     * @var mixed[]
     */
    public $config;

    /**
     * @var string
     */
    public $dataScope;

    /**
     * @var string[]
     */
    public $filters;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resultName;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var string[]
     */
    public $variableMapping;
    protected $_name = [
        'config' => 'config',
        'dataScope' => 'dataScope',
        'filters' => 'filters',
        'name' => 'name',
        'resultName' => 'resultName',
        'resultType' => 'resultType',
        'variableMapping' => 'variableMapping',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        if (\is_array($this->variableMapping)) {
            Model::validateArray($this->variableMapping);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dataScope) {
            $res['dataScope'] = $this->dataScope;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['filters'] = [];
                foreach ($this->filters as $key1 => $value1) {
                    $res['filters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resultName) {
            $res['resultName'] = $this->resultName;
        }

        if (null !== $this->resultType) {
            $res['resultType'] = $this->resultType;
        }

        if (null !== $this->variableMapping) {
            if (\is_array($this->variableMapping)) {
                $res['variableMapping'] = [];
                foreach ($this->variableMapping as $key1 => $value1) {
                    $res['variableMapping'][$key1] = $value1;
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
        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['dataScope'])) {
            $model->dataScope = $map['dataScope'];
        }

        if (isset($map['filters'])) {
            if (!empty($map['filters'])) {
                $model->filters = [];
                foreach ($map['filters'] as $key1 => $value1) {
                    $model->filters[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resultName'])) {
            $model->resultName = $map['resultName'];
        }

        if (isset($map['resultType'])) {
            $model->resultType = $map['resultType'];
        }

        if (isset($map['variableMapping'])) {
            if (!empty($map['variableMapping'])) {
                $model->variableMapping = [];
                foreach ($map['variableMapping'] as $key1 => $value1) {
                    $model->variableMapping[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
